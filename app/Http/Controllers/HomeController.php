<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $teams = Team::get();

        return view('home.index')
            ->with([
                'teams'=> $teams,
            ]);
    }


    public function locale($locale)
    {
        if ($locale == 'en') {
            session()->put('locale', 'en');
            return redirect()->back();
        } elseif ($locale == 'tm') {
            session()->put('locale', 'tm');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}

