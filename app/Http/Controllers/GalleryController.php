<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Participants;

class GalleryController extends Controller
{
    public function index(){

    $players = Players::with(['school', 'sports'])
    ->orderBy('school_id')
    ->orderBy('sports_id')
    ->get();

    $participants = Participants::with(['program', 'contest', 'school'])
    ->orderBy('program_id')
    ->orderBy('contest_id')
    ->get();
    
        return view('guest.participants', compact(['players', 'participants']));
    }
}
