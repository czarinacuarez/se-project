<?php

namespace App\Http\Controllers;
use App\Models\Sports;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index() {
        $sport_lists = Sports::all();

        return view ('cruds.sports_match', ['sport_lists' => $sport_lists]);
    }

    public function AddSports(Request $request) {
        try {
            $request->validate([
                'sports_category' => ['required', 'string'],
            ]);

            $sport_lists = Sports::create([
                'sports_category' => $request->sports_category
            ]);
            
            $sport_lists->save();

            return back();
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
