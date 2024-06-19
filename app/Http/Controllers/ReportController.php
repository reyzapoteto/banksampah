<?php

namespace App\Http\Controllers;

use App\Models\Reportbug;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function tambah()
  {
    return view('auth.ecommerce.report');
  }

    public function simpan(Request $request)
  {
    $request->validate([
      'judul' =>'required|max:255',
      'pesan'=>'required|max:255',
      'bukti'=>'required|image|max:2048',
    ]);

    $gambar = $request->bukti->store('barang','public');
    $barang = Reportbug::create([
      'judul' => $request->judul,
      'pesan' => $request->pesan,
      'bukti' => $gambar
    ]);

    return redirect()->route('dashboard')
      ->with('success', 'Post created successfully.');
  }

}
