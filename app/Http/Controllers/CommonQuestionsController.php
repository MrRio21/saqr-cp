<?php

namespace App\Http\Controllers;

use App\Models\commonQuestions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CommonQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commonQuestions = commonQuestions::all();
        return view('admin.commonQuestions',['commonQuestions'=>$commonQuestions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.storeQuestion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question'=>'required|string',
            'answer'=>'required|string'
        ]);
        commonQuestions::create([
            'question'=>$request['question'],
            'answer'=>$request['answer']
        ]);
          $commonQuestions = commonQuestions::all();
            Alert::success('تهانينا', 'تم اضافة سؤال ');


        return redirect(route("commonQuestions"));

    }


    public function edit($id)
    {
          $editQuestion=commonQuestions::find($id);
        return view('admin.editQuestion', compact('editQuestion'));
    }

    /**
     * Update the specified resource in storage.
     */
        public function updated(Request $request, $id)
    {
        // dd($id);
        $updateQuestion = commonQuestions::find($id);
        $updateQuestion->question = $request->input('question');
        $updateQuestion->answer = $request->input('answer');
        $updateQuestion->save();
        // dd($updateProgram);
        $commonQuestions = commonQuestions::all();
            Alert::success('تهانينا', 'تم تعديل السؤال ');

        return view('admin.commonQuestions',['commonQuestions'=>$commonQuestions]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        commonQuestions::find($id)->delete();
        return back();
    }
}
