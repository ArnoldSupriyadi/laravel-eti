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

    public function createUser()
    {
        return view('pages.backend.user.create');
    }

    public function editUser()
    {
        return view('pages.backend.user.edit');
    }
}
