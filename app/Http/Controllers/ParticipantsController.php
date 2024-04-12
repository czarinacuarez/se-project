<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Participants;
use App\Models\Program;
use App\Models\Contest;

class ParticipantsController extends Controller
{
    public function index() {
        $participants_lists = Participants::all();
        $school_lists = School::all();
        $contest_lists = Contest::all();
        $program_lists = Program::all();

        return view('cruds.participants', compact(['participants_lists', 'school_lists', 'contest_lists', 'program_lists']));
    }

    public function AddParticipants(Request $request) {
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

            $participants_lists = Participants::Create([
                'contest_id' => $request->contest_id,
                'program_id' => $request->program_id,
                'name' => $request->name,
                'profile' => $profileImage,
                'section' => $request->section,
            ]);

            $participants_lists->save();

            return back();
        }
    }
    public function UpdateParticipants(Request $request, $id) {
        $participants = Participants::find($id);
        $participants->name = $request->input('name');
        $participants->section = $request->input('section');

        $participants->update();
        return redirect()->back()->with('status','Updated Successfully');
    }
    public function DeleteParticipants(Request $request, $id) {
        $participants = Participants::find($id);
        
        $participants->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
