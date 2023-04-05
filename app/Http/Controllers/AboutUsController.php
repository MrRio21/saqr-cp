<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        $about = AboutUs::find(1);
        return view('admin.about',['about'=>$about]);
    }


    public function create()
    {
        return view('admin.addTeamWork');
    }

    public function store(Request $request)
    {
        $request->validate([
            'about'=>'required'
        ]);
        $about = AboutUs::create([
            'about'=>$request['about']
        ]);
        return 'about';
    }


    public function edit(AboutUs $aboutUs)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // dd($id);
        $editAbout = AboutUs::find($id);
        $editAbout->about = $request->input('about');
        // dd($editAbout);
        $editAbout->save();
        $about = AboutUs::all();
        Alert::success('تم التعديل');

        return back();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
