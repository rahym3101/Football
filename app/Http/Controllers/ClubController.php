<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Player;
use App\Models\Game;
use App\Models\Post;
use App\Models\Coach;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ClubController extends Controller
{
//    public function index(Request $request)
//    {
//        $clubs = Club::with( 'team', 'player', 'game', 'coach', 'post')
//            ->findOrFail($request);
//        $games = Game::orderBy('name')
//            ->get();
//        $players = Player::orderBy('name')
//            ->get();
//        $teams = Team::orderBy('name')
//            ->get();
//        $coaches = Coach::orderBy('name')
//            ->get();
//
//        return view('car.index')
//            ->with([
//                'clubs' => $clubs,
//                'players' => $players,
//                'teams' => $teams,
//                'coaches' => $coaches,
//                'games' => $games,
//            ]);
//    }

    public function show($id)
    {
        $clubs = Club::with( 'team', 'player', 'game', 'coach', 'post')
            ->findOrFail($id);
        $games = Game::with('sort','date','opponent');
        $players= Player::with('id','name','surname');
        $teams = Team::with('name');

        return view('club.show')
            ->with([
                'clubs' => $clubs,
                'games' => $games,
                'players' => $players,
                'teams' => $teams,
            ]);
    }
}
