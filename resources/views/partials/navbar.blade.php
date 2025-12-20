<header>
    <!--? Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="{{ route('landing.index') }}">
                                <img style="height: 100px" src="{{ asset('/') }}/assets/img/logo/logo_2.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="{{ request()->routeIs('landing.index') ? 'active' : '' }}">
                                            <a href="{{ route('landing.index') }}">Home</a>
                                        </li>

                                        <li class="{{ request()->routeIs('landing.about') ? 'active' : '' }}">
                                            <a href="{{ route('landing.about') }}">About</a>
                                        </li>

                                        <li class="{{ request()->routeIs('landing.product') ? 'active' : '' }}">
                                            <a href="{{ route('landing.product') }}">Products</a>
                                        </li>

                                        <li class="{{ request()->routeIs('landing.gallery') ? 'active' : '' }}">
                                            <a href="{{ route('landing.gallery') }}">Gallery</a>
                                        </li>

                                        <li class="{{ request()->routeIs('landing.testimonie') ? 'active' : '' }}">
                                            <a href="{{ route('landing.testimonie') }}">Testimonies</a>
                                        </li>

                                        <li class="{{ request()->routeIs('landing.contact') ? 'active' : '' }}">
                                            <a href="{{ route('landing.contact') }}">Contact</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>

                            <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="{{ route('landing.contact') }}" class="btn header-btn">
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>