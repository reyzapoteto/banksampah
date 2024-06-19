<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function home(){
        $transaksi = Transaksi::all();

        $hargatotal = Transaksi::sum('total');
        $jumlahtotal = Transaksi::count();
        $hargaquantity = Transaksi::sum('quantity');
        $jumlahquantity = Transaksi::count();
        $jumlahbarang = barang::count();

        // return view('layouts.dashboard', compact('hargatotal','jumlahquantity'));

        if (Auth::check()) {
            $users = DB::table('users')->select('id','name','email','address')->get();

            return view('dashboard',compact('users','hargatotal','hargaquantity','jumlahquantity','jumlahtotal','jumlahbarang'));
        }
        return redirect()->route('login');

    }


}
