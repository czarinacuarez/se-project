<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SportsMatch;
use App\Models\School;
use App\Models\Scores;

class ScoresController extends Controller
{
    public function index() {
        $score_lists = Scores::all();
        $sport_match_lists = SportsMatch::all();
        $school_lists = School::all();

        return view('cruds.scores', compact(['sport_match_lists', 'school_lists', 'score_lists']));
    }

    public function AddScores(Request $request) {
        try {
            $request->validate([
                'match_id' => ["required"],
                'school_id' => ["required"],
                'scores' => ["required"],
            ]);
    
            $score_lists = Scores::Create([
                'match_id' => $request->match_id,
                'school_id' => $request->school_id,
                'scores' => $request->scores,
            ]);
    
            $score_lists->save();
            return back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function contestscores($id){

        $match_id = $id;
    
    
        $school_lists = School::all();

        $scores = Scores::where('match_id', $match_id)->with('school')->get();


        return view('cruds.contest_scores', ['school_lists' => $school_lists, 'match_id' => $match_id, 'scores' => $scores]);
    }

}
