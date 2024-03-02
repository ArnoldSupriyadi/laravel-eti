<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $profiles = CompanyProfile::orderBy('name', 'ASC')
        ->where('name', 'email')
        ->orWhere('name', 'website')
        ->orWhere('name', 'phone')
        ->orWhere('name', 'address_one')
        ->orWhere('name', 'address_two')
        ->get();

        return view('pages.backend.compro.contact.index',
        [
            'profiles' => $profiles
        ]);
    }

    public function edit(string $id)
    {
        return view('pages.backend.compro.contact.edit');
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

        return redirect()->route('contact.index')->with(['success' => 'Data berhasil diubah!']);
    }
}
