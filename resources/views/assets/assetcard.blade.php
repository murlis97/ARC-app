<div id="card-container" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div id="card" class="card">
        <div class="header bg-red">
            <h2>
                <a href="/assets/{{ $asset->id }}">{{ $asset->assetName }}</a><small>{{ $asset->doi }}</small>
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);">Edit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            <ul class="list-group">
                <li class="list-group-item">Selling Bank/Institution: {{ $asset->sellingInst }}</li>
                <li class="list-group-item">Date of Acquisition: {{ $asset->dateofAcq }}</li>
                <li class="list-group-item">Outstanding Amout: {{ $asset->OSAmt }}</li>
                <li class="list-group-item">Acquisition Price: {{ $asset->acqPrice }}</li>
                <li class="list-group-item">Acq Structure: {{ $asset->acqStruct }}</li>
            </ul>
        </div>
    </div>
</div>
