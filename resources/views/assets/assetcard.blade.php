<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="card">
        <div class="header bg-red">
            <h2>
                {{ $asset->assetName }}<small>{{ $asset->doi }}</small>
            </h2>
            <ul class="header-dropdown m-r--5">
                <li>
                    <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="timer" data-loading-color="lightBlue">
                        <i class="material-icons">loop</i>
                    </a>
                </li>
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
