<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index() {
        $school_lists = School::all();
        $program_lists = Program::all();

        return view ('cruds.programs', ['school_lists' => $school_lists, 'program_lists' => $program_lists]);
    }

    public function AddProgram(Request $request) {
        try {
            $request->validate([
                'program_initials' => ['required', 'string', 'max:255'],
                'program_name' => ['required', 'string', 'max:255'],
                'points' => ['required'],
            ]);
    
            $program_list = Program::create([
                'program_initials' => $request->program_initials,
                'program_name' => $request->program_name,
                'points' => $request->points,
                'school_id' => $request->school_id,
            ]);
            
            $program_list->save();

            return back();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function UpdateProgram (Request $request, $id) {
        $program = Program::find($id);
        $program->program_initials = $request->input('program_initials');
        $program->program_name = $request->input('program_name');
        $program->points = $request->input('points');

        $program->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

    public function DeleteProgram(Request $request, $id) {
        $program = Program::find($id);

        $program->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
