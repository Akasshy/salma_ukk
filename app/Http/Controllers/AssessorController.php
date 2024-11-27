<?php

namespace App\Http\Controllers;

use App\Models\Assessor;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class AssessorController extends Controller
{
    public function showassessor(){
        $data['assessor'] = Assessor::orderBy('user_id', 'desc')->get();
        $data['total_assessor'] = Assessor::count();
        return view('user',$data);
    }
    public function createassessor(){
        $assessors = Assessor::all();
        return view('assessor-create', compact('assessors'));
    }
 

    public function addassessor(Request $request){
        $validateData = $request->validate([
            'user_id' => ['required'],
            'assessor_type' => ['required'],
            'description' => ['required'],

        ]);
         Assessor::create([
            'user_id' => $validateData['user_id'],
            'assessor_type' => $validateData['assessor_type'],
            'description' => $validateData['description'],
        ]);
        return redirect('/user')->with( 'secces', 'assessor berhasil ditambahkan');
    }
    public function editassessor(Request $request){
        $data['assessor'] = Assessor::find($request->id);
        return view('assessor-update', $data);
    }
    public function updateassessor(Request $request, $id){
        $assessor = Assessor::findOrFail($id);
        $user = $assessor->user;

        // Update user attributes
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone_number = $request->phone_number;

        // If a password is provided, hash it before saving
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        // Save user data
        $user->save();

        // Update the student's specific information
        $assessor->assessor_type = $request->assessor_type;
        $assessor->description = $request->description;

        // Save the student data
        $assessor->save();

        // Redirect back with a success message
        // Alert::('Success', 'Data berhasil diubah');
        return redirect('/user');
    }
    public function deleteassessor($id){
        $assessor = Assessor::find($id);
        $assessor-> delete();
        return redirect('user');
    }

}
