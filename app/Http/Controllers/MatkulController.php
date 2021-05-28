<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function table()
    {
        return view('matkul', [
            'matkuls' => Matkul::paginate(10),
        ]);
    }

    public function create()
    {
        return view('create', [
            'matkuls' => new Matkul
        ]);
    }

    public function store()
    {
        Matkul::create([
            'kode_mk' => request('kode_mk'),
            'nama_mk' => request('nama_mk'),
            'dosen' => request('dosen'),
        ]);

        return back()->with('success', 'Matakuliah berhasil dibuat');
    }

    public function edit(Matkul $matkul, $id)
    {
        $matkul = Matkul::find($id);
        return view('edit', [
            'matkul' => $matkul
        ]);
    }

    public function update(Matkul $matkul, $id)
    {
        $matkul = [
            'kode_mk' => request('kode_mk'),
            'nama_mk' => request('nama_mk'),
            'dosen' => request('dosen'),
        ];
        Matkul::whereId($id)->update($matkul);
        
        return redirect()->route('matkul')->with('success', 'Matakuliah berhasil diperbarui');
    }

    public function destroy(Matkul $matkul, $id)
    {   
        $matkul = Matkul::find($id);
        $matkul->delete();
        return back()->with('success', 'Matakuliah berhasil dihapus');
    }
}
