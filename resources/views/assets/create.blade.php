@extends('layouts.base')

@section('content')
<body class="theme-red">
    @include('layouts.include.header')
    @include('assets.sidebar')
    <section class="content">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Add a new Asset
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Some Options</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form method="POST" action="/assets">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                            @include('layouts.include.errors')
                            <div class="col-md-6">
                                <b>Asset Name</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">attach_money</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="assetName" placeholder="Ex: CFM ASSET RECONSTRUCTION PRIVATE LIMITED">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <b>Selling Bank/Institution</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">account_balance</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sellingInst" placeholder="Ex:IndusInd Bank">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Asset Group or Not?</b>
                                <div class="input-group">
                                    <input type="checkbox" id="md_checkbox_21" name="AssetGroup" class="filled-in chk-col-red" value="1" onchange="groupFunction()">
                                    <label for="md_checkbox_21">Check if yes</label>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-md-3">
                                <b>Dealing Officer ID</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">account_circle</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="doi" placeholder="Ex: 32">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Date of Acquisition</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" name="dateofAcq" placeholder="Ex: 2018-07-25">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Amount Outstanding</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">money</i>
                                    </span>
                                    <div class="form-line">
                                        <input id="groupinput" type="text" class="form-control" name="OSAmt" placeholder="In Lakhs">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Acquisition Price</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">money</i>
                                    </span>
                                    <div class="form-line">
                                        <input id="groupinput1" type="text" class="form-control" name="acqPrice" placeholder="In Lakhs">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>Acquisition Structure</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">donut_large</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="acqStruct" placeholder="Ex: 15:85 or 50:50">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>Name of Trust</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">location_city</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nameOfTrust" placeholder="Ex: CFMARC Trust 2 UCO Bank">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>CFMARC's Investment</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">monetization_on</i>
                                    </span>
                                    <div class="form-line">
                                        <input id="groupinput2" type="text" class="form-control" name="ARCInvest" placeholder="In Lakhs">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <b>Seller Bank/FI/Other QIB's Investment</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">monetization_on</i>
                                    </span>
                                    <div class="form-line">
                                        <input id="groupinput3" type="text" class="form-control" name="OtherInvest" placeholder="In Lakhs">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2">
                                <b>Value of Security</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">monetization_on</i>
                                    </span>
                                    <div class="form-line">
                                        <input id="groupinput4" type="text" class="form-control" name="vos" placeholder="In Lakhs">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <b>Rating of SRs</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">star</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="ratingSRs" placeholder="Ex: RR1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <b>Deed of Assignment Date</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" name="DOADate" placeholder="Ex: 2018-07-25">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <b>Registration Date</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" name="registDate" placeholder="Ex: 2018-07-25">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <b>Cutoff Date</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" name="cutoffDate" placeholder="Ex: 2018-07-25">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <b>Date of First Review</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" name="doFirstReview" placeholder="Ex: 2018-07-25">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <b>Investment Rationale</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">list_alt</i>
                                    </span>
                                    <div class="form-line">
                                        <textarea rows="1" class="form-control no-resize auto-growth" name="investRationale" placeholder="" style="overflow: hidden; word-wrap: break-word; height: 132px;"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <b>Additional Remarks</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">comment</i>
                                    </span>
                                    <div class="form-line">
                                        <textarea rows="1" class="form-control no-resize auto-growth" name="remarks" placeholder="" style="overflow: hidden; word-wrap: break-word; height: 132px;"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group">
                                <button type="submit" class="btn bg-red btn-block btn-lg waves-effect right">
                                    <i class="material-icons">save</i>
                                    <span>SAVE CHANGES</span>
                                </button>
                            </div>

                            <!--End of Form-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    // function groupFunction() {
    //     console.log("Function chalu hai bhai");
    //     document.getElementById("groupinput").disabled;
    // }
    document.getElementById('md_checkbox_21').onchange = function() {
        console.log("Function chalu hai bhai");
        document.getElementById('groupinput').disabled = this.checked;
        document.getElementById('groupinput1').disabled = this.checked;
        document.getElementById('groupinput2').disabled = this.checked;
        document.getElementById('groupinput3').disabled = this.checked;
        document.getElementById('groupinput4').disabled = this.checked;
    };
</script>
@endsection('content')
