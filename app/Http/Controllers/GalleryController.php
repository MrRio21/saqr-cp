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

            // 'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $img=md5(microtime()).$request->image->getClientOriginalName();
        $request->image->storeAs("public/imgs",$img);
        Image::create([
            'image'=>$img
        ]);
        $image = Image::all();
        Alert::success('تم اضافة صورة ');

        return view('admin.image',['image'=>$image]);

    }

    public function storeVideo(Request $request)
    {
        $request->validate([

        'video'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $vid=md5(microtime()).$request->video->getClientOriginalName();
        $request->image->storeAs("public/imgs",$vid);
        Image::create([
            'video'=>$vid
        ]);
        $video = Video::all();
        Alert::success('تم اضافة فيديو ');

        return view('admin.video',['video'=>$video]);
    }

public function destroyImage($id){
        Image::find($id)->delete();
        return redirect()->back();
    }


    public function destroyVideo(string $id)
    {
        Video::find($id)->delete();
        return redirect()->back();
    }
}
