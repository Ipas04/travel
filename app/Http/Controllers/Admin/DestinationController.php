<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationController
{
    public function index()
    {
        $destinations = Destination::all();

        return view('frontend.admin.destination.index', compact([
            'destinations'
        ]));
    }

    public function create()
    {
        return view('frontend.admin.destination.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Destination::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.destination.index')->with('success', 'Destinasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);

        return view('frontend.admin.destination.edit', compact([
            'destination'
        ]));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $destination = Destination::findOrFail($id);
        $destination->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.destination.index')->with('success', 'Destinasi berhasil diubah');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('admin.destination.index')->with('success', 'Destinasi berhasil dihapus');
    }
}
