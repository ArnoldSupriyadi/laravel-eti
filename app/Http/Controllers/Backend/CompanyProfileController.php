<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $profiles = CompanyProfile::orderBy('name', 'ASC')->get();

        return view('pages.backend.compro.index', ['profiles' => $profiles]);
    }

    public function create()
    {
        return view('pages.backend.compro.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        CompanyProfile::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('compro.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $profile = CompanyProfile::findOrFail($id);

        return view('pages.backend.compro.edit', compact('profile'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $profile = CompanyProfile::findOrFail($id);

        $profile->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('compro.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function destroy(string $id)
    {
        $profile = CompanyProfile::findOrFail($id);
        $profile->delete();

        return redirect()->route('compro.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
