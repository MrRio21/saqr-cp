<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookTrip;
use App\Models\Contact;
use Illuminate\Http\Request;

class BookTripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookTrip = BookTrip ::all();
        return view('admin.bookTrip',['bookTrip'=>$bookTrip]);
    }
    public function indexContact()
    {
        $contact = Contact ::all();
        return view('admin.contact',['contact'=>$contact]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeBookTrip(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);

        $bookTrip=BookTrip::create([
            'name'=> $request['name'],
            'email'=> $request['email'],
            'phone'=> $request['phone'],
            'date'=> $request['date'],
        ]);

        return response()->json([
            'bookTrip'=>$bookTrip,
            'message'=>'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function contact(Request $request)
    {
        $request->validate([
            'f_name'=>'required',
            // 'l_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'topic'=>'required',
            'message'=>'required',
        ]);

        $contact = Contact::create([
            'f_name'=>$request['f_name'],
            'l_name'=>$request['l_name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'topic'=>$request['topic'],
            'message'=>$request['message'],
        ]);
        return response()->json([
            'contact'=>$contact ,
            'message'=>'success'
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookTrip $bookTrip)
    {
        //
    }

       public function destroy($id){
        BookTrip::find($id)->delete();
        return back();
    }
       public function deleteContact($id){
        Contact::find($id)->delete();
        return back();
    }
}
