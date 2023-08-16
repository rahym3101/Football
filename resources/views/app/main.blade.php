<div class="container-xl py-4">
    <div class="border rounded shadow-sm p-3">
        <div class="d-flex justify-content-between">
            <div class="container-xl">
                <div class="mb-2 py-4 align-items-end row text-center">
                    <div class="row">
                        <a href="{{ route('games.show', $game->id) }}" class="router-link-exact-active text-decoration-none fw-bold text-success col-3">
                            <h2>
                                @lang('app.games')
                            </h2>
                        </a>
                        <a href="{{ route('players.show', $player->id) }}" class="router-link-exact-active fw-semibold text-decoration-none text-success col-3">
                            <h2>
                                @lang('app.players')
                            </h2>
                        </a>
                        <a href="{{ route('posts.show', $post->id) }}" class="router-link-exact-active fw-semibold text-decoration-none text-success col-3">
                            <h2>
                                @lang('app.posts')
                            </h2>
                        </a>
                        <a href="{{ route('coaches.show', $coach->id) }}" class="router-link-exact-active fw-semibold text-decoration-none text-success col-3">
                            <h2>
                                @lang('app.coaches')
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>