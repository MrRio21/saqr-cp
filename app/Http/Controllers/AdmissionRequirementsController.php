<?php

namespace App\Http\Controllers;

use App\Models\AdmissionRequirements;
use Illuminate\Http\Request;

class AdmissionRequirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissionRequirements = AdmissionRequirements::all();
        return view('admin.admissionRequirements',['admissionRequirements'=>$admissionRequirements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addRequirements');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'requirement'=>['required','max:255']
        ]);

        AdmissionRequirements ::create([
            'requirement'=>$request['requirement']
        ]);

        $requirement = AdmissionRequirements::all();

        return redirect(route("admissionRequirements"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        AdmissionRequirements::find($id)->delete();
        return back();
    }
}
