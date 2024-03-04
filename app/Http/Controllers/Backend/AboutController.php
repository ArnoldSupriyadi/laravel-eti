<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CompanyProfile;
use App\Models\CoreValue;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

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

        $visionMission = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'vision')
            ->orWhere('name', 'mission')
            ->get();

        $logo = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'logo')
            ->get();

        $aboutImage = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'about_image')
            ->get();

        $coreValues = CoreValue::orderBy('name', 'ASC')->get();
        $clients = Client::all();
        $productCategories = ProductCategory::all();

        return view('pages.backend.compro.about.index',
        [
            'profiles' => $profiles,
            'abouts' => $abouts,
            'visionMission' => $visionMission,
            'aboutImage' => $aboutImage,
            'coreValues' => $coreValues,
            'clients' => $clients,
            'productCategories' => $productCategories,
        ]);
    }

    public function edit(string $id)
    {
        $profile = CompanyProfile::findOrFail($id);
        return view('pages.backend.compro.about.edit', compact('profile'));
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
}
