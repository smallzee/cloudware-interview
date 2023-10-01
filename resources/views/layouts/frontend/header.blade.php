
<!--====== Start Header ======-->
<header class="template-header navbar-right absolute-header nav-white-color submenu-seconday-color nav-border-bottom sticky-header">
    <div class="container">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="{{url('')}}">
                        <img src="{{static_asset('preloader-logo.png')}}" alt="logo" class="main-logo">
                        <img src="{{static_asset('preloader-logo.png')}}" alt="logo" class="sticky-logo">
                    </a>
                </div>
            </div>
            <div class="header-right">
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <ul class="header-extra">
                    @if(!auth()->check())
                    <li class="d-none d-md-block">
                        <a href="{{route('login')}}" class="template-btn secondary-bg">
                            Login / Register <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                        @else
                        <li class="d-none d-md-block">
                            <a href="{{route('dashboard.index')}}" class="template-btn secondary-bg">
                                Dashboard <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                    @endif
                    <li class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <div class="mobile-logo">
                <a href="{{url('/')}}">
                    <img src="{{static_asset('preloader-logo.png')}}" alt="Landio">
                </a>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->
</header>
<!--====== End Header ======-->
