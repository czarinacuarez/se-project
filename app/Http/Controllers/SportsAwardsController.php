<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SportsAwards;

class SportsAwardsController extends Controller
{
    public function AddSportsAwards(Request $request) {
        $request->validate([
            'school_id' => ['required'],
            'sports_id' => ['required'],
            'championship' => ['required', 'string'],
        ]);
        $sports_awards_lists = SportsAwards::create([
            'school_id' => $request->school_id,
            'sports_id' => $request->sports_id,
            'championship' => $request->championship,
        ]);

        $sports_awards_lists->save();

        return back();
    }
    public function UpdateSportsAwards (Request $request, $id) {
        $sport_awards = SportsAwards::find($id);
        $sport_awards->school_id = $request->input('school_id');
        $sport_awards->sports_id = $request->input('sports_id');
        $sport_awards->championship = $request->input('championship');

        $sport_awards->update();
        return redirect()->back()->with('status','Updated Successfully');
    }
    public function DeleteSportsAwards(Request $request, $id) {
        $sport_awards = SportsAwards::find($id);

        $sport_awards->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
