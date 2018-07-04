@extends('layouts.base')

@section('content')
<body class="theme-red">
    @include('layouts.include.header')
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ URL::to('images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    @if(Auth::check())
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                        <div class="email">{{ Auth::user()->username }}</div>
                    @else
                        <a href="/login" type="button" class="btn bg-red waves-effect left">
                            <i class="material-icons">person</i>
                            <span>Login</span>
                        </a>
                    @endif
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>My Account</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="/dashboard">
                            <i class="material-icons">text_fields</i>
                            <span>All Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="/download">
                            <i class="material-icons">text_fields</i>
                            <span>Download Excel</span>
                        </a>
                    </li>
                    <li>
                        <a href="/reports">
                            <i class="material-icons">text_fields</i>
                            <span>Report Generation</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    All CFM ARC Clients
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Client List
                                <small>You can edit any columns except header/footer</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <button type="button" class="btn bg-red waves-effect right">
                                        <i class="material-icons">save</i>
                                        <span>SAVE CHANGES</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table id="mainTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Asset Name</th>
                                        <th>DOI</th>
                                        <th>Selling Bank/Institution</th>
                                        <th>Outstanding Debt</th>
                                        <th>Acquisition Price</th>
                                        <th>Acquisition Structure</th>
                                        <th>Name of the Trust</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($assets as $asset)
                                        <tr>
                                            <td>{{ $asset->assetName }}</td>
                                            <td>{{ $asset->doi }}</td>
                                            <td>{{ $asset->sellingInst }}</td>
                                            <td>{{ $asset->OSAmt }}</td>
                                            <td>{{ $asset->acqPrice }}</td>
                                            <td>{{ $asset->acqStruct }}</td>
                                            <td>{{ $asset->nameOfTrust }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th><strong>TOTAL NUMBER OF ASSETS : {{ count($assets) }}</strong></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
