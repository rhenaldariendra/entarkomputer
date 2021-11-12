<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(request $request)
    {
        $user = User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return "Name or Password Not Match";
        }else{
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
