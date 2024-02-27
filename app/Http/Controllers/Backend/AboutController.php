<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.backend.about.index');
    }

    public function edit()
    {
        return view('pages.backend.about.edit');
    }
}
