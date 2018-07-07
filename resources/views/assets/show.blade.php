@extends('layouts.base')

@section('content')
<body class="theme-red">
    @include('layouts.include.header')
    @include('assets.sidebar')

    <section class="content">
        <h2>
            {{ $asset->assetName }}
            <small>
                @if(($asset->AssetGroup)==1)
                    {{ "(Group Asset)" }}
                @else
                    {{ "(Non Group Asset)" }}
                @endif
                <br>
            </small>
            <small class="right">
                DOI:{{ $asset->user->name }}
            </small>
        </h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><b>Selling Bank/Institution:</b> {{ $asset->sellingInst }}</li>
                    <li class="list-group-item"><b>Date of Acquisition:</b> {{ $asset->dateofAcq }}</li>
                    <li class="list-group-item"><b>Outstanding Amout:</b> {{ $asset->OSAmt }}</li>
                    <li class="list-group-item"><b>Acquisition Price:</b> {{ $asset->acqPrice }}</li>
                    <li class="list-group-item"><b>Acquisition Structure:</b> {{ $asset->acqStruct }}</li>
                    <li class="list-group-item"><b>CFMARC's Investment:</b> {{ $asset->ARCInvest }}</li>
                    <li class="list-group-item"><b>Seller Bank/FI/Other QIB's Investment:</b> {{ $asset->OtherInvest }}</li>
                    <li class="list-group-item"><b>Value of Security:</b> {{ $asset->vos }}</li>
                    <li class="list-group-item"><b>Rating of SRs:</b> {{ $asset->ratingSRs }}</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><b>Name of the Trust:</b> {{ $asset->nameOfTrust }}</li>
                    <li class="list-group-item"><b>Investment Rationale:</b> {{ $asset->investRationale }}</li>
                    <li class="list-group-item"><b>Remarks:</b> {{ $asset->remarks }}</li>
                    <li class="list-group-item"><b>Registration Date:</b> {{ $asset->registDate }}</li>
                    <li class="list-group-item"><b>Deed of Assignment Date:</b> {{ $asset->DOADate }}</li>
                    <li class="list-group-item"><b>Cutoff Date:</b> {{ $asset->cutoffDate }}</li>
                    <li class="list-group-item"><b>Date of First Review:</b> {{ $asset->doFirstReview }}</li>
                </ul>
            </div>
        </div>
        <hr>
        @if(($asset->AssetGroup)==0)
            @if($asset->nongroup==null)
                <div class="input-group left">
                    <a href=" {{ url('assets/'.$asset->id.'/create') }}" class="btn btn-block bg-red btn-lg waves-effect right">
                        <i class="material-icons">add</i>
                        <span>Add Company Details</span>
                    </a>
                </div>
            @else
                <ul class="list-group">
                    <li class="list-group-item"><b>Line of Activity:</b> {{ $asset->nongroup->lineOfAct }}</li>
                    <li class="list-group-item"><b>Original Docs:</b> {{ $asset->nongroup->OgDocs }}</li>
                    <li class="list-group-item"><b>RBI Resolution Status:</b> {{ $asset->nongroup->RSRBI }}</li>
                    <li class="list-group-item"><b>Final Resolution Status:</b> {{ $asset->nongroup->finalRS }}</li>
                    <li class="list-group-item"><b>Remarks:</b> {{ $asset->nongroup->remarks }}</li>
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        @if(($asset->nongroup->ROC)==1)
                            @include('assets.showROC')
                        @endif
                    </div>
                    <div class="col-md-">
                        @if(($asset->nongroup->CERSAI)==1)
                            @include('assets.showCERSAI')
                        @endif
                    </div>
                </div>
            @endif
        @else
            <h3>Asset Companies</h3>
            <div class="input-group right">
                <a href=" {{ url('assets/'.$asset->id.'/create') }}" class="btn bg-red btn-lg waves-effect right">
                    <i class="material-icons">add</i>
                    <span>Add Company</span>
                </a>
            </div>
            @foreach($asset->group as $g)
                @include('assets.showgroup')
            @endforeach
        @endif
    </section>
</body>
@endsection('content')
