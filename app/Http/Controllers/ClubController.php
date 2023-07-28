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
    public function index(Request $request)
    {
        $request->validate([
            'Team' => 'nullable|integer|min:1',
            'Player' => 'nullable|integer|min:1',
            'Game' => 'nullable|integer|min:1',
            'Coach' => 'nullable|integer|min:1',
            'Post' => 'nullable|integer|min:1',
        ]);

        return view('home.index')
            ->with([
                'clubs' => $club,
            ]);
    }
}
