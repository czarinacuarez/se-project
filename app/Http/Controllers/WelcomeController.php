<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\School;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $programs = Program::orderBy('points', 'desc')
        ->with('school')
        ->get();
        $latestUpdated = Program::latest('updated_at')->get();
        $schools = School::all();

        $latestUpdatedSchool = School::latest('updated_at')->get();

        return view('welcome',  compact(['programs' , 'latestUpdated', 'latestUpdatedSchool','schools']));

    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }


}



?>