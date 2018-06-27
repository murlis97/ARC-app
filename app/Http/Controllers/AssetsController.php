<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index(){
        $assets = Post::all();
        return view('assets.home', compact('posts'));
    }

    public function show($id){
        $asset = DB::table('asset')->find($id);
        return view('assets.show', compact('asset'));
    }
}
