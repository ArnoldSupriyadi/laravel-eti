<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('pages.backend.gallery.index');
    }

    public function edit(string $id)
    {
        return view('pages.backend.gallery.edit');
    }

    public function create()
    {
        return view('pages.backend.gallery.create');
    }
}
