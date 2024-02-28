<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.backend.user.index');
    }

    public function create()
    {
        return view('pages.backend.user.create');
    }

    public function edit()
    {
        return view('pages.backend.user.edit');
    }
}
