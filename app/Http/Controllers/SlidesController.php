<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\SlideItem;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slide=Slide::all();
        return view('admin.slide',['slide'=>$slide]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.storeSlide');
    }

    /**
     * Store a newly created resource in storage.
     */

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

    Alert::success('تهانينا', 'تم اضافة عضو في  شرائح ^^');
    

    return view('admin.slide',['slide'=>$slide]);
}

    /**
     * Display the specified resource.
     */
    public function show(Slide $slides)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slides)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slide $slides)
    {
        //
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
