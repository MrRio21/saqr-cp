<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        
        $allUsers =User::where('user_type', 0)->get();
        // dd($allUsers);
        $count = User::count();

        return view('admin.index',['allUsers'=>$allUsers] , compact('count'));
        // return view('admin.index');
    }
    public function admin(){

        $admin =User::where('user_type', 1)->get();

        return view('admin.admin',['admin'=>$admin]);
        // return view('admin.index');
    }

    public function create(){
        return view('admin.storeAdmin');
    }

   public function storeAdmin(Request $request){
        $request->validate([
            'f_name' => ['required', 'string', 'min:4'],
            // 'l_name' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string'],
        ]);
        User::create([
            'f_name' => $request['f_name'] ,
            'l_name' => $request['l_name'] ,
            'email' => $request['email'],
            'password' =>  Hash::make($request['password']),
            'phone' => $request['phone'],
            'user_type' =>1,
        ]);

        $admin=User::all();

        return view('admin.admin',['admin'=>$admin]);
        
    }

    public function login(){
        return view('admin.login');
    }
     function logout() {
        auth()->logout();
        return view('admin.login');
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
