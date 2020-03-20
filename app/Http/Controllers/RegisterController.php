<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){

        $checkEmail = User::where('email',$request->email)->orWhere('phone',$request->phone)->first();
        if (!is_null($checkEmail)){
            if ($checkEmail->email == $request->email){
                return redirect()->back()->with('error','Email already used');
            }
            elseif($checkEmail->phone == $request->phone){

                return redirect()->back()->with('error','Phone already used');
            }
        }

        $register = new User();
        $register->first = $request->input('first');
        $register->last = $request->input('last');
        $register->phone = $request->input('phone');
        $register->email = $request->input('email');
        $register->address = $request->input('address');
        $register->role = $request->input('role');
        $register->password = Hash::make($request->input('password'));
        $register->save();





        return view('auth.login')->with('success','Registered Successfully, Please Login');


    }


}
