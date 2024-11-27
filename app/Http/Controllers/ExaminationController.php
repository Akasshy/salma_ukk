<?php

namespace App\Http\Controllers;

use App\Models\Assessor;
use App\Models\CompentencyStandard;
use App\Models\CompetencyElement;
use App\Models\Examination;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Element;

class ExaminationController extends Controller
{
    public function showexamination(){
        $examination = Examination::with([
            'student', 'assessor', 'element'
        ])->get();

        return view('examination', compact('examination'));
    }
    public function createexamination(){
        $students = Student::all();
        $assessors = Assessor::all();
        $elements = CompetencyElement::all();
        return view('exam-create', compact('students', 'assessors', 'elements'));
    }
    public function addexamination(Request $request){
        $request->validate([
            'exam_date' => ['required'],
            'student_id' => ['required'],
            'assessor_id' => ['required'],
            'element_id' => ['required'],
            'status' => ['required'],
            'comments' => ['required'],
        ]);
        Examination::create([
            'exam_date' => $request->exam_date,
            'student_id' => $request->student_id,
            'assessor_id' => $request->assessor_id,
            'element_id' => $request->element_id,
            'status' => $request->status,
            'comments' => $request->comments,
        ]);
        return redirect('/examination');
    }
    public function updateexamination(Request $request){
        $request->validate([
            'exam_date' => ['required'],
            'student_id' => ['required'],
            'assessor_id' => ['required'],
            'element_id' => ['required'],
            'status' => ['required'],
            'comments' => ['required'],
        ]);
        $examination = Examination::find();
        $examination->update([
            'exam_date' => $request->exam_date,
            'student_id' => $request->student_id,
            'assessor_id' => $request->assessor_id,
            'element_id' => $request->element_d,
            'status' => $request->status,
            'comments' => $request->comments,
        ]);

        return redirect('/examination');
    }
    public function deleteexamination(Request $request){
        $examination = Examination::find($request->id);
        $delete = Examination::where('id', $request->id)->delete();
        return redirect('/examination');
    }

    // public function showdaftar(){
    //     $examination = Examination::with([
    //         'student', 'assessor', 'element'
    //     ])->get();
    //     return view('daftar', compact('examination'));
    // }
    // public function craetedaftar(){
    //     $students = Student::all();
    //     $assessors = Assessor::all();
    //     $elements = CompetencyElement::all();
    //     return view('exam-create', compact('students', 'assessors', 'elements'));
    // }
    public function showstandar(){
        $id = Auth::user()->assessor->id;
        $competencyStandard = CompentencyStandard::where('assessor_id', $id)->get();
        return view('assessor.penilaian.pilih-standar', compact('competencyStandard'));
    }
    public function showsiswa($id)
    {
        $standars = CompentencyStandard::find($id);
        $standar_id = $standars->id;
        $students = Student::where('major_id', $standars->major_id)->get();
        // $standar_id = CompentencyStandard::where('id', $id)->first();
        // $element = CompetencyElement::where('competency_id', $standar_id->id)->get();

        // Ambil data examination yang sesuai dan grupkan berdasarkan student_id
        // $examinations = Examination::where('standar_id', $id)->get()->groupBy('student_id');

        return view('assessor.penilaian.pilih-siswa', compact( 'standar_id', 'students'));
    }

}
