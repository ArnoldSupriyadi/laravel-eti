<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    public function index()
    {
        $logos = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'logo')
            ->orWhere('name', 'logo-secondary')
            ->get();

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

        $profile = CompanyProfile::findOrFail($id);
        $datime = date('Y-m-d_H-i-s');

        if ($profile->name == 'logo') {
            $fileName = 'logo'.$datime.'.'.$request->logo->extension();
        } else {
            $fileName = 'logo_secondary'.$datime.'.'.$request->logo->extension();
        }

        $destinationPath = 'frontend/img/logo/';
        $existingFilePath = public_path($destinationPath.'/'.$profile->description);

        if (File::exists($existingFilePath)) {
            // Delete the existing file
            File::delete($existingFilePath);
        }

        $profile->update([
            'description' => $fileName,
        ]);

        $request->logo->move(public_path($destinationPath), $fileName);

        return redirect()->route('logo.index')->with(['success' => 'Logo has been updated!']);
    }

}
