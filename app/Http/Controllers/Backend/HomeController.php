<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.backend.home.index');
    }

    public function edit(string $id)
    {
        return view('pages.backend.home.edit');
    }
}
