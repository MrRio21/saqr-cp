<?php

namespace App\Http\Controllers;

use App\Models\TeamWork;
use Illuminate\Auth\Events\Validated;
// use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeamWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamWork = TeamWork::all();
        return view('admin.teamWork',['teamWork'=>$teamWork]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addTeamWork');
    }

    /**
     * Store a newly created resource in storage.
     */
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

        Alert::success('تهانينا', 'تم اضافة عضو في فريق العمل ^^');

        return view('admin.teamWork',['teamWork'=>$teamWork]);
        }

    /**
     * Display the specified resource.
     */
    public function show(TeamWork $teamWork)
    {
        //
    }


    public function edit(TeamWork $teamWork)
    {
        //
    }

    public function update(Request $request, TeamWork $teamWork)
    {
        //
    }

    public function destroy($id){
        TeamWork::find($id)->delete();
        return redirect()->back();
    }

}
