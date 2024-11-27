<?php

namespace App\Http\Controllers;

use App\Models\CompentencyStandard;
use App\Models\CompetencyElement;
use Illuminate\Http\Request;

class CompetencyElementController extends Controller
{
    public function showkomple(){
        $competencyElements = CompetencyElement::with('competencyStandard')->orderBy('criteria', 'desc')->get();
        return view('kompetensielement', compact('competencyElements'));
    }
    public function createkomple(Request $request){
        $competencyStandards = CompentencyStandard::all();
        return view('komple-craete', compact('competencyStandards'));
    }
    public function addkomple(Request $request){
        $validateData = $request->validate([
            'criteria' => ['required'],
            'compentency_standard_id' => ['required'],
        ]);
        foreach ($request->criteria as $criteria){
            CompetencyElement::create([
                'criteria' => $criteria,
                'competency_id' => $request->compentency_standard_id,
            ]);
        }
        return redirect('/kompetensielement');
    }
    public function editkomple(Request $request){
        $competencyElement = CompetencyElement::find($request->id);
        $competencyStandards = CompentencyStandard::all();
        return view('komple-update', compact('competencyElement', 'competencyStandards'));
    }
    // public function updatekomple(Request $request){
    //     $validateData = $request->validate([
    //         'criteria' => ['required'],
    //         'compentency_standard_id' => ['required'],
    //     ]);
    //     $compentencyStandards = CompetencyElement::find($request->id);
    //     $compentencyStandards->update([
    //         'criteria' => $request->criteria,
    //         'competency_standard_id' => $request->competency_standard_id,

    //     ]);
    //     return redirect('/kompetensielement');
    // }
    // public function editelement($id)
    // {
    //     $element = Competency_element::findOrFail($id);
    //     $competencyStandards = Competency_standard::all();
    //     return view('element-update', compact('element', 'competencyStandards'));
    // }


    public function updatekomple(Request $request, $id){
        // $request->validate([
        //     'criteria' => 'required',
        //     'competency_id'=> 'required',
        // ]);
        $competencyElement = Competencyelement::findOrFail($request->id);
         $competencyElement->update([
            'criteria' => $request->criteria,
            'competency_id' => $request->competency_id,
        ]);
        return redirect('/kompetensielement');
    }
    public function deletekomple(Request $request){
        $competencyElements = CompetencyElement::find($request->id);
        $delete = CompetencyElement::where('id', $request->id)->delete();
        return redirect('/kompetensielement');
    }




}
