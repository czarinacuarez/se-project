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

    public function UpdateSportsCategory (Request $request, $id) {
        $sport = Sports::find($id);
        $sport->sports_category = $request->input('sports_category');

        $sport->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

    public function DeleteSportsCategory(Request $request, $id) {
        $sport = Sports::find($id);

        $sport->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
