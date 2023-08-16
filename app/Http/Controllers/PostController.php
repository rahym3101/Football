<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Game;
use App\Models\Coach;
use App\Models\Team;
use App\Models\Post;
use App\Models\Player;

class PostController extends Controller
{
    public function show($id)
    {
        $club = Club::find($id);
        $player = Player::find($id);
        $game = Game::find($id);
        $coach = Coach::find($id);
        $team = Team::find($id);
        $post = Post::find($id);

        $posts = Post::inRandomOrder()
            ->take(3)
            ->get();

        return view('post.show')
            ->with([
                'club' => $club,
                'player' => $player,
                'team' => $team,
                'game' => $game,
                'coach' => $coach,
                'post' => $post,
                'posts' => $posts,
            ]);
    }
}
