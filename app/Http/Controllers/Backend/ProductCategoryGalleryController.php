<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryGallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductCategoryGalleryController extends Controller
{
    public function index(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $galleries = ProductCategoryGallery::where('category_id', $id)->orderBy('name', 'ASC')->get();

        return view('pages.backend.product.category.gallery.index',
        [
            'category' => $category,
            'galleries' => $galleries,
        ]);
    }

    public function create(string $id)
    {
        $category = ProductCategory::findOrFail($id);

        return view('pages.backend.product.category.gallery.create', compact('category'));
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

        ProductCategoryGallery::create([
            'category_id' => $id,
            'name' => $request->name,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        if($request->hasFile('image')) {
            $idImage = ProductCategoryGallery::latest()->first()->id;

            $fileName = 'ctgGallery'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/products/categories/category'.$id.'/';

            DB::table('product_category_galleries')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('productCategoryGallery.index', $id)->with(['success' => 'Product Category Gallery berhasil disimpan!']);
    }

    public function show(string $id)
    {
        $gallery = ProductCategoryGallery::findOrFail($id);

        return view('pages.backend.product.category.gallery.show', compact('gallery'));
    }

    public function edit(string $id)
    {
        $gallery = ProductCategoryGallery::findOrFail($id);

        return view('pages.backend.product.category.gallery.edit', compact('gallery'));
    }

    public function editImage(string $id)
    {
        $gallery = ProductCategoryGallery::findOrFail($id);

        return view('pages.backend.product.category.gallery.editImage', compact('gallery'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        $gallery = ProductCategoryGallery::findOrFail($id);

        $gallery->update([
            'name' => $request->name,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('productCategoryGallery.index', $gallery->category_id)->with(['success' => 'Product Category Gallery berhasil diubah!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $datime = date('Y-m-d_H-i-s');
        $fileName = 'ctgGallery'.$id.'_'.$datime.'.'.$request->image->extension();
        $gallery = ProductCategoryGallery::findOrFail($id);

        $destinationPath = 'frontend/img/products/categories/category'.$gallery->category_id.'/';
        $existingFilePath = public_path($destinationPath.'/'.$gallery->image);

        if (File::exists($existingFilePath)) {
            // Delete the existing file
            File::delete($existingFilePath);
        }

        $gallery->update([
            'image' => $fileName,
        ]);
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('productCategoryGallery.index', $gallery->category_id)->with(['success' => 'Product Category Gallery Image has been updated!']);
    }

    public function destroy(string $id, Request $request)
    {
        $gallery = ProductCategoryGallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('productCategoryGallery.index', $gallery->category_id)->with(['success' => 'Product Category Gallery berhasil dihapus!']);
    }
}
