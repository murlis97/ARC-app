@extends('layouts.base')

@section('content')
<body class="theme-red">
    @include('layouts.include.header')
    @include('assets.sidebar')
    <section class="content">
        <div class="card">
            <div class="header">
                <h2>Add the Group Asset Details</h2>
            </div>
            <div class="body">
                <form method="POST" action="{{ url('assets/'.$asset->id) }}">
                    {{ csrf_field() }}
                    @include('layouts.include.errors')

                    <div class="row clearfix">

                        <div class="col-md-8">
                            <b>Company Name</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">domain</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="company_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
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

                        <div class="col-md-4">
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

                        <div class="col-md-4">
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

                        <div class="col-md-4">
                            <b>Line of Activity</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">domain</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="lineOfAct" placeholder="Ex: Steel, Agriculture">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">

                        <div class="col-md-3">
                            <b>ROC Applicable</b>
                            <div class="input-group">
                                <input type="checkbox" id="md_checkbox_21" name="ROC" class="filled-in chk-col-red" value="1">
                                <label for="md_checkbox_21">Check if yes</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <b>CERSAI Applicable</b>
                            <div class="input-group">
                                <input type="checkbox" id="md_checkbox_22" name="CERSAI" class="filled-in chk-col-red" value="1">
                                <label for="md_checkbox_22">Check if yes</label>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <b>RBI Resolution Status</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">domain</i>
                                </span>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" name="RSRBI" style="overflow: hidden; word-wrap: break-word; height: 132px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <b>Final Resolution Status</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">domain</i>
                                </span>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" style="overflow: hidden; word-wrap: break-word; height: 132px;" name="finalRS" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <b>List of Original Docs</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">list_alt</i>
                                </span>
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize auto-growth" style="overflow: hidden; word-wrap: break-word; height: 132px;" name="OgDocs" placeholder=""></textarea>
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

                        <div class="col-md-3">
                            <b>Add More Companies</b>
                            <div class="input-group">
                                <input type="checkbox" id="md_checkbox_23" name="addMore" class="filled-in chk-col-red" value="1">
                                <label for="md_checkbox_23">Check if yes</label>
                            </div>
                        </div>

                        <div class="input-group">
                            <button type="submit" class="btn bg-red btn-block btn-lg waves-effect right">
                                <i class="material-icons">save</i>
                                <span>Add Asset</span>
                            </button>
                        </div>

                        <!--End of Form-->
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

@endsection
