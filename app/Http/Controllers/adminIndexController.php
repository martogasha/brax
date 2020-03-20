<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class adminIndexController extends Controller
{
    public function index(Request $request){
        if (auth()->check() && $request->user()->role == 1){
            return view('admin.index');

        }
        else{
            return view('authError');
        }
    }
    public function create(Request $request){
        $product = new ProductType();
        $product->name = $request->input('desc');
        $product->save();
        return redirect()->back()->with('success','Product Added Successfully');

    }
}
