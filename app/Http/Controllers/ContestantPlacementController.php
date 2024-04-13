<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContestantPlacement;

class ContestantPlacementController extends Controller
{
    public function AddContestantPlacement(Request $request) {
        try {
            $request->validate([
                'contestant_id' => ['required'],
                'placement' => ['required', 'string'],
            ]);

            $contestant_placement_lists = ContestantPlacement::create([
                'contestant_id' => $request->contestant_id,
                'placement' => $request->placement,
            ]);
    
            $contestant_placement_lists->save();
    
            return back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function UpdateContestantPlacement(Request $request, $id) {
        $contestant_placement = ContestantPlacement::find($id);
        $contestant_placement->contestant_id = $request->input('contestant_id');
        $contestant_placement->placement = $request->input('placement');

        $contestant_placement->update();
        return redirect()->back()->with('status','Updated Successfully');
    }
    public function DeleteContestantPlacement(Request $request, $id) {
        $contestant_placement = ContestantPlacement::find($id);

        $contestant_placement->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
