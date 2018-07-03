@extends('layouts.base')

@section('content')
<body class="theme-red">
    @include('layouts.include.header')
    @include('assets.sidebar')

    <section class="content">
        <h1>{{ $asset->assetName }}<br><small>{{ $asset->doi }}</small></h1>
        <hr>
        <ul class="list-group">
            <li class="list-group-item">Selling Bank/Institution: {{ $asset->sellingInst }}</li>
            <li class="list-group-item">Date of Acquisition: {{ $asset->dateofAcq }}</li>
            <li class="list-group-item">Outstanding Amout: {{ $asset->OSAmt }}</li>
            <li class="list-group-item">Acquisition Price: {{ $asset->acqPrice }}</li>
            <li class="list-group-item">Acq Structure: {{ $asset->acqStruct }}</li>
        </ul>
        @json($asset)
        <hr>
        @if(($asset->AssetGroup)==0)
            @json($asset->nongroup)
        @else
            @foreach($asset->group as $g)
                @json($g)
                <hr>
            @endforeach
        @endif
    </section>
</body>
@endsection('content')
