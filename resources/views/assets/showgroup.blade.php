<div id="card-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="card" class="card">
        <div class="header bg-red">
            <h2>
                Company Name: {{ $g->company_name }}
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="/assets/{{ $asset->id }}">Edit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Line of Activity:</b> {{ $g->lineOfAct }}</li>
                        <li class="list-group-item"><b>Outstanding Amout:</b> {{ $g->OSAmt }}</li>
                        <li class="list-group-item"><b>Acquisition Price:</b> {{ $g->acqPrice }}</li>
                        <li class="list-group-item"><b>ARC Investment:</b> {{ $g->ARCInvest }}</li>
                        <li class="list-group-item"><b>Other Investment:</b> {{ $g->OtherInvest }}</li>
                        <li class="list-group-item"><b>Value of Security:</b> {{ $g->vos }}</li>
                        <li class="list-group-item"><b>Original Docs:</b> {{ $g->OgDocs }}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><b>RBI Resolution Status:</b> {{ $g->RSRBI }}</li>
                        <li class="list-group-item"><b>Final Resolution Status:</b> {{ $g->finalRS }}</li>
                        <li class="list-group-item"><b>Remarks:</b> {{ $g->remarks }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

