<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name', 'ASC')->get();

        return view('pages.backend.product.index',
        [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('pages.backend.product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if($request->hasFile('image')) {
            $idImage = Product::latest()->first()->id;

            $fileName = 'product'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/products/';

            DB::table('products')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('product.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('pages.backend.product.edit', compact('product'));
    }

    public function editImage(string $id)
    {
        $product = Product::findOrFail($id);

        return view('pages.backend.product.editImage', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
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

        $fileName = 'product'.$id.'.'.$request->image->extension();
        $product = Product::findOrFail($id);

        $product->update([
            'image' => $fileName,
        ]);

        $destinationPath = 'frontend/img/products/';
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('product.index')->with(['success' => 'Product Image has been updated!']);
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
