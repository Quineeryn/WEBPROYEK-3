<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){

        $data = Pengguna::all();
        return view('formdatapengguna', compact('data'));
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Pengguna::create($request->all()); 
        return redirect()->route('formcv');
    }

    public function formcv(){
        $data = Pengguna::all();
        return view('formcv', compact('data'));
    }
}
