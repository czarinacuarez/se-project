<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialAwards;

class SpecialAwardsController extends Controller
{
    public function AddSpecialAwards(Request $request) {
        try {
            $request->validate([
                'contestant_id' => ['required'],
                'special_awards' => ['required', 'string'],
            ]);

            $special_awards = SpecialAwards::create([
                'contestant_id' => $request->contestant_id,
                'special_awards' => $request->special_awards,
            ]);
    
            $special_awards->save();
    
            return back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function UpdateSpecialAwards(Request $request, $id) {
        $special_awards = SpecialAwards::find($id);
        $special_awards->contestant_id = $request->input('contestant_id');
        $special_awards->special_awards = $request->input('special_awards');

        $special_awards->update();
        return redirect()->back()->with('status','Updated Successfully');
    }
    public function DeleteSpecialAwards(Request $request, $id) {
        $special_awards = SpecialAwards::find($id);

        $special_awards->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
