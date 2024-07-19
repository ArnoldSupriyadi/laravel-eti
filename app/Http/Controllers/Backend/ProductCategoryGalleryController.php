<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'price' => 'nullable',
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        if ($request->price == null) {
            $price = 0;
        } else {
            $price = $request->price;
        }

        ProductCategoryGallery::create([
            'category_id' => $id,
            'name' => $request->name,
            'price' => $price,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        if($request->hasFile('image')) {
            $idImage = ProductCategoryGallery::latest()->first()->id;

            $fileName = 'ctgGallery'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/products/categories/category'.$id.'/';

            DB::table('product_types')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('productCategoryGallery.index', $id)->with(['success' => 'Product Category Gallery berhasil disimpan!']);
    }

    public function show(string $id)
    {
        $gallery = ProductCategoryGallery::findOrFail($id);

        return view('pages.backend.product.category.gallery.show', compact('productType'));
    }

    public function edit(string $id)
    {
        $gallery = ProductCategoryGallery::findOrFail($id);

        return view('pages.backend.product.category.gallery.edit', compact('productType'));
    }

    public function editImage(string $id)
    {
        $gallery = ProductCategoryGallery::findOrFail($id);

        return view('pages.backend.product.category.gallery.editImage', compact('productType'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'nullable',
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        if ($request->price == null) {
            $price = 0;
        } else {
            $price = $request->price;
        }

        $gallery = ProductCategoryGallery::findOrFail($id);

        $gallery->update([
            'name' => $request->name,
            'price' => $price,
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

        $fileName = 'ctgGallery'.$id.'.'.$request->image->extension();
        $gallery = ProductCategoryGallery::findOrFail($id);

        $gallery->update([
            'image' => $fileName,
        ]);

        $destinationPath = 'frontend/img/products/categories/category'.$id.'/';
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
