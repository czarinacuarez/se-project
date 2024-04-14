<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Sports;
use App\Models\Players;

class PlayersController extends Controller
{
    public function index() {
        $player_lists = Players::all();
        $school_lists = School::all();
        $sport_lists = Sports::all();

        return view('cruds.players', compact(['player_lists', 'school_lists', 'sport_lists']));
    }

    public function AddPlayer(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'profile' => ['required'],
        ]);

        if ($request->hasFile('profile')) {
            $uploadedLogo = $request->file('profile');
            $profileImage = time() . '.' . $uploadedLogo->getClientOriginalExtension();

            $directory = 'profiles';
            $uploadedLogo->storeAs('public/' . $directory, $profileImage);

            $player_lists = Players::Create([
                'school_id' => $request->school_id,
                'sports_id' => $request->sports_id,
                'name' => $request->name,
                'profile' => $profileImage,
                'section' => $request->section,
            ]);

            $player_lists->save();

            return back();
        }
    }

    public function UpdatePlayer(Request $request, $id) {
        $player = Players::find($id);
        $player->name = $request->input('name');
        $player->section = $request->input('section');

        $player->update();
        return redirect()->back()->with('status','Updated Successfully');
    }
    public function DeletePlayer(Request $request, $id) {
        $player = Players::find($id);
        
        $player->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
