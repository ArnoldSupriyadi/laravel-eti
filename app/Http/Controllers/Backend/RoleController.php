<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('name', 'ASC')->get();

        return view('pages.backend.role.index', ['roles' => $roles]);
    }

    public function create()
    {
        $roles = Role::all();

        return view('pages.backend.role.create',
        ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Role::create([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);

        return redirect()->route('role.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $role = Role::findOrFail($id);

        return view('pages.backend.role.edit', compact('role'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $role = Role::findOrFail($id);

        $role->update([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);

        return redirect()->route('role.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('role.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
