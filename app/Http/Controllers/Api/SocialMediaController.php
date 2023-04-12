<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    //

    public function index()
    {
        $socialMedia = SocialMedia::get()->first();
        // dd($about);
        return response()->json(['data'=>$socialMedia,'status'=>200]);
    }


  

    public function store(Request $request)
    {
        $request->validate([
            'phone'=>'required',
            'email'=>'required',
            'location'=>'required',
            'instagram'=>'required',
            'facebook'=>'required',
            'snap'=>'required',
            'twitter'=>'required',
        ]);
        $socialMedia = SocialMedia::create([
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'location'=>$request['location'],
            'instagram'=>$request['instagram'],
            'facebook'=>$request['facebook'],
            'snap'=>$request['snap'],
            'twitter'=>$request['twitter']
        ]);
        return 'about';
    }


    public function edit(SocialMedia $aboutUs)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'phone'=>'required',
            'email'=>'required',
            'location'=>'required',
            'instagram'=>'required',
            'facebook'=>'required',
            'snap'=>'required',
            'twitter'=>'required',
        ]);

        if($id != 0){
            $editSocial = SocialMedia::find($id);
            $editSocial->phone = $request->input('phone');
            $editSocial->email = $request->input('email');
            $editSocial->location = $request->input('location');
            $editSocial->instagram = $request->input('instagram');
            $editSocial->facebook = $request->input('facebook');
            $editSocial->snap = $request->input('snap');
            $editSocial->twitter = $request->input('twitter');
            $editSocial->save();
            
        }
        else{
             $editSocial = SocialMedia::create([
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'location'=>$request['location'],
            'instagram'=>$request['instagram'],
            'facebook'=>$request['facebook'],
            'snap'=>$request['snap'],
            'twitter'=>$request['twitter']
        ]);
            // return $editAbout;
        }
        // dd($editAbout);

        return response()->json(['data'=>$editSocial,'status'=>200]);


    }

 
}
