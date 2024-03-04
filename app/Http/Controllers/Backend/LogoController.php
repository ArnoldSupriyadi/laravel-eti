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

}
