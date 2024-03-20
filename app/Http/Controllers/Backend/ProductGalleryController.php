<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductGalleryController extends Controller
{
    public function index(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $galleries = ProductGallery::orderBy('name', 'ASC')->get();

        return view('pages.backend.product.gallery.index',
        [
            'category' => $category,
            'galleries' => $galleries,
        ]);
    }

    public function create(string $id)
    {
        $product = Product::findOrFail($id);

        return view('pages.backend.product.gallery.category.create', compact('product'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required',
            'price' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($request->price == null) {
            $price = 0;
        } else {
            $price = $request->price;
        }

        ProductGallery::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $price,
            'description' => $request->description,
        ]);

        if($request->hasFile('image')) {
            $idImage = ProductGallery::latest()->first()->id;

            $fileName = 'gallery'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/galleries/';

            DB::table('product_galleries')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('product.index')->with(['success' => 'Product Gallery berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $gallery = ProductGallery::findOrFail($id);

        return view('pages.backend.product.gallery.gallery.edit', compact('gallery'));
    }

    public function editImage(string $id)
    {
        $gallery = ProductGallery::findOrFail($id);

        return view('pages.backend.product.gallery.gallery.editImage', compact('gallery'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($request->price == null) {
            $price = 0;
        } else {
            $price = $request->price;
        }

        $category = ProductGallery::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'price' => $price,
            'description' => $request->description,
        ]);

        return redirect()->route('product.index')->with(['success' => 'Product Gallery berhasil diubah!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $fileName = 'gallery'.$id.'.'.$request->image->extension();
        $gallery = ProductGallery::findOrFail($id);

        $gallery->update([
            'image' => $fileName,
        ]);

        $destinationPath = 'frontend/img/galleries/';
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('product.index')->with(['success' => 'Product Gallery Image has been updated!']);
    }

    public function destroy(string $id)
    {
        $gallery = ProductGallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('product.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
