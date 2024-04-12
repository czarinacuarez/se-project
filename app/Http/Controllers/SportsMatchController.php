<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SportsMatch;
use Carbon\Carbon;

class SportsMatchController extends Controller
{
    public function AddSportsMatch(Request $request) {
        try {
            $request->validate([
                'match_name' => ['required', 'string'],
                'date' => ['required', 'date_format:Y-m-d'],
                'location' => ['required', 'string'],
                'sports_id' => ['required'],
            ]);

            $sports_match_lists = SportsMatch::create([
                'match_name' => $request->match_name, 
                'date' => $request->date, 
                'location' => $request->location, 
                'sports_id' => $request->sports_id, 
            ]);
    
            $sports_match_lists->save();
            
            return back();
        } catch (\Exception $e) {
            dd($e);
        }   
    }
    public function UpdateSportsMatch(Request $request, $id) {
        try {      
            $sports_match = SportsMatch::find($id);

            $sports_match->match_name = $request->input('match_name');
            $formattedDate = Carbon::createFromFormat('Y-m-d', $request->input('date'))->toDateString();
            $sports_match->date = $formattedDate;
            $sports_match->sports_id = $request->input('sports_id');
            $sports_match->location = $request->input('location');

            $sports_match->update();
            return redirect()->back()->with('status','Updated Successfully');
        } catch (\Exception $e) {
            dd($e);
        }   
    }
    public function DeleteSportsMatch(Request $request, $id) {
        $sports_match = SportsMatch::find($id);

        $sports_match->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
