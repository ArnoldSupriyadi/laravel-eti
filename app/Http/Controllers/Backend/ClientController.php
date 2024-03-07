<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function create()
    {
        return view('pages.backend.compro.client.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        Client::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if($request->hasFile('logo')) {
            $idImage = Client::latest()->first()->id;

            $fileName = 'client'.$idImage.'.'.$request->logo->extension();
            $destinationPath = 'frontend/img/clients/';

            DB::table('clients')
                ->where('id', $idImage)
                ->update(['logo' => $fileName]);

            $request->logo->move(public_path($destinationPath), $fileName);
        }

        return redirect()->route('about.index')->with(['success' => 'Client berhasil disimpan!']);
    }

    public function edit(string $id)
    {
        $client = Client::findOrFail($id);

        return view('pages.backend.compro.client.edit', compact('client'));
    }

    public function editLogo(string $id)
    {
        $client = Client::findOrFail($id);

        return view('pages.backend.compro.client.editLogo', compact('client'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $client = Client::findOrFail($id);

        $client->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('about.index')->with(['success' => 'Client berhasil diubah!']);
    }

    public function updateLogo(Request $request, string $id)
    {
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:1024',
        ]);

        $fileName = 'client'.$id.'.'.$request->logo->extension();
        $client = Client::findOrFail($id);

        $client->update([
            'logo' => $fileName,
        ]);

        $destinationPath = 'frontend/img/clients/';
        $request->logo->move(public_path($destinationPath), $fileName);

        return redirect()->route('about.index')->with(['success' => 'Client Logo has been updated!']);
    }

    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('about.index')->with(['success' => 'Client berhasil dihapus!']);
    }
}
