<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        return Team::with('club', 'game', 'news', 'player')
//            ->inRandomOrder()
//            ->first();
    }
}

