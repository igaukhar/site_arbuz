<header class="header">
    <div class="row d-none d-lg-flex">
        <div class="col-xl-6 col-lg-6 menu pr-0">
            <ul class="nav menu-nav" id="navmenubar">
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0"
                        href="#"
                        title="Доставка"
                    >Доставка</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="#"
                        title="О нас"
                    >О нас</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="#"
                        title="Оплата"
                    >Оплата</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="#"
                        title="FAQ"
                        target="_blank"             >FAQ</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="#"
                        title="Работа в Арбузе"
                        target="_blank"             >Работа в Арбузе</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link pl-3"
                        href="#"
                        title="Акции"
                        style="font-weight: bold; color: #FC2A1C;"       >Акции</a>
                </li>
            </ul>
        </div>
        <div class="col-xl-6 col-lg-6 auth d-flex justify-content-end pl-0">
            <div class="v-popover delivery open">
                <div aria-describedby="popover_ubn0n0bs5g" class="trigger" style="display: inline-block;">
                    <div class="popover-target">
                        <div class="navbar-item pt-2">
                            <img width="16" src="https://arbuz.kz/static/platform/frontend/assets/banners/clock.svg" style="padding-bottom: 1px;">
                            <span class="d-none d-xl-inline mr-5 pt-1" style="color: rgb(0, 155, 36); font-size: 14px;">Ближайшая доставка</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                    <ul class="list-inline mt-2 mb-0">
                        <!-- Authentication Links -->
                        @guest
                            <li class="list-inline-item">
                                <a class="list-link text-success" style="font-size: 14px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="list-inline-item">
                                    <a class="list-link text-success mr-2" style="font-size: 14px;"  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" style="font-size: 14px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('password.change') }}">
                                        Change Password
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @if(Auth::user()->name == ucfirst('admin'))
                                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                            User Management
                                        </a>
                                    @endif

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </div>
    <hr style="border: 1px #E5E7E9  solid;">

    <!--Subheader logo, search, cart-->

    <div class="row subheader">
        <div class="col-md-2 col-3 d-block d-lg-none">
            <div class="drawer-component">
                <div id="menu-bars" class="drawer-button">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-8 col-6">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-12 header-logo" style="padding: 0px 15px;">
                    <a href="/"><img src="https://arbuz.kz/public/templates/images/logo-new.png" alt="Arbuz.kz - магазин продуктов с доставкой Алматы" id="headerlogo">
                        <br>
                        <span class="d-none d-lg-block text-dark" style="font-size: 11px">Ваш онлайн супермаркет</span>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6 d-none d-lg-block">
                    <div class="contacts">
                        <div class="title" style="font-size: 13px;">
                            Телефон доставки г.Алматы
                        </div>
                        <div class="phones" style="font-size: 13px;">
                            <b>+7 (727) 346 85 83<br>+7 (778) 021 13 17</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-5 d-none d-lg-block">
            <div>
                <form method="get" action="#">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Что ищем? " id="searchform">
                        <div class="input-group-append">
                            <button class="btn" style="background-color: #ECF0F1;" type="submit">
                                <i class="fa fa-search" style="color: #808B96;"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="search-popup position-absolute bg-white rounded p-3 shadow-sm d-none d-lg-block d-xl-block invisible">
                    <div class="row flex-nowrap">
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-3 col-md-2 col-3" style="width: 255.67px; height: 64px; padding: 0px 15px;">
            <div class="cart-wrapper">
                <div class="cart clickable">
                    <div class="icon d-inline block">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="counter d-inline-block">
                        <span>
                            0
                            <span class="d-none d-lg-inline">
                                товаров
                            </span>
                        </span>
                    </div>
                    <div class="caret d-none d-lg-block">
                        <div class="basket-caret-content">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<hr style="border: 1px #E5E7E9  solid;">
