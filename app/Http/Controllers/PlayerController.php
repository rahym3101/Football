<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Game;
use App\Models\Team;
use App\Models\Coach;
use App\Models\Post;
use App\Models\Player;
use App\Models\Position;

class PlayerController extends Controller
{
    public function show($id)
    {
        $club = Club::find($id);
        $player = Player::find($id);

        $players = Player::inRandomOrder()
            ->with('position')
            ->take(20)
            ->get();

        $coach = Coach::find($id);
        $game = Game::find($id);
        $team = Team::find($id);
        $post = Post::find($id);

        return view('player.show')
            ->with([
                'club' => $club,
                'player' => $player,
                'players' => $players,
                'coach' => $coach,
                'team' => $team,
                'game' => $game,
                'post' => $post,
            ]);
    }
}
