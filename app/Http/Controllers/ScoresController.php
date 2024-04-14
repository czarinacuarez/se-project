<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SportsMatch;
use App\Models\School;
use App\Models\Scores;
use App\Models\ContestMatch;
use App\Models\Program;
use App\Models\CScore;

class ScoresController extends Controller
{
    public function index() {
        $score_lists = Scores::all();
        $sport_match_lists = SportsMatch::all();
        $school_lists = School::all();
        $contest_match_lists = ContestMatch::all();
        $program_lists = Program::all();
        $cscore_lists = CScore::all();

        return view('cruds.scores', compact(['sport_match_lists', 'school_lists', 'score_lists', 'contest_match_lists', 'program_lists', 'cscore_lists']));
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
    public function UpdateScores (Request $request, $id) {
        $scores = Scores::find($id);
        $scores->match_id = $request->input('match_id');
        $scores->school_id = $request->input('school_id');
        $scores->scores = $request->input('scores');

        $scores->update();
        return redirect()->back()->with('status','Updated Successfully');
    }
    public function DeleteScores(Request $request, $id) {
        $scores = Scores::find($id);

        $scores->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
    public function contestscores($id){
        $match_id = $id;
        $program_lists = Program::all();

        $scores = Scores::where('match_id', $match_id)->with('contest')->get();

        return view('cruds.contest_scores', ['school_lists' => $program_lists, 'match_id' => $match_id, 'scores' => $scores]);
    }

}
