<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
    public function index(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $productTypes = ProductType::where('category_id', $id)->orderBy('name', 'ASC')->get();

        return view('pages.backend.product.type.index',
        [
            'category' => $category,
            'productTypes' => $productTypes,
        ]);
    }

    public function create(string $id)
    {
        $category = ProductCategory::findOrFail($id);

        return view('pages.backend.product.type.create', compact('category'));
    }

    public function store(Request $request, string $id)
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

        ProductType::create([
            'category_id' => $id,
            'name' => $request->name,
            'price' => $price,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        if($request->hasFile('image')) {
            $idImage = ProductType::latest()->first()->id;

            $fileName = 'productType'.$idImage.'.'.$request->image->extension();
            $destinationPath = 'frontend/img/products/types/';

            DB::table('product_types')
                ->where('id', $idImage)
                ->update(['image' => $fileName]);

            $request->image->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('productType.index', $request->category)->with(['success' => 'Product Type berhasil disimpan!']);
    }

    public function show(string $id)
    {
        $productType = ProductType::findOrFail($id);

        return view('pages.backend.product.type.show', compact('productType'));
    }

    public function edit(string $id)
    {
        $productType = ProductType::findOrFail($id);

        return view('pages.backend.product.type.edit', compact('productType'));
    }

    public function editImage(string $id)
    {
        $productType = ProductType::findOrFail($id);

        return view('pages.backend.product.type.editImage', compact('productType'));
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

        $productType = ProductType::findOrFail($id);

        $productType->update([
            'name' => $request->name,
            'price' => $price,
            'description' => $request->description,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('productType.index', $productType->category_id)->with(['success' => 'Product Type berhasil diubah!']);
    }

    public function updateImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $fileName = 'productType'.$id.'.'.$request->image->extension();
        $productType = ProductType::findOrFail($id);

        $productType->update([
            'image' => $fileName,
        ]);

        $destinationPath = 'frontend/img/products/types/';
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('productType.index', $productType->category_id)->with(['success' => 'Product Type Image has been updated!']);
    }

    public function destroy(string $id, Request $request)
    {
        $productType = ProductType::findOrFail($id);
        $productType->delete();

        return redirect()->route('productType.index', $productType->category_id)->with(['success' => 'Type berhasil dihapus!']);
    }
}
