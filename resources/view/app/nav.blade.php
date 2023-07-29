<nav class="navbar navbar-expand-lg navbar-dark bg-success" aria-label="Navbar">
    <div class="container-xl">
        <a class="navbar-brand {{ request()->routeIs('home') ? 'link-dark':'' }}" href="{{ route('home') }}">FOOTBALL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>