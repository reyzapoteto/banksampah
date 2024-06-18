<?php
namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function ecommerce()
  {
    $barang = barang::all();

    return view('layouts.manage', compact('barang'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function simpan(Request $request)
  {
    $request->validate([
      'nama_barang' =>'required|max:255',
      'kategori_barang'=>'required|max:255',
      'deskripsi_barang'=>'required',
      'harga_barang' =>'required',
      'stock_barang'=>'required',
      'gambar_barang'=>'required|image|max:2048',
    ]);

    $gambar = $request->gambar_barang->store('barang','public');
    $barang = barang::create([
      'nama_barang' => $request->nama_barang,
      'kategori_barang' => $request->kategori_barang,
      'deskripsi_barang' => $request->deskripsi_barang,
      'harga_barang' => $request->harga_barang,
      'stock_barang' => $request->stock_barang,
      'gambar_barang' => $gambar
    ]);

    return redirect()->route('ecommerce')
      ->with('success', 'Post created successfully.');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, barang $barang)
  {
    // dd($request->all());
    $request->validate([
        'nama_barang' =>'required|max:255',
        'kategori_barang'=>'required|max:255',
        'deskripsi_barang'=>'required',
        'harga_barang' =>'required',
        'stock_barang'=>'required',
        'gambar_barang'=>'sometimes|nullable|image|max:2048',
      ]);

      $barang->update([
        'nama_barang' => $request->nama_barang,
        'kategori_barang' => $request->kategori_barang,
        'deskripsi_barang' => $request->deskripsi_barang,
        'harga_barang' => $request->harga_barang,
        'stock_barang' => $request->stock_barang
      ]);

      if ($request->hasFile('gambar_barang')) {
        $gambar = $request->gambar_barang->store('barang','public');
        $barang->update([
          'gambar_barang' => $gambar
        ]);
      }

      return redirect()->route('ecommerce')
        ->with('success', 'Post updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function hapus($id_barang)
  {
    $barang = barang::find($id_barang);
    $barang->delete();
    return redirect()->route('ecommerce')
      ->with('success', 'Post deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function tambah()
  {
    return view('auth.ecommerce.tambah');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function tampilkan($id_barang)
   {
     $barang = barang::find($id_barang);
     return view('tampilkan', compact('barang'));
   }
  /**
   * Show the form for editing the specified post.
   *des
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $barang = barang::find($id);
    return view('auth.ecommerce.edit', compact('barang'));
  }
}
