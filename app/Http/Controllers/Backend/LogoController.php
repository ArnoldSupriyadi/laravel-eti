<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index()
    {
        $logos = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'logo')->get();

        return view('pages.backend.compro.logo.index',
        [
            'logos' => $logos
        ]);
    }

    public function edit(string $id)
    {
        $logo = CompanyProfile::findOrFail($id);

        return view('pages.backend.compro.logo.edit', compact('logo'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $fileName = 'logo'.'.'.$request->logo->extension();
        $profile = CompanyProfile::findOrFail($id);

        $profile->update([
            'logo' => $fileName,
        ]);

        $destinationPath = 'frontend/img/logo/';
        $request->logo->move(public_path($destinationPath), $fileName);

        return redirect()->route('logo.index')->with(['success' => 'Logo has been updated!']);
    }

}
