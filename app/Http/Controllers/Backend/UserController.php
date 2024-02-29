<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->get();

        return view('pages.backend.user.index',
        [
            'users' => $users,
        ]);
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
