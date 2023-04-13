<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexImages()
    {
        $image=Image::all();
        return view('admin.image',['image'=>$image]);
    }
    public function indexVideos()
    {
        $video=Video::all();
        return view('admin.video',['video'=>$video]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeImage(Request $request)
    {
        $request->validate([

            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $img=md5(microtime()).$request->image->getClientOriginalName();
        $request->image->storeAs("public/imgs",$img);
        Image::create([
            'image'=>$img
        ]);
        Alert::success('تم اضافة صورة ');
        return back();

    }

    public function storeVideo(Request $request)
    {
        $request->validate([
        'video' => 'required|mimetypes:video/mp4,video/quicktime|max:100000',
    ]);

    // Store the video file in the database
    if ($request->hasFile('video') && $request->file('video')->isValid()) {
        $video=md5(microtime()).$request->video->getClientOriginalName();
        $request->video->storeAs("public/imgs",$video);
        Video::create([
        'video'=>$video
        ]);
    }
    // dd($video);

    // $video->save();
        Alert::success('تم اضافة فيديو ');
        return back();
    }

public function destroyImage($id){
        Image::find($id)->delete();
        return redirect()->back();
    }


    public function destroyVideo($id)
    {
        Video::find($id)->delete();
        return redirect()->back();
    }
}
