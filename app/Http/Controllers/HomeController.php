<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $team = Team::orderby('id','desc')
            ->take(12)
            ->get();

        return view('home.index')
            ->with([
                'team'=> $team,
            ]);
    }
}

