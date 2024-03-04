<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index()
    {
        $profiles = CompanyProfile::orderBy('name', 'ASC')
            ->where('name', 'logo')->get();

        return view('pages.backend.logo.index',
        [
            'profiles' => $profiles
        ]);
    }

    public function edit(string $id)
    {
        $profile = CompanyProfile::findOrFail($id);

        return view('pages.backend.compro.logo.edit', compact('profile'));
    }

}
