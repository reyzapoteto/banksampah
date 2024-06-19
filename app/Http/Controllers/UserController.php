<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

/**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function update(Request $request)
  {
    // dd(request()->all());

    DB::beginTransaction();
    $user = User::where('id',$request->id)->update([
        'name' =>$request->name ,
        'email' =>$request->email,
        'password'=>Hash::make($request->password),
        'address' =>$request->address ?? "",
        'role' =>$request->role ??""
    ]);

    DB::commit();

    return redirect()->back();



  }


}
