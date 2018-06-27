<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index(){
        $assets = Asset::all();
        return view('assets.home', compact('assets'));
    }

    public function show($id){
        $asset = DB::table('assets')->find($id);
        return view('assets.show', compact('asset'));
    }
}
