<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CompanyProfile;
use App\Models\CoreValue;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $profiles = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'about')->get();

        $abouts = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'about')
            ->orWhere('name', 'name')
            ->orWhere('name', 'nickname')
            ->orWhere('name', 'legal_name')
            ->get();

        $visionMissions = CompanyProfile::where('name', 'vision')
            ->orWhere('name', 'mission')
            ->get();

        $logo = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'logo')
            ->get();

        $aboutImages = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'about_image')
            ->get();

        $productImages = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'productservice_image')
            ->get();

        $coreValues = CoreValue::orderBy('name', 'ASC')->get();
        $clients = Client::all();
        $products = Product::all();

        return view('pages.backend.compro.about.index',
        [
            'profiles' => $profiles,
            'abouts' => $abouts,
            'visionMissions' => $visionMissions,
            'aboutImages' => $aboutImages,
            'productImages' => $productImages,
            'coreValues' => $coreValues,
            'clients' => $clients,
            'products' => $products,
        ]);
    }

    public function edit(string $id)
    {
        $profile = CompanyProfile::findOrFail($id);
        return view('pages.backend.compro.about.edit', compact('profile'));
    }

    public function editAboutImage(string $id)
    {
        $profile = CompanyProfile::findOrFail($id);
        return view('pages.backend.compro.about.editAboutImage', compact('profile'));
    }

    public function editProductImage(string $id)
    {
        $profile = CompanyProfile::findOrFail($id);
        return view('pages.backend.compro.about.editProductImage', compact('profile'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $profile = CompanyProfile::findOrFail($id);

        $profile->update([
            'description' => $request->description,
        ]);

        return redirect()->route('about.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function updateAboutImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $fileName = 'about_img'.'.'.$request->image->extension();
        $about = CompanyProfile::findOrFail($id);

        $about->update([
            'description' => $fileName,
        ]);

        $destinationPath = 'frontend/img/abouts/';
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('about.index')->with(['success' => 'About Image has been updated!']);
    }

    public function updateProductImage(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $fileName = 'productservice_img'.'.'.$request->image->extension();
        $about = CompanyProfile::findOrFail($id);

        $about->update([
            'description' => $fileName,
        ]);

        $destinationPath = 'frontend/img/abouts/';
        $request->image->move(public_path($destinationPath), $fileName);

        return redirect()->route('about.index')->with(['success' => 'Product & Service Image has been updated!']);
    }

}
