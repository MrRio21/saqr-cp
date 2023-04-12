<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Models\SlideItem;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    //

    public function index()
    {
        $slide=Slide::all();
        return response()->json(['data'=>$slide,'status'=>200]);
    }



   public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => ['required','string','min:4'],
        'heading' => ['required','string','min:4'],
        'description' =>['required','string','min:4'],
        'items.*' => 'required',
    ]);

    // Create a new slide in the "slides" table
    $slide = Slide::create([
        'title' => $validatedData['title'],
        'heading' => $validatedData['heading'],
        'description' => $validatedData['description'],
    ]);

    // Create new slide items in the "slide_items" table
    foreach ($validatedData['items'] as $item) {
        SlideItem::create([
            'item' => $item,
            'slide_id' => $slide->id,
        ]);
    }
    $slide = Slide ::all();
    

        return response()->json(['data'=>$slide,'status'=>200]);
}

    /**
     * Display the specified resource.
     */
    //  public function show($slideID)
    // {
    //     $slide = Slide::find($slideID);

    //    $slideItem= SlideItem::where('slide_id',$slideID);
    //     return  response()->json([
    //         'slide'=>$slide ,
    //         'slide item' => $slideItem
    //     ]);
    // }

 public function show( $id)
    {
        $slide = Slide::find($id);
        
        if (!$slide) {
            return response()->json(['message' => 'Slide not found'], 404);
        }
        
        $slideItems = SlideItem::where('slide_id', $slide->id)->get();
        $response = [
            'slide' => [
                'id' => $slide->id,
                'heading' => $slide->heading,
                'title' => $slide->title,
                'description' => $slide->description,
            ],
            'slideItems' => $slideItems->toArray(),
        ];
        
        return response()->json(['data'=>$response]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $deleteSLide = Slide::find($id)->delete();
        if($deleteSLide){
            SlideItem ::where('slide_id',$id)->delete();
        }
        return back();
    }
}

