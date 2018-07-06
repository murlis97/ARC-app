<?php

namespace App\Http\Controllers;

use App\Asset;
use App\GroupAsset;
use App\NonGroupAsset;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Asset $asset){
        return view('assets.gdetails',compact('asset'));
    }

    public function store(){
        $validatedData = $this->validate(request(),[
            'assetName' => 'required',
            'user_id' => 'required',
        ]);

        if(empty(request()->session()->get('asset'))){
            $asset = new Asset();
            $asset->fill($validatedData);
            request()->session()->put('asset', $asset);
        }else{
            $asset = request()->session()->get('asset');
            $asset->fill($validatedData);
            request()->session()->put('asset', $asset);
        }

        $asset = Asset::create(request()->all());

        if($asset->AssetGroup==0)
            return view('assets.ngdetails', compact('asset'));
        else
            return view('assets.gdetails', compact('asset'));
    }

    public function ngstore(){
        $asset = request()->session()->get('asset');
        $asset_id = \DB::table('assets')->where('assetName', $asset->assetName)->value('id');
        $validatedData = $this->validate(request(),[
            'lineOfAct' => 'required',
            'RSRBI' => 'required',
        ]);

        $ngasset = NonGroupAsset::create([
            'asset_id' => $asset_id,
            'ROC' => request('ROC'),
            'CERSAI' => request('CERSAI'),
            'lineOfAct' => request('lineOfAct'),
            'RSRBI' => request('RSRBI'),
            'finalRS' => request('finalRS'),
            'OgDocs' => request('OgDocs'),
            'remarks' => request('remarks')
        ]);
        return redirect('/assets/'.$asset->id);
    }

    public function gstore(Asset $asset){
        $validatedData = $this->validate(request(),[
            'lineOfAct' => 'required',
            'RSRBI' => 'required',
        ]);

        $gasset = GroupAsset::create([
            'asset_id' => $asset->id,
            'company_name' => request('company_name'),
            'acqPrice' => request('acqPrice'),
            'OSAmt' => request('OSAmt'),
            'vos' => request('vos'),
            'ARCInvest' => request('ARCInvest'),
            'OtherInvest' => request('OtherInvest'),
            'ROC' => request('ROC'),
            'CERSAI' => request('CERSAI'),
            'lineOfAct' => request('lineOfAct'),
            'RSRBI' => request('RSRBI'),
            'finalRS' => request('finalRS'),
            'OgDocs' => request('OgDocs'),
            'remarks' => request('remarks')
        ]);
        return redirect('/assets/'.$asset->id);
    }
}
