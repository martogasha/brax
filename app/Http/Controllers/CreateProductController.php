<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function index(){

        $products = ProductType::all();
        return view('vendor.createProduct',[
            'products'=>$products

        ]);
    }
}
