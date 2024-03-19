<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::orderBy('name', 'ASC')->get();

        return view('pages.backend.product.index', ['categories' => $categories]);
    }

    public function create(string $id)
    {
        $product = Product::findOrFail($id);

        return view('pages.backend.product.category.create', compact('product'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product' => 'required',
            'name' => 'required',
            'description' => 'nullable',
        ]);

        ProductCategory::create([
            'product_id' => $request->product,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if($request->hasFile('image')) {
            $idImage = ProductCategory::latest()->first()->id;

            $fileName = 'category'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/categories/';

            DB::table('product_categories')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('product.index')->with(['success' => 'Product Category berhasil disimpan!']);
    }

    public function detailProduct(string $id)
    {

    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
        $category = ProductCategory::findOrFail($id);

        return view('pages.backend.product.category.edit', compact('category'));
    }

    public function editImage(string $id)
    {
        $category = ProductCategory::findOrFail($id);

        return view('pages.backend.product.category.editImage', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $category = ProductCategory::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('product.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $fileName = 'category'.$id.'.'.$request->image->extension();
        $category = ProductCategory::findOrFail($id);

        $category->update([
            'image' => $fileName,
        ]);

        $destinationPath = 'frontend/img/categories/';
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('product.index')->with(['success' => 'Product Category Image has been updated!']);
    }

    public function destroy(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('product.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
