<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContestAwards;

class ContestAwardsController extends Controller
{
    public function AddContestAwards(Request $request) {
        try {
            $request->validate([
                'contest_id' => ['required'],
                'program_id' => ['required'],
                'championship' => ['required'],
            ]);
    
            $contest_awards = ContestAwards::create([
                'contest_id' => $request->contest_id,
                'program_id' => $request->program_id,
                'championship' => $request->championship,
            ]);
    
            $contest_awards->save();
    
            return back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function UpdateContestAwards (Request $request, $id) {
        $contest_awards = ContestAwards::find($id);
        $contest_awards->contest_id = $request->input('contest_id');
        $contest_awards->program_id = $request->input('program_id');
        $contest_awards->championship = $request->input('championship');

        $contest_awards->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

    public function DeleteContestAwards(Request $request, $id) {
        $contest_awards = ContestAwards::find($id);

        $contest_awards->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
