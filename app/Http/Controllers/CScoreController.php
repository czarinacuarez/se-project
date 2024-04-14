<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CScore;
use App\Models\Program;

class CScoreController extends Controller
{
    public function AddCMatchScore(Request $request) {
        try {
            $request->validate([
                'cmatch_id' => ["required"],
                'program_id' => ["required"],
                'scores' => ["required"],
            ]);
    
            $cscore_lists = CScore::Create([
                'cmatch_id' => $request->cmatch_id,
                'program_id' => $request->program_id,
                'scores' => $request->scores,
            ]);
    
            $cscore_lists->save();
            return back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function UpdateCMatchScore (Request $request, $id) {
        $cscores = CScore::find($id);
        $cscores->cmatch_id = $request->input('cmatch_id');
        $cscores->program_id = $request->input('program_id');
        $cscores->scores = $request->input('scores');
        
        $cscores->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

    public function DeleteCMatchScore(Request $request, $id) {
        $cscores = CScore::find($id);

        $cscores->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
