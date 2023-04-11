<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialMedia = SocialMedia::get()->first();
        // dd($about);
        return view('admin.socialMedia',['socialMedia'=>$socialMedia]);
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
        Alert::success('تم التعديل');

        return view('admin.socialMedia',['socialMedia'=>$editSocial]);


    }

 
}
