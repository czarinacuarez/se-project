<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function index() {
        $event_lists = Events::all();

        return view('dashboard', compact(['event_lists']));
    }
    public function AddEvents(Request $request) {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string', 'max:255'],
                'date' => ['required'],
                'logo' => ['required'],
            ]);
            
            if ($request->hasFile('logo')) {
                $uploadedLogo = $request->file('logo');
                $schoolImage = time() . '.' . $uploadedLogo->getClientOriginalExtension();
    
                $directory = 'images';
                $uploadedLogo->storeAs('public/' . $directory, $schoolImage);
    
                $event_lists = Events::create([
                    'name' => $request->name,
                    'location' => $request->location,
                    'date' => $request->date,
                    'logo' => $schoolImage,
                ]);
    
                $event_lists->save();
    
                return back();
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
    public function UpdateEvents(Request $request, $id) {
        $event = Events::find($id);
        
        if($event) {
            $event->name = $request->input('name');
            $event->location = $request->input('location');
            $event->date = $request->input('date');
            $schoolLL = $request->file('logo');

            if ($request->hasFile('logo')) {
                Storage::delete('public/images/' . $event->logo);

                $uploadedLogo = $request->file('logo');
                
                $schoolImage = time() . '.' . $uploadedLogo->getClientOriginalExtension();
                $directory = 'images';
                $uploadedLogo->storeAs('public/' . $directory, $schoolImage);

                $event->logo = $schoolImage;
            }

            $event->update();
            return redirect()->back()->with('status','Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'School not found');
        }
    }

    public function DeleteEvents(Request $request, $id) {
        $event = Events::find($id);

        $event->delete();
        return redirect()->back()->with('status','Deleted Successfully');
    }
}
