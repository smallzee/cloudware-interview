<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{route('dashboard.index')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
            </span>
        </a>
        <a href="{{route('dashboard.index')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{static_asset('preloader-logo.png')}}" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}" class="nav-link menu-link"> <i class="ph-calendar"></i> <span data-key="t-home">Dashboard</span> </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('transfer.create')}}" class="nav-link menu-link"> <i class="ph-chats"></i> <span data-key="t-chat">Make a Transfer</span> </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('transactions.index')}}" class="nav-link menu-link"> <i class="ph-money"></i> <span data-key="t-email">Transactions</span> </a>
                </li>


                <li class="nav-item">
                    <a href="{{url('user/logout')}}" class="nav-link menu-link text-danger"> <i class="ph-sign-out"></i> <span data-key="t-logout">Logout</span> </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
