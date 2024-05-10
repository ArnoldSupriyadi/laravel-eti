<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('name', 'ASC')->get();

        return view('pages.backend.news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('pages.backend.news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        News::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if($request->hasFile('image')) {
            $idImage = News::latest()->first()->id;

            $datime = date('Y-m-d_H-i-s');
            $fileName = 'news'.$datime.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/news/'.$idImage;

            DB::table('news')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('news.index')->with(['success' => 'News berhasil disimpan!']);
    }

    public function show(string $id)
    {
        $news = News::findOrFail($id);

        return view('pages.backend.news.show', compact('news'));
    }

    public function edit(string $id)
    {
        $news = News::findOrFail($id);

        return view('pages.backend.news.edit', compact('news'));
    }

    public function editImage(string $id)
    {
        $news = News::findOrFail($id);

        return view('pages.backend.news.editImage', compact('news'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $news = News::findOrFail($id);

        $news->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('news.show', $id)->with(['success' => 'News has been updated!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        // baru
        $datime = date('Y-m-d_H-i-s');
        $fileName = 'news'.$datime.'.'.$request->image->extension();
        $news = News::findOrFail($id);

        $destinationPath = 'front/img/news/'.$id;
        $existingFilePath = public_path($destinationPath.'/'.$news->image);

        if (File::exists($existingFilePath)) {
            // Delete the existing file
            File::delete($existingFilePath);
        }

        $news->update(['image' => $fileName]);
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('news.show', $id)->with(['success' => 'News Image has been updated!']);
    }

    public function destroy(string $id, Request $request)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
