<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $profiles = CompanyProfile::orderBy('name', 'ASC')
        ->where('name', 'about')->get();

        return view('pages.backend.compro.about.index',
        [
            'profiles' => $profiles
        ]);
    }

    public function edit(string $id)
    {
        return view('pages.backend.compro.about.edit');
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
