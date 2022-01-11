<nav class="navbar navbar-expand-md position-absolute w-100 z-10 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Devsome') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('navbar.toggle') }}">
            <span class="navbar-toggler-icon d-block">
                <i class="fas fa-bars text-white  menu-toggler"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link{{(isset($alias) && $alias === 'Home') ? ' active' : ''}}" href="{{ url('/') }}">
                        {{ __('navbar.nav.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{(isset($alias) && $alias === 'Downloads') ? ' active' : ''}}"
                       href="{{ route('downloads-index') }}">
                        {{ __('navbar.nav.download') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{(isset($alias) && $alias === 'Ranking') ? ' active' : ''}}"
                       href="{{ route('ranking.char') }}">
                        {{ __('navbar.nav.ranking') }}
                    </a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link{{(isset($alias) && $alias === 'AuctionHouse') ? ' active' : ''}}"
                           href="{{ route('auctions-house') }}">
                            {{ __('navbar.nav.auction-house') }}
                        </a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link{{(isset($alias) && $alias === 'WorldMap') ? ' active' : ''}}"
                       href="{{ route('worldmap') }}">
                        {{ __('navbar.nav.worldmap') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle{{(isset($alias) && $alias === 'pages') ? ' active' : ''}}" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('navbar.nav.pages') }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right pr-0 pl-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item{{(isset($alias) && $alias === 'ServerInfomation') ? ' active' : ''}}" href="{{ route('server-information') }}">
                            {{ __('navbar.nav.serverinformation') }}
                        </a>
                        @foreach($NavbarPagesProvider as $pages)
                            <a class="dropdown-item{{(isset($slug) && $slug === $pages->slug) ? ' active' : ''}}"
                               href="{{ route('pages-content', ['slug' => $pages->slug]) }}">
                                {{ $pages->title }}
                            </a>
                        @endforeach
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto login-lang-menu">
                @if(count(config('language')) > 1)
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ config('language.' . Session::get('locale', 'en') . '.name') }} <i
                                class="fa fa-language"></i><span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @foreach(config('language') as $key => $lang)
                                @if($key !== 'example')
                                    <a class="dropdown-item{{(Session::get('locale', 'en') === $key)  ? ' active' : ''}}" href="{{ route('change-language', ['lang' => $key]) }}">
                                        <img class="small" src="{{ $lang['icon'] }}" width="26px"
                                             height="16px"> {{ $lang['name'] }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                @endif

                @guest
                    <li class="nav-item nav-auth">
                        <a class="nav-link{{(isset($alias) && $alias == 'Login') ? ' active' : ''}}" href="{{ route('login') }}">{{ __('navbar.login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item nav-auth">
                            <a class="nav-link{{(isset($alias) && $alias == 'register') ? ' active' : ''}}" href="{{ route('register') }}">{{ __('navbar.register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle{{(isset($alias) && $alias == 'Account') ? ' active' : ''}}" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item{{(isset($alias) && $alias == 'Account') ? ' active' : ''}}" href="{{ route('home') }}">
                                {{ __('navbar.home') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('navbar.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @role('administrator')
                            <a class="dropdown-item" href="{{ route('index-backend') }}">
                                {{ __('navbar.backend') }}
                            </a>
                            @endrole
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('notification') }}" class="nav-link{{(isset($alias) && $alias == 'Notifications') ? ' active' : ''}}">
                            <i class="fas fa-bell"></i>
                            @if($NotificationsCountProvider > 0)
                                <span class="badge badge-danger align-top">
                                {{ $NotificationsCountProvider }}
                            </span>
                            @endif
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
