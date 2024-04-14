<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MrAndMsNU;
use App\Models\ContestantPlacement;
use App\Models\SpecialAwards;


class PageantController extends Controller
{
public function index(){


    $participants = MrAndMsNU::with('program', 'school')->get();
    
    $placements = ContestantPlacement::with('contestant', 'program', 'school')
    ->orderBy('placement')
    ->get();


    $awards = SpecialAwards::with('contestant', 'program', 'school')->get();

    return view('guest.msnu', compact(['participants', 'placements', 'awards']));
    

}
}
