@extends('layouts.base')

@section('content')
<body class="theme-red">
    @include('layouts.include.header')
    @include('assets.sidebar')

    <section class="content">
        <div class="container-fluid">
            <!-- Colored Card - With Loading -->
            <div class="block-header">
                <h2>
                    MY CLIENTS
                </h2>
                <small>
                    <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="timer" data-loading-color="lightBlue">
                        <i class="material-icons">loop</i>
                    </a>
                    <a href="/assets/create" data-toggle="cardloading" data-loading-effect="timer" data-loading-color="lightBlue">
                        <i class="material-icons">add</i>
                    </a>
                </small>
            </div>
            <div class="row">
                @foreach($assets as $indexKey => $asset)
                    @include('assets.assetcard')
                    @if(($indexKey>0)&(($indexKey%2)==0))
                        <hr>
                    @endif
                @endforeach
            </div>
            <!-- #END# Colored Card - With Loading -->
        </div>
    </section>
</body>
@endsection('content')
