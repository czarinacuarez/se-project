<?php

namespace App\Http\Controllers;
use App\Models\Sports;
use App\Models\SportsMatch;
use App\Models\School;
use App\Models\SportsAwards;
use App\Models\Scores;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index() {
        $sport_lists = Sports::all();
        $sport_match_lists = SportsMatch::all();
        $school_lists = School::all();
        $sports_awards_lists = SportsAwards::all();

        return view ('cruds.sports_match', ['sport_lists' => $sport_lists, 'sport_match_lists' => $sport_match_lists, 'school_lists' => $school_lists, 'sports_awards_lists' => $sports_awards_lists]);
    }

    public function AddSports(Request $request) {
        try {
            $request->validate([
                'sports_category' => ['required', 'string'],
            ]);

            $sport_lists = Sports::create([
                'sports_category' => $request->sports_category
            ]);
            
            $sport_lists->save();

            return back();
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function UpdateSportsCategory (Request $request, $id) {
        $sport = Sports::find($id);
        $sport->sports_category = $request->input('sports_category');

        $sport->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

    public function DeleteSportsCategory(Request $request, $id) {
        $sport = Sports::find($id);

        $sport->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }

    public function scores($id){

        $match_id = $id;
    
    
        $school_lists = School::all();

        $scores = Scores::where('match_id', $match_id)->with('school')->get();


        return view('cruds.sports_scores', ['school_lists' => $school_lists, 'match_id' => $match_id, 'scores' => $scores]);
    }


}
