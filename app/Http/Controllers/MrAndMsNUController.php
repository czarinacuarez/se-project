<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\School;
use App\Models\MrAndMsNU;
use Illuminate\Support\Facades\Storage;

class MrAndMsNUController extends Controller
{
    public function index() {
        $program_lists = Program::all();
        $school_lists = School::all();
        $contestant_lists = MrAndMsNU::all();

        return view('cruds.MrMsNU', compact(['program_lists', 'school_lists', 'contestant_lists']));
    }

    public function AddContestant(Request $request) {
        try {
            $request->validate([
                'name' => ['required'],
                'section' => ['required'],
                'awards'  => ['required'],
                'program_id' => ['required'],
                'profile' => ['required'],
            ]);

            if ($request->hasFile('profile')) {
                $uploadedProfile = $request->file('profile');
                $profileImage = time() . '.' . $uploadedProfile->getClientOriginalExtension();
         
                $directory = 'profiles';
                $uploadedProfile->storeAs('public/' . $directory, $profileImage);
    
                $mr_ms_nu = MrAndMsNU::create([
                    'name' => $request->name,
                    'section' => $request->section,
                    'awards' => $request->awards,
                    'program_id' => $request->program_id,
                    'profile' => $profileImage,
                ]);
                
                $mr_ms_nu->save();
    
                return back();
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function UpdateContestant(Request $request, $id) {
        $contestant = MrAndMsNU::find($id);
        
        if($contestant) {
            $contestant->name = $request->input('name');
            $contestant->section = $request->input('section');
            $contestant->awards = $request->input('awards');
            $contestant->program_id = $request->input('program_id');
            $contestantLL = $request->file('profile');
            
            if ($request->hasFile('profile')) {
                Storage::delete('public/profiles/' . $contestant->profile);

                $uploadedProfile = $request->file('profile');
                
                $profileImage = time() . '.' . $uploadedProfile->getClientOriginalExtension();
                $directory = 'profiles';
                $uploadedProfile->storeAs('public/' . $directory, $profileImage);

                $contestant->profile = $profileImage;
            }

            $contestant->update();
            return redirect()->back()->with('status','Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'School not found');
        }
    }
    public function DeleteContestant(Request $request, $id) {
        $contestant = MrAndMsNU::find($id);
        
        $contestant->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
