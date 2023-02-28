<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Menampilkan data
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat data
        return view('barang.create');
    }

    public function store(Request $request)
    {

        Barang::create($request->all());
        return to_route('barang.index');
    }

    public function show(Barang $barang)
    {
        //
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $barang->update($request->all());
        return to_route('barang.index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return to_route('barang.index');
    }
}
