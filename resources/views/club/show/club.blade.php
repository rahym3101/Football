<div class="border rounded shadow-sm p-3">
    <div class="d-flex justify-content-between">
        <div class="container-xl">
            <div class="mb- col-3">
                <div>
                    <a href="{{ route('home.index', ['team',$team->id]) }}" class="fw-semibold text-decoration-none text-center">
                        <h2>
                            {{ $home->team->name }}
                        </h2>
                    </a>
                </div>
                <div>
                    <a href="{{ route('club.index', ['game' =>$club->game->id]) }}" class="router-link-exact-active router-link-active fw-semibold text-decoration-none">
                        <h5>
                            Games
                        </h5>
                    </a>
                    <a href="{{ route('club.index', ['player' =>$club->player->id]) }}" class="router-link-exact-active router-link-active fw-semibold text-decoration-none">
                        <h5>
                            Players
                        </h5>
                    </a>
                    <a href="{{ route('club.index', ['post' =>$club->post->id]) }}" class="router-link-exact-active router-link-active fw-semibold text-decoration-none">
                        <h5>
                            Posts
                        </h5>
                    </a>
                    <a href="{{ route('club.index', ['coach' =>$club->coach->id]) }}" class="router-link-exact-active router-link-active fw-semibold text-decoration-none">
                        <h5>
                            Coaches
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>