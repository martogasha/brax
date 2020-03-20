<?php

namespace App\Http\Controllers;

use App\FrontPagePicture;
use Illuminate\Http\Request;

class frontpagePicturesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request)
    {
        $pictures = new FrontPagePicture();
        $pictures->desc = $request->input('desc');
        $pictures->size = $request->input('size');
        $pictures->quantity = $request->input('quantity');
        $pictures->price = $request->input('price');

        $pictures->user_id = auth()->user()->id;
        $pictures->product_id = $request->input('product_type');

        $pictures->vendor = $request->input('vendor');

        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename = time() . '.' . $extension;
        $file->move('uploads/employee/', $filename);
        $pictures->image = $filename;

        $file1 = $request->file('image1');
        $extension1 = $file1->getClientOriginalName();
        $filename1 = time() . '.' . $extension1;
        $file1->move('uploads/employee/', $filename1);
        $pictures->image1 = $filename1;

        $file2 = $request->file('image2');
        $extension2 = $file2->getClientOriginalName();
        $filename2 = time() . '.' . $extension2;
        $file2->move('uploads/employee/', $filename2);
        $pictures->image2 = $filename2;

        $file3 = $request->file('image3');
        $extension3 = $file3->getClientOriginalName();
        $filename3 = time() . '.' . $extension3;
        $file3->move('uploads/employee/', $filename3);
        $pictures->image3 = $filename3;



        $pictures->save();

        return redirect()->back()->with('success','Product Added Successfully');
    }
}
