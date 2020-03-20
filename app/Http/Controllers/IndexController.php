<?php

namespace App\Http\Controllers;

use App\FrontPagePicture;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $fronts = FrontPagePicture::all();

        return view('index',[
            'fronts'=>$fronts
        ]);
    }
}
