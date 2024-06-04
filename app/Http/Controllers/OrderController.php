<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Destination;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrderController
{

    public function index()
    {
        return view('frontend.order.index');
    }

    public function create($id)
    {
        $destination = Destination::findOrFail($id);

        return view('frontend.order.create', compact([
            'destination'
        ]));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jumlah_orang' => 'required',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
        ]);

        $dokumentasi = $request->input('dokumentasi') === 'on' ? 1 : 0;
        $jumlahOrang = intval($request->input('jumlah_orang'));
        $harga = intval(str_replace(['Rp ', '.'], '', $request->input('harga')));
        $totalPembayaran = ($jumlahOrang * $harga) + ($dokumentasi ? 100000 : 0);
        $request->merge(['dokumentasi' => $dokumentasi]);
        $request->merge(['total_pembayaran' => $totalPembayaran]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $order = Order::create([
            'destination_id' => $request->input('destination_id'),
            'nama' => $request->input('nama'),
            'jumlah_orang' => $request->input('jumlah_orang'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'alamat' => $request->input('alamat'),
            'dokumentasi' => $request->input('dokumentasi'),
            'tanggal' => $request->input('tanggal'),
            'total_pembayaran' => $request->input('total_pembayaran'),
        ]);

        return redirect()->route('order.show', $order->id)->with('success', 'Pesanan berhasil dibuat');
    }

    public function show($id)
    {
        $order = Order::with('destination')->findOrFail($id);

        return view('frontend.order.show', compact([
            'order'
        ]));
    }

    public function edit(Order $order)
    {
        //
    }

    public function destroy($id)
    {
        Order::destroy($id);

        return redirect()->route('dashboard.index')->with('success', 'Pesanan berhasil dihapus');
    }
}
