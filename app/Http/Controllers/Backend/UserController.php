<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->get();

        return view('pages.backend.user.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all();

        return view('pages.backend.user.create',
        ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'role' => 'required',
            'name' => 'required|max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
            'phone' => 'required|max:15',
            'address' => 'required',
        ]);

        User::create([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('user.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);

        return view('pages.backend.user.edit', compact('roles', 'user'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'role' => 'required',
            'name' => 'required|max:50',
            'email' => 'required|email:dns',
            'phone' => 'required|max:15',
            'address' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('user.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function updatePassword(Request $request, string $id)
    {
        $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required',
            'password_confirm' => 'required',
        ]);

        $user = User::findOrFail($id);

        if ($request->password == $request->password_confirm) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('user.index')->with(['success' => 'Password berhasil diubah!']);

        } else {
            return redirect()->route('user.index')->with(['error' => 'Password gagal diubah!']);
        }
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
