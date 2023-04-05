<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        $allUsers = User::all();
        // dd($allUsers);
        return view('admin.index',['allUsers'=>$allUsers]);
        // return view('admin.index');
    }

    public function login(){
        return view('admin.login');
    }
    public function x(){
        return view('admin.x');
    }

    public function store_login(Request $request){
        $request->validate([
                    'password'=>'required',
                    'email'=>'required',
                ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if (Auth::attempt($credentials)) {

            $usertype=Auth::user()->user_type;
            if($usertype=='1'){

                return redirect("admin");
            }
            else{
                return view('admin.login');
            }
        }
        else
        {
            return view('admin.login');
        }
}

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->back();
    }

}
