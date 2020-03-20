<?php

namespace App\Http\Controllers;

use App\AvailableOrder;
use App\CompleteOrder;
use App\FrontPagePicture;
use App\ManageOrders;
use Cassandra\Session;
use Illuminate\Http\Request;

class AdminAvailableOrderController extends Controller
{
    public function index($id){
        $getUserIds = AvailableOrder::where('user_id',$id)->get();

        foreach ($getUserIds as $getUserId){
            $getUser = $getUserId->user_id;
        }
        $availableOrders = AvailableOrder::where('user_id',$getUser)->get();
        return view('admin.availableOrders',[
            'availableOrders'=>$availableOrders
        ]);
    }
    public function table(){
        $getOrders = AvailableOrder::all()->unique('user_id');
        return view('admin.availableOrderTable',[
            'getOrders'=>$getOrders
        ]);
    }
    public function deleteOrder(Request $request){
        $moveAvailableOrders = AvailableOrder::where('user_id',$request->userId)->get()->toArray();
        foreach ($moveAvailableOrders as $moveAvailableOrder){
            CompleteOrder::insert($moveAvailableOrder);
        }
        $deleteAvailableOrder = AvailableOrder::where('picture_id',$request->pictureId)->delete();
        $deletePicture = ManageOrders::where('id',$request->pictureId)->delete();

        return redirect()->route('admin')->with('success','Order Successfully Delivered');
    }
    public function returnOrder(Request $request){
        $getPic = ManageOrders::where('id',$request->getPicId)->first();
        $front = new FrontPagePicture();
        $front->desc = $getPic->desc;
        $front->size = $getPic->size;
        $front->vendor = $getPic->vendor;
        $front->quantity = $getPic->quantity;
        $front->price = $getPic->price;
        $front->location = $getPic->location;
        $front->image = $getPic->image;
        $front->image1 = $getPic->image1;
        $front->image2 = $getPic->image2;
        $front->image3 = $getPic->image3;
        $front->user_id = $getPic->user_id;
        $front->product_id = $getPic->product_id;
        $front->save();

        $removeAvailableOrder = AvailableOrder::where('picture_id',$request->getPicId)->delete();
        return redirect()->route('admin')->with('success','Order Successfully Cancelled');




    }
}
