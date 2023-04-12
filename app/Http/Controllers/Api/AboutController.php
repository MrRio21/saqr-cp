<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
     public function about()
    {
        $about = AboutUs::get()->first();
        // dd($about);
        return response()->json(['data'=>$about ,'status'=>200]);
    }

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

        return response()->json(['data'=>$editAbout ,'status'=>200]);


    }

}
