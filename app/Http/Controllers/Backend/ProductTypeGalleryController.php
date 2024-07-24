<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\ProductTypeGallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductTypeGalleryController extends Controller
{
    public function index(string $id)
    {
        $type = ProductType::findOrFail($id);
        $galleries = ProductTypeGallery::where('type_id', $id)->orderBy('name', 'ASC')->get();

        return view('pages.backend.product.type.gallery.index',
        [
            'type' => $type,
            'galleries' => $galleries,
        ]);
    }

    public function create(string $id)
    {
        $type = ProductType::findOrFail($id);

        return view('pages.backend.product.type.gallery.create', compact('type'));
    }

    public function store(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        ProductTypeGallery::create([
            'type_id' => $id,
            'name' => $request->name,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        if($request->hasFile('image')) {
            $idImage = ProductTypeGallery::latest()->first()->id;

            $fileName = 'typeGallery'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/products/types/type'.$id.'/';

            DB::table('product_types')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('productTypeGallery.index', $id)->with(['success' => 'Product Type Gallery berhasil disimpan!']);
    }

    public function show(string $id)
    {
        $gallery = ProductTypeGallery::findOrFail($id);

        return view('pages.backend.product.type.gallery.show', compact('gallery'));
    }

    public function edit(string $id)
    {
        $gallery = ProductTypeGallery::findOrFail($id);

        return view('pages.backend.product.type.gallery.edit', compact('gallery'));
    }

    public function editImage(string $id)
    {
        $gallery = ProductTypeGallery::findOrFail($id);

        return view('pages.backend.product.type.gallery.editImage', compact('gallery'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        $gallery = ProductTypeGallery::findOrFail($id);

        $gallery->update([
            'name' => $request->name,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('productTypeGallery.index', $gallery->type_id)->with(['success' => 'Product Type Gallery berhasil diubah!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $datime = date('Y-m-d_H-i-s');
        $fileName = 'typeGallery'.$id.'_'.$datime.'.'.$request->image->extension();
        $gallery = ProductTypeGallery::findOrFail($id);

        $destinationPath = 'frontend/img/products/types/type'.$gallery->type_id.'/';
        $existingFilePath = public_path($destinationPath.'/'.$gallery->image);

        if (File::exists($existingFilePath)) {
            // Delete the existing file
            File::delete($existingFilePath);
        }

        $gallery->update([
            'image' => $fileName,
        ]);
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('productTypeGallery.index', $gallery->type_id)->with(['success' => 'Product Type Gallery Image has been updated!']);
    }

    public function destroy(string $id, Request $request)
    {
        $gallery = ProductTypeGallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('productTypeGallery.index', $gallery->type_id)->with(['success' => 'Product Type Gallery berhasil dihapus!']);
    }
}
