<div class="nav-content d-flex">
    <!-- Logo Start -->


    <div class="logo position-relative">
        <a href="/">

            <div class="">
                <img src="{{ asset('/img/logo/logo.png') }}" alt="logo" style="width:250px;" />
                <!--<h1 class="text-heading text-white bold">Inter Earth Nexus</h1>-->
            </div>
        </a>
    </div>
    @auth
        <div class="user-container d-flex">
            <a href="#" style="text-decoration: none" class="d-flex user position-relative" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{-- <img class="profile" alt="profile" src="{{ asset('/img/profile/profile-9.webp') }}" /> --}}
                <div class="name">{{ Auth::user()->full_name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
                <div class="row mb-3 ms-0 me-0">
                    <div class="col-12 ps-1 mb-2">
                        <div class="text-extra-small text-primary">ACCOUNT</div>
                    </div>
                    <div class="col-8 ps-1 pe-1">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><strong>Email:</strong> {{ Auth::user()->email }}</a>
                            </li>
                            <li>
                                <a href="#"><strong>Nationality:</strong>{{ Auth::user()->nationality }}</a>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="row mb-1 ms-0 me-0">
                    <div class="col-12 p-1 mb-3 pt-3">
                        <div class="separator-light"></div>
                    </div>

                    <div class="col-6 pe-1 ps-1">
                        <ul class="list-unstyled">

                            <li>
                                @auth
                                    <form method="POST" action="/logout">
                                        @csrf
                                        {{-- <x-form-button>Log out</x-form-button> --}}
                                        <button class="btn btn-primary" type="submit">
                                            <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                            <span class="align-middle">Logout</span>
                                        </button>

                                    </form>


                                @endauth

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endauth

    @guest
        <div class="user-container d-flex">
            <x-button href="/login" d-flex>Login</x-button>
        </div>
    @endguest

    <!-- User Menu End -->

    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">

        <li class="list-inline-item">
            <div class="user-container d-flex float-start">
                <form action="{{ route('factor.search') }}" method="GET" class="mb-3 position-relative">
                    <div class="input-group col-auto" style="width: 200px; position: relative;">
                        <input type="text" name="search" class="form-control form-control-sm"
                            placeholder="Search factors..." value="{{ request('search') }}"
                            style="padding-right: 30px;">
                        <!-- Extra padding for the icon -->

                        <!-- Search icon inside the input field -->
                        <button type="submit" class="btn btn-link p-0"
                            style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </li>




        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
            </a>
        </li>

    </ul>
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">

        <ul id="menu" class="menu">
            <li>
                <x-nav-link href="/" :active="request()->is('/')" icon='home'>Home</x-nav-link>
            </li>
            <li>
                <x-nav-link href="/video" :active="request()->is('/')" icon='file-video'>Video</x-nav-link>
            </li>


            @auth
                @can('is-admin')
                    <li>
                        <x-nav-link href="/user" :active="request()->is('/user')" icon='user'>User Management</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="/factor" :active="request()->is('/factor')" icon='cloud-download'>Factor Management</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="/continent_factor" :active="request()->is('/continent_factor')" icon='cloud-download'>Continent
                            Factor</x-nav-link>
                    </li>
                @endcan


            @endauth
        </ul>


    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Scrollspy Mobile Button Start -->
        <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-acorn-icon="menu-dropdown"></i>
        </a>
        <!-- Scrollspy Mobile Button End -->

        <!-- Scrollspy Mobile Dropdown Start -->
        <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
        <!-- Scrollspy Mobile Dropdown End -->

        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->

</div>

<div class="nav-shadow"></div>
