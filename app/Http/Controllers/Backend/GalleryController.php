<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('name', 'ASC')->get();

        return view('pages.backend.gallery.index',
        [
            'galleries' => $galleries,
        ]);
    }

    public function create()
    {
        return view('pages.backend.gallery.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        if($request->hasFile('image')) {
            $idImage = Gallery::latest()->first()->id;

            $fileName = 'gallery'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/galleries/';

            DB::table('galleries')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('gallery.index')->with(['success' => 'Gallery berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('pages.backend.gallery.edit', compact('gallery'));
    }

    public function editImage(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('pages.backend.gallery.editImage', compact('gallery'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        $gallery = Gallery::findOrFail($id);

        $gallery->update([
            'name' => $request->name,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('gallery.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $datime = date('Y-m-d_H-i-s');
        $fileName = 'gallery'.$datime.'.'.$request->image->extension();
        $gallery = Gallery::findOrFail($id);

        $destinationPath = 'frontend/img/galleries/';
        $existingFilePath = public_path($destinationPath.'/'.$gallery->image);

        if (File::exists($existingFilePath)) {
            // Delete the existing file
            File::delete($existingFilePath);
        }

        $gallery->update([
            'image' => $fileName,
        ]);
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('gallery.index')->with(['success' => 'Image has been updated!']);
    }

    public function destroy(string $id, Request $request)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('gallery.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
