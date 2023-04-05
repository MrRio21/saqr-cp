<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = Program::all();
        return view('admin.program',['program'=>$program]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addProgram');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','string','min:4','max:255'],
            'description'=>['required','string','min:10']
        ]);
        $program = Program::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
        ]);
        // dd($program);
        // return 'f';
        return redirect(route("program",['program'=>$program]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $programs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editProgram = Program::find($id);
        return view('admin.editProgram', compact('editProgram'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function updated(Request $request, $id)
    {
        // dd($id);
        $updateProgram = Program::find($id);
        $updateProgram->title = $request->input('title');
        $updateProgram->description = $request->input('description');
        $updateProgram->save();
        // dd($updateProgram);
        $program = Program::all();
        return view('admin.program',['program'=>$program]);
        // return redirect(route('program',['updateProgram'=>$updateProgram]));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        Program::find($id)->delete();
        return back();
    }
}
