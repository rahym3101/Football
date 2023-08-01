<nav class="navbar navbar-expand-lg navbar-dark bg-success" aria-label="Navbar">
    <div class="container-xl">
        <a class="navbar-brand text-center fw-bold text-white {{ request()->routeIs('home') ? 'link-dark':'' }}" href="{{ route('home') }}">FOOTBALL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul>
            <li class="nav-item text-white">
                <a class="nav-link " href="{{ route('locale', 'tm') }}">Türkmen</a>
            </li>
            <li class="nav-item text-white">
                <a class="nav-link " href="{{ route('locale', 'en') }}">English</a>
            </li>
            @auth
                <li class="nav-item text-white">
                    <a class="nav-link link-white" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout').submit();" title="@lang('app.logout')">
                        <i class="bi-box-arrow-right"></i> {{ auth()->user()->name }}
                    </a>
                </li>
                <form id="logout" action="{{ route('logout') }}" method="post" class="d-none">
                    @csrf
                </form>
            @else
                <li class="nav-item text-white">
                    <a class="nav-link link-white" href="{{ route('login') }}">
                        <i class="bi-box-arrow-in-right"></i> @lang('app.login')
                    </a>
                </li>
                <li class="nav-item text-white">
                    <a class="nav-link link-white" href="{{ route('register') }}">
                        <i class="bi-person-add"></i> @lang('app.register')
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>