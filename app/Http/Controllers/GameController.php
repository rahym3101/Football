<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Game;
use App\Models\Team;
use App\Models\Post;
use App\Models\Coach;
use Illuminate\Support\Facades\App;
use App\Models\Player;
use App\Http\Controllers\ClubController;

class GameController extends Controller
{
    public function show($id)
    {
        $club = Club::find($id);
        $player = Player::find($id);
        $game = Game::find($id);

        $games = Game::orderBy('id')
            ->inRandomOrder()
            ->take(5)
            ->get()
            ->sortBy('date');

        $coach = Coach::find($id);
        $team = Team::find($id);
        $post = Post::find($id);

        return view('game.show')
            ->with([
                'club' => $club,
                'player' => $player,
                'team' => $team,
                'game' => $game,
                'games' => $games,
                'coach' => $coach,
                'post' => $post,
            ]);
    }
}
