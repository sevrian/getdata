<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                    {{-- <div class="brand-logo"></div> --}}
                </a></li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">


                </div>
                <ul class="nav navbar-nav float-right">


                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span
                                    class="user-name text-bold-600">{{ Auth::user()->name }}</span><span
                                    class="user-status">Available</span></div><span><img class="round"
                                    src="{{ url ('app-assets/images/logo/logo-primary.png')}}" alt="avatar"
                                    height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{route('logout')}}"><i
                                    class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
