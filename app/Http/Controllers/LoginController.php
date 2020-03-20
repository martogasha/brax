<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,

        ])) {
            $user = User::where('email', $request->email)->first();

            if ($user->role == 1) {
                return redirect()->route('admin');

            } elseif ($user->role == 2) {
                return redirect()->route('millan');
            }

            else{
                return redirect(url('/'));
            }

        }
        else{
            return redirect(url('login'))->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
    public function loginOne(Request $request)
    {

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = User::where('email', $request->email)->first();

            if ($user->role == 1) {
                return redirect()->route('admin');

            } elseif ($user->role == 2) {
                return redirect()->route('millan');
            }

            else{
                return redirect(url('/'));
            }



        }
    }
}
