<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

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
            'points' => ['required', 'int'],
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
}
