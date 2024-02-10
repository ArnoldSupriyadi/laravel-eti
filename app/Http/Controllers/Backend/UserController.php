<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view ('pages.backend.login');
    }

    public function dashboard()
    {
        return view('pages.backend.dashboard');
    }

    public function index()
    {
        return view('pages.backend.user.index');
    }

    public function createUser()
    {
        return view('pages.backend.user.create');
    }
}
