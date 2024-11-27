<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{

    public function tes(){
        return view('addmajor');
    }

    public function show(){
        $data['major'] = Major::orderby('major_name', 'desc')->get();
        $data['total_major'] = Major::count();
        return view('major', $data);
    }
    public function createmajor(){
        return view('major-create');
    }

    public function add(Request $request){
        $validateData = $request->validate([
            'major_name' => ['required'],
            'description' => ['required'],
        ]);

        Major::create([
            'major_name' => $validateData['major_name'],
            'description' => $validateData['description'],

        ]);

        return redirect('/major');
    }



    public function editmajor(Request $request){
        $data['major'] = Major::find($request->id);
        return view('major-update', $data);
    }
    public function updatemajor(Request $request){
        $update = Major::where('id', $request->id)->update([
            'major_name' => $request->name,
            'description'=> $request->description,
        ]);
        return redirect('major');
    }
    public function deletemajor(Request $request){
        $major = Major::find($request->id);
        $delete = Major::where('id',$request->id)->delete();
        return redirect('major');
    }
}
