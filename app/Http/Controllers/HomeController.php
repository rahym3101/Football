<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Mime\Header\all;

class HomeController extends Controller
{
    public function index()
    {
        $team = Team::all();

        return view('home.index')
            ->with([
                'team'=> $team,
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

