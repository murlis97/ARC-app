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
                <li class="active">
                    <a href="/">
                        <i class="material-icons">home</i>
                        <span>My Account</span>
                    </a>
                </li>
                <li>
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
