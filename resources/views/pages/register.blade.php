@extends('layouts.base')

@section('content')

<body class="signup-page">
    <div class="signup-box">
            <div class="logo">
                <a href="javascript:void(0);">CFM <b>ARC</b></a>
                <small>Dashboard Platform</small>
            </div>
        <div class="card">
            <div class="body">
                @include('layouts.include.errors')
                <form id="sign_up" method="POST">
                    {{ csrf_field() }}
                    <div class="msg">Register a new user</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Name Surname" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation" minlength="3" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="msg">
                        <a href="/home">Go back home</a>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Add User</button>

                </form>
            </div>
        </div>
    </div>
</body>
@endsection
