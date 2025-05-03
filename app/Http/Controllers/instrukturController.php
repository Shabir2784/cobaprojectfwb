<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class instrukturController extends Controller
{
    public function index()
    {
        $instruktur = DB::table('instruktur_d0223306_a')->get();
        return view('instruktur', compact('instruktur'));
    }

    public function tambah()
    {
        return view('instrukturTambah');
    }

    public function simpan(Request $request)
    {
    // Validasi sederhana
    $request->validate([
        'nama' => 'required|string|max:255',
        'keahlian' => 'required|string|max:255',
    ]);

    DB::table('instruktur_d0223306_a')->insert([
        'nama' => $request->nama,
        'keahlian' => $request->keahlian,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/instruktur')->with('success', 'Data berhasil ditambahkan!');
    }

    public function hapus($id)
    {
        DB::table('instruktur_d0223306_a')->where('id', $id)->delete();
        return redirect('/instruktur')->with('success', 'Data instruktur berhasil dihapus!');
    }


}
