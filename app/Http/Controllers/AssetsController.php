<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $assets = Asset::orderby('dateofAcq', 'desc')->get();
        return view('assets.home', compact('assets'));
    }

    public function show(Asset $asset){
        return view('assets.show', compact('asset'));
    }

    public function create(){
        return view('assets.create');
    }

    public function store(){
        $this->validate(request(),[
            'assetName' => 'required',
            'doi' => 'required',
            'OSAmt' => 'required',
            'sellingInst' => 'required',
            'dateofAcq', 'DOADate', 'registDate', 'cutoffDate' => 'date_format:Y-m-d'
        ]);
        Asset::create(request()->all());
        return redirect('/');
    }
}
