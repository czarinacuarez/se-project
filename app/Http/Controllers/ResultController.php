<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\School;
use App\Models\SportsMatch;
use App\Models\Scores;
use App\Models\Events;
use App\Models\ContestMatch;
use App\Models\SportsAwards;
use App\Models\ContestAwards;

use Carbon\Carbon;

class ResultController extends Controller
{
    public function index(){
        $programs = Program::orderBy('points', 'desc')
        ->with('school')
        ->get();
        $latestUpdated = Program::latest('updated_at')->get();
        $schools = School::all();

        $latestUpdatedSchool = School::latest('updated_at')->get();

        $today = Carbon::today();

        $threeDaysAfter = $today->copy()->addDays(3);

        $recentMatches = SportsMatch::whereDate('date', '>=', $today)
        ->orderBy('date', 'asc')
        ->whereDate('date', '<=', $threeDaysAfter)
        ->with(['schools', 'scores','sports'])
        ->get();
    

        $recentContestMatches = ContestMatch::whereDate('date', '>=', $today)
        ->whereDate('date', '<=', $threeDaysAfter)
        ->orderBy('date', 'asc')
        ->with(['program', 'cmatch_score','contest'])
        ->get();

        $events = Events::orderBy('date', 'asc')->get();


        $contestAwards = ContestAwards::with(['program', 'contest','school'])
        ->orderBy('contest_id', 'asc')
        ->orderByRaw("FIELD(championship, 'Champion', '1st Place', '2nd Place')")
        ->get();

        $sportsAwards = SportsAwards::with(['school', 'sports'])
        ->orderBy('sports_id', 'asc')
        ->orderByRaw("FIELD(championship, 'Champion', '1st Place', '2nd Place')")
        ->get();
    
        return view('guest.result',  compact(['contestAwards','sportsAwards', 'events','programs' , 'recentMatches',  'latestUpdated', 'recentContestMatches', 'latestUpdatedSchool','schools']));
    }
}
