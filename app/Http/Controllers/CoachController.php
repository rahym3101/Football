<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Game;
use App\Models\Team;
use App\Models\Coach;
use App\Models\Post;
use App\Models\Player;

class CoachController extends Controller
{
    public function show($id)
    {
        $club = Club::find($id);
        $player = Player::find($id);
        $game= Game::find($id);
        $coach = Coach::find($id);

        $coaches = Coach::inRandomOrder()
            ->take(2)
            ->get();

        $team = Team::find($id);
        $post = Post::find($id);

        return view('coach.show')
            ->with([
                'club' => $club,
                'player' => $player,
                'coach' => $coach,
                'coaches' => $coaches,
                'team' => $team,
                'game' => $game,
                'post' => $post,
            ]);
    }
}
