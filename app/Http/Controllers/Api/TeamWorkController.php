<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TeamWork;
use Illuminate\Http\Request;

class TeamWorkController extends Controller
{

    public function index()
    {
        $teamWork = TeamWork::all();
        return response()->json(['data'=>$teamWork,'status'=>200]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string','min:4','max:255'],
            'title'=>['required','string','max:255'],
            'flyingHour'=>['required','numeric'],
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $img=md5(microtime()).$request->image->getClientOriginalName();
        $request->image->storeAs("public/imgs",$img);
        TeamWork::create([
            'name'=>$request['name'],
            'title'=>$request['title'],
            'flyingHour'=>$request['flyingHour'],
            'image'=>$img,
        ]);
        $teamWork =TeamWork::all();


        return response()->json(['data'=>$teamWork,'status'=>200]);
        }

    /**
     * Display the specified resource.
     */
    public function show(TeamWork $teamWork)
    {
        //
    }



    public function destroy($id){
        TeamWork::find($id)->delete();
        return redirect()->back();
    }

}
