<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdmissionRequirements;
use Illuminate\Http\Request;

class AdmissionRequirementsController extends Controller
{

    public function index()
    {
        $admissionRequirements = AdmissionRequirements::all();
        return response()->json(['data'=>$admissionRequirements,'status'=>200]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'requirement'=>['required','max:255']
        ]);

        AdmissionRequirements ::create([
            'requirement'=>$request['requirement']
        ]);

        $requirement = AdmissionRequirements::all();

        return response()->json(['data'=>$requirement,'status'=>200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


     public function updated(Request $request, $id)
    {
        // dd($id);
        $updateRequirements = AdmissionRequirements::find($id);
        $updateRequirements->requirement = $request->input('requirement');
        $updateRequirements->save();
        // dd($updateProgram);
        $admissionRequirements = AdmissionRequirements::all();
        return view('admin.admissionRequirements',['admissionRequirements'=>$admissionRequirements]);
        // return redirect(route('program',['updateProgram'=>$updateProgram]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        AdmissionRequirements::find($id)->delete();
        return back();
    }
}
