<div class="border rounded shadow-sm p-3">
    <div class="d-flex justify-content-between">
        <div class="container-xl">
            <div class="mb- col-3">
                <a href="{{ route('home.index', ['team' => $home->team->id]) }}" class="router-link-exact-active router-link-active fw-semibold text-decoration-none text-center">
                    <h2>
                        {{ $home->team->name }}
                    </h2>
                </a>
                <a href="{{ route('club.index', ['game' =>$]) }}">

                </a>
            </div>
        </div>
    </div>
</div>