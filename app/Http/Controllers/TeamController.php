<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function getTeams()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }

    public function getTeamDetail($id)
    {
        $team = Team::find($id);
        return dd($team);
    }
}
