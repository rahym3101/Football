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
    public function show($id)
    {
        $request->validate([
            
        ])

        $club = Club::with( 'player', 'game', 'coach', 'post')
            ->findOrFail($id);

        return view('club.show')
            ->with([
                'club' => $club,
            ]);
    }
}
