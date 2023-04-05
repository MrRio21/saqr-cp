<?php

namespace App\Http\Controllers\Api\Registeration;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    // public function index(){
    //     $allUsers = User::all();
    //     return view('admin.index',['allUsers'=>$allUsers]);
    // }
    public function show ($userId){
        $showUser = User::find($userId);
        return $showUser;
    }
    public function store(Request $request){
        $request->validate([
            'f_name' => ['required', 'string', 'min:4'],
            // 'l_name' => ['required', 'string', 'min:4'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string'],
        ]);
       $users= User::create([
            'f_name' => $request['f_name'] ,
            'l_name' => $request['l_name'] ,
            'email' => $request['email'],
            'password' =>  Hash::make($request['password']),
            'phone' => $request['phone'],

        ]);

    $createToken = $users->createToken($request->email)->plainTextToken;

        return response()->json([
                'users'=>$users, 'token'=>$createToken
            ]);
    }


    public function login(Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
    $createToken = $user->createToken($request->email)->plainTextToken;
    $userID = $user->tokens;
    return response()->json(['token'=> $createToken],201);
}


}
