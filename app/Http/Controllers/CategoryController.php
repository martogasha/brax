<?php

namespace App\Http\Controllers;

use App\FrontPagePicture;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function index(){
        $cats = FrontPagePicture::where('id','>',1)->paginate(10);
        return view('category',[
            'cats'=>$cats
        ]);
    }

    public function search(Request $request){
        $search = $request->input('search');

        $cats = FrontPagePicture::where('desc','like',"%$search%")->paginate(10);
        return view('category',[
            'cats'=>$cats
        ]);
    }
}

