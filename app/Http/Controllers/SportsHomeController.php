<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SportsMatch;
use App\Models\Scores;

class SportsHomeController extends Controller
{

        public function index(){

         
    
    
             $sports_ids = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; 

            $recentMatches = SportsMatch::whereIn('sports_id', $sports_ids)
                ->orderBy('date', 'asc')
                ->with(['schools', 'scores', 'sports'])
                ->get();

            foreach ($recentMatches as $match) {
                // Retrieve scores for each match
                $scores = Scores::where('match_id', $match->id)->with('school')->get();
                $match->scores = $scores; // Attach scores to the match object
            }


           
    
    
    
    
            return view('guest.sports',  compact(['recentMatches','scores']));
    
        }
    
        public function school()
        {
            return $this->belongsTo(School::class);
        }

    
}
