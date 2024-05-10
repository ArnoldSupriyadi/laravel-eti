<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('name', 'ASC')->get();

        return view('pages.backend.portfolio.index', ['portfolios' => $portfolios]);
    }

    public function create()
    {
        return view('pages.backend.portfolio.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'description_two' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        Portfolio::create([
            'name' => $request->name,
            'description' => $request->description,
            'description_two' => $request->description_two,
        ]);

        if($request->hasFile('image')) {
            $idImage = Portfolio::latest()->first()->id;

            $datime = date('Y-m-d_H-i-s');
            $fileName = 'portfolio'.$datime.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/portfolio/'.$idImage;

            DB::table('portfolios')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('portfolio.index')->with(['success' => 'Portfolio berhasil disimpan!']);
    }

    public function show(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('pages.backend.portfolio.show', compact('portfolio'));
    }

    public function edit(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('pages.backend.portfolio.edit', compact('portfolio'));
    }

    public function editImage(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('pages.backend.portfolio.editImage', compact('portfolio'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'description_two' => 'nullable',
        ]);

        $portfolio = Portfolio::findOrFail($id);

        $portfolio->update([
            'name' => $request->name,
            'description' => $request->description,
            'description_two' => $request->description_two,
        ]);

        return redirect()->route('portfolio.show', $id)->with(['success' => 'Portfolio has been updated!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        // baru
        $datime = date('Y-m-d_H-i-s');
        $fileName = 'portfolio'.$datime.'.'.$request->image->extension();
        $portfolio = Portfolio::findOrFail($id);

        $destinationPath = 'front/img/portfolio/'.$id;
        $existingFilePath = public_path($destinationPath.'/'.$portfolio->image);

        if (File::exists($existingFilePath)) {
            // Delete the existing file
            File::delete($existingFilePath);
        }

        $portfolio->update(['image' => $fileName]);
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('portfolio.show', $id)->with(['success' => 'Portfolio has been updated!']);
    }

    public function destroy(string $id, Request $request)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('portfolio.index')->with(['success' => 'Portfolio berhasil dihapus!']);
    }
}
