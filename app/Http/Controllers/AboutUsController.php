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
        $about = AboutUs::get()->first();
        // dd($about);
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
        $request->validate([
            'about'=>'required'
        ]);

        if($id != 0){
            $editAbout = AboutUs::find($id);
            $editAbout->about = $request->input('about');
            $editAbout->save();
            // return $editAbout;
        }
        else{
            $editAbout = AboutUs::create([
                'about'=>$request['about']
            ]);
            // return $editAbout;
        }
        // dd($editAbout);
        Alert::success('تم التعديل');

        return view('admin.about',['about'=>$editAbout]);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
