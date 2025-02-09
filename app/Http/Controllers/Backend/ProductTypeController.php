<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductTypeController extends Controller
{
    public function index(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        $productTypes = ProductType::where('category_id', $id)->get();

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
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        ProductType::create([
            'category_id' => $id,
            'name' => $request->name,
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

        return redirect()->route('productType.index', $id)->with(['success' => 'Product Type berhasil disimpan!']);
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
            'description' => 'nullable',
            'nama' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        $productType = ProductType::findOrFail($id);

        $productType->update([
            'name' => $request->name,
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

        $datime = date('Y-m-d_H-i-s');
        $fileName = 'productType'.$id.'_'.$datime.'.'.$request->image->extension();
        $productType = ProductType::findOrFail($id);

        $destinationPath = 'frontend/img/products/types/';
        $existingFilePath = public_path($destinationPath.'/'.$productType->image);

        if (File::exists($existingFilePath)) {
            // Delete the existing file
            File::delete($existingFilePath);
        }

        $productType->update([
            'image' => $fileName,
        ]);

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
