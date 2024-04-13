<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContestMatch;
use Carbon\Carbon;

class ContestMatchController extends Controller
{
    public function AddContestMatch(Request $request) {
        try {
            $request->validate([
                'contest_id' => ['required'],
                'match_name' => ['required'],
                'location' => ['required'],
                'date' => ['required', 'date_format:Y-m-d'],
            ]);
    
            $contest_match = ContestMatch::create([
                'contest_id' => $request->contest_id,
                'match_name' => $request->match_name,
                'location' => $request->location,
                'date' => $request->date,
            ]);
    
            $contest_match->save();
    
            return back();
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function UpdateContestMatch(Request $request, $id) {
        $contest_match = ContestMatch::find($id);

        $contest_match->contest_id = $request->input('contest_id');
        $contest_match->match_name = $request->input('match_name');
        $contest_match->location = $request->input('location');
        $formattedDate = Carbon::createFromFormat('Y-m-d', $request->input('date'))->toDateString();
        $contest_match->date = $formattedDate; 

        $contest_match->update();

        return redirect()->back()->with('status','Updated Successfully');
    }

    public function DeleteContestMatch(Request $request, $id) {
        $contest_match = ContestMatch::find($id);

        $contest_match->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
