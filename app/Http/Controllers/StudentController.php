<?php

namespace App\Http\Controllers;

use App\Models\Examination;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // public function showstudent(){
    //     $students = User::Where('role', 'student')->with('student')->orderBy('name', 'asc')->get();
    //     return view('user', ['students' => $students]);
    // }
    // public function updatestudent(Request $request, $id){
    //     $students = Student::find($id);
    //     $students->update([
    //         'nisn' => $request->nisn,
    //         'grade_level' => $request->grade_level,
    //         'major_id' => $request-> major_id,
    //     ]);

    //     $user = User::find($students->user_id);
    //     $user->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //     ]);
    //     return redirect('student');
    // }
    // public function deletestudent($id){
    //     $students = Student::find($id);
    //     $students->delete();

    //     $user = User::find($students->user_id);
    //     $user->delete();
    //     return redirect('student');
    // }

    // public function showstudent(Request $request){
    //     $studentId = auth()->user()->student->id;

    //     $status = $request->get('status');
    //     $query = Examination::where('student_id', $studentId)->with(['compextencyElement', 'assessor.user']);

    //     if ($status !== null) {
    //         $query->where('status', $status);
    //     }
    //     $result = $query->get();
    //     return view('melihathasilujian', compact('result'));
    // }
    //  public function downloadstudent(){
    //     $studentId = auth()->user()->student->id;

    //     $results = Examination::where('student_id', $studentId)
    //     ->with(['competencyElement', 'assessor.user'])->get();

    //     $pdf = Pdf::loadView('student.result-pdf', compact('results'));

    //     return $pdf->download('hasil-ujian-saya.pdf');
    //  }

    public function showpdf(){
        return view('pdf');
    }
}
