<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;
use App\Models\ContestMatch;
use App\Models\Program;
use App\Models\ContestAwards;

class ContestController extends Controller
{
    public function index() {
        $contest_lists = Contest::all();
        $contest_match_lists = ContestMatch::all();
        $program_lists = Program::all();
        $contest_awards_lists = ContestAwards::all();

        return view('cruds.contest_match', ['contest_lists' => $contest_lists, 'contest_match_lists' => $contest_match_lists, 'program_lists' => $program_lists, 'contest_awards_lists' => $contest_awards_lists]);
    }
    public function AddContest(Request $request) {
        try {
            $request->validate([
                'contest_category' => ['required', 'string'],
            ]);

            $contest_category = Contest::create([
                'contest_category' => $request->contest_category
            ]);
            
            $contest_category->save();

            return back();
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function UpdateContestCategory (Request $request, $id) {
        $contest = Contest::find($id);
        $contest->contest_category = $request->input('contest_category');

        $contest->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

    public function DeleteContest(Request $request, $id) {
        $contest = Contest::find($id);

        $contest->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
