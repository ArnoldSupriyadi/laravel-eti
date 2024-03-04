<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CoreValue;
use Illuminate\Http\Request;

class CoreValueController extends Controller
{
    public function create()
    {
        return view('pages.backend.compro.coreValue.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        CoreValue::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('about.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $coreValue = CoreValue::findOrFail($id);

        return view('pages.backend.compro.coreValue.edit', compact('coreValue'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $coreValue = CoreValue::findOrFail($id);

        $coreValue->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('about.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function destroy(string $id)
    {
        $coreValue = CoreValue::findOrFail($id);
        $coreValue->delete();

        return redirect()->route('about.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
