<?php
namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;
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
  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required|max:255',
      'body' => 'required',
      'nama_barang' =>'required|max:255',
      'kategori_barang'=>'required|max:255',
      'deskripsi_barang'=>'required',
      'harga_barang' =>'required',
      'stock_barang'=>'required',
      'gambar_barang'=>'required',

    ]);
    barang::create($request->all());
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
  public function update(Request $request, $id)
  {
    $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
        'nama_barang' =>'required|max:255',
        'kategori_barang'=>'required|max:255',
        'deskripsi_barang'=>'required',
        'harga_barang' =>'required',
        'stock_barang'=>'required',
        'gambar_barang'=>'required',

      ]);
    $barang = barang::find($id);
    $barang->update($request->all());
    return redirect()->route('ecommerce')
      ->with('success', 'Post updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $barang = barang::find($id);
    $barang->delete();
    return redirect()->route('BarangController')
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
    return view('ecommerce.tambah');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $barang = barang::find($id);
    return view('layouts.manage', compact('barang'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $barang = barang::find($id);
    return view('ecommerce.edit', compact('barang'));
  }
}
