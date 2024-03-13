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

        return view('pages.backend.product.index', ['products' => $products]);
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
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('product.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('pages.backend.product.edit', compact('product'));
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

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
