<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Video;

class GalleryController extends Controller
{
    //

    public function indexImages()
    {
        $image=Image::all();
        return response(['data'=>$image ,'status'=>200]);
    }
    public function indexVideos()
    {
        $video=Video::all();
        return response(['data'=>$video ,'status'=>200]);
    }


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
        return back();

    }

    public function storeVideo(Request $request)
    {
        $request->validate([
        'video' => 'required|mimetypes:video/mp4,video/quicktime|max:100000',
    ]);

    $video = new Video;

    // Store the video file in the database
    if ($request->hasFile('video') && $request->file('video')->isValid()) {
    // dd($video);

        $videoFile = $request->file('video');
        $videoFileName = time() . '.' . $videoFile->getClientOriginalExtension();
        $videoFile->storeAs('public/videos', $videoFileName);
        $video->file_name = $videoFileName;
        $video->file_path = '/storage/videos/' . $videoFileName;
    }

    // dd($video);
    $video->save();
        // $video = Video::all();
        return back();
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
