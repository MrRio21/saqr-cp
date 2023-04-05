<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','string','min:4','max:255'],
            'heading'=>['required','string','min:4','max:255'],
            'description'=>['required','string','min:4'],
        ]);
        Slide::create([
            'title'=>$request['title'],
            'heading'=>$request['heading'],
            'description'=>$request['description'],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slide $slides)
    {
        //
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
    public function destroy(Slide $slides)
    {
        //
    }
}
