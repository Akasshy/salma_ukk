<?php

namespace App\Http\Controllers;

use App\Models\Assessor;
use App\Models\CompentencyStandard;
use App\Models\Major;
use Illuminate\Http\Request;

class CompentencyStandardController extends Controller
{
    // public function kompetensistandar(){
    //     return view('kompetensistandar');
    // }
    public function showkomp(){
        $data['competencyStandard'] = CompentencyStandard::orderby('unit_title', 'desc')->get();
        $data['total'] = CompentencyStandard::count();

        return view('kompetensistandar', $data);
    }
    public function createkomp(){
        $majors = Major::all();
        $assessors = Assessor::all();
        return view('komps-create',compact('majors','assessors'));
    }
    public function addkomp(Request $request){
        // $validateData = $request->validate([
        //     'unit_code' => ['required'],
        //     'unit_title' => ['required'],
        //     'unit_description' => ['required'],
        //     'major_id' => ['required'],
        //     'assessor_id' => ['required'],
        // ]);
        CompentencyStandard::create([
            'unit_code' => $request->unit_code,
            'unit_title' =>$request->unit_title,
            'unit_description' =>$request->unit_description,
            'major_id' => $request->major_id,
            'assessor_id' => $request->assessor_id,
        ]);
        // dd($request->all());
        return redirect('/kompetensistandar');
    }

    public function editkomp(Request $request){
        $data['compentencyStandard'] = CompentencyStandard::find($request->id);
        return view('komps-update', $data);
    }
    public function updatekomp(Request $request){
        $update = CompentencyStandard::where('id', $request->id)->update([
            'unit_code' => $request-> unit_code,
            'unit_title' => $request->unit_title,
            'unit_description' => $request->unit_description,
            'major_id' => $request->major_id,
            'assessor_id' => $request->assessor_id,
        ]);
        return redirect('kompetensistandar');
    }
    public function deletekomp(Request $request){
        $competencystandar = CompentencyStandard::find($request->id);
        $delet = CompentencyStandard::where('id', $request->id)->delete();
        return redirect('/kompetensistandar');
    }

}
