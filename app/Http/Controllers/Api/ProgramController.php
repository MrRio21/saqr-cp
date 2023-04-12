<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $program = Program::all();
        return response()->json(['data'=>$program ,'status'=>200]);

    }


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
 

        return response()->json(['data'=>$program ,'status'=>200]);
    }

    /**
     * Display the specified resource.
     */
     public function show($ID)
    {
        $program = Program::find($ID);

        return  response()->json([
            'slide'=>$program
        ]);
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

        return response()->json(['data'=>$program ,'status'=>200]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        Program::find($id)->delete();
        return back();
    }
}
