<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{

    public function index()
    {
      $barang = barang::all();

      return view('layouts.ecommerce', compact('barang'));
    }


    public function pesanan(){
        $transaksi = Transaksi::all();

        $hargatotal = Transaksi::sum('total');
        $jumlahquantity = Transaksi::count();

        return view('layouts.pesanan', compact('transaksi','hargatotal','jumlahquantity'));

    }
    public function transaksiSimpan(Request $request,$id)
    {
        $request->validate([
            'quantity'=>'required|max:255',
            'total'=>'required',
            'note' =>'required',
            'bukti'=>'required|image|max:2048',
          ]);

          $bukti = $request->bukti->store('barang','public');
          $transaksi = Transaksi::create([
            'barang_id' =>$id,
            'quantity' => $request->quantity,
            'total' => $request->total,
            'note' => $request->note,
            'bukti' => $bukti
          ]);

          return redirect()->route('marketplace')
            ->with('success', 'Post created successfully.');    }


    public function transaksi($id)
    {
      $barang = barang::find($id);

      return view('auth.ecommerce.transaksi', compact('barang'));
    }


}
