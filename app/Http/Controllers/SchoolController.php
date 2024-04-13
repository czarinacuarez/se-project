<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\Support\Facades\Storage;

class SchoolController extends Controller
{
    public function index() {
        $school_lists = School::all();

        return view('cruds.school_program', ['school_lists' => $school_lists]);
    }

    public function AddSchool(Request $request) {
        $request->validate([
            'school_initials' => ['required', 'string', 'max:255'],
            'school_name' => ['required', 'string', 'max:255'],
            'points' => ['required'],
            'school_logo' => ['required'],
        ]);

        if ($request->hasFile('school_logo')) {
            $uploadedLogo = $request->file('school_logo');
            $schoolImage = time() . '.' . $uploadedLogo->getClientOriginalExtension();

            $directory = 'images';
            $uploadedLogo->storeAs('public/' . $directory, $schoolImage);

            $school_list = School::create([
                'school_initials' => $request->school_initials,
                'school_name' => $request->school_name,
                'points' => $request->points,
                'school_logo' => $schoolImage,
            ]);

            $school_list->save();

            return back();
        }
    }

    public function UpdateSchool(Request $request, $id) {
        $school = School::find($id);

        if($school) {
            $school->school_initials = $request->input('school_initials');
            $school->school_name = $request->input('school_name');
            $school->points = $request->input('points');
            $schoolLL = $request->file('school_logo');
            
            if ($request->hasFile('school_logo')) {
                Storage::delete('public/images/' . $school->school_logo);

                $uploadedLogo = $request->file('school_logo');
                
                $schoolImage = time() . '.' . $uploadedLogo->getClientOriginalExtension();
                $directory = 'images';
                $uploadedLogo->storeAs('public/' . $directory, $schoolImage);

                $school->school_logo = $schoolImage;
            }

            $school->update();
            return redirect()->back()->with('status','Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'School not found');
        }
    }

    public function DeleteSchool(Request $request, $id) {
        $school = School::find($id);

        $school->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
