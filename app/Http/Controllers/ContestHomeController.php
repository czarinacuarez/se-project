<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContestMatch;
use App\Models\CScore;
use App\Models\Program;
use App\Models\School;
use App\Models\SportsMatch;
use App\Models\Events;

class ContestHomeController extends Controller
{

        public function index(){

    
            $contest_ids = [1, 2, 3, 4, 5, 6, 7, 8]; 

            $recentMatches = ContestMatch::whereIn('contest_id', $contest_ids)
                ->orderBy('date', 'asc')
                ->with(['program', 'cmatch_score', 'contest'])
                ->get();

            foreach ($recentMatches as $match) {
                // Retrieve scores for each match
                $scores = CScore::where('cmatch_id', $match->id)
                ->with('program.school') // Load the program and its associated school
                ->get();
                $match->scores = $scores; // Attach scores to the match object
            }
    
    
            return view('guest.contest',  compact(['recentMatches','scores']));
    
        }
    
        public function program()
        {
            return $this->belongsTo(Program::class);
        }

    
}
