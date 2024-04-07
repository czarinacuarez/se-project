<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Sports;
use App\Models\Program;
use App\Models\Players;

class PlayersController extends Controller
{
    public function index() {
        $player_lists = Players::all();
        $school_lists = School::all();
        $sport_lists = Sports::all();
        $program_lists = Program::all();

        return view('cruds.players', compact(['player_lists', 'school_lists', 'sport_lists', 'program_lists']));
    }

    public function AddPlayer(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
        ]);

        $player_lists = Players::Create([
            'school_id' => $request->school_id,
            'sports_id' => $request->sports_id,
            'program_id' => $request->program_id,
            'name' => $request->name,
            'section' => $request->section,
        ]);

        $player_lists->save();

        return back();
    }
}
