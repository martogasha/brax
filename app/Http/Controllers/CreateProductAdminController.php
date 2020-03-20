<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProductAdminController extends Controller
{
    public function index(){
        return view('admin.adminCreateProduct');
    }
}
