<?php

namespace App\Http\Controllers;

use App\AvailableOrder;
use Illuminate\Http\Request;

class SellerAvailableOrderController extends Controller
{
    public function index(){
        $availableOrders = AvailableOrder::where('seller_id',auth()->user()->id)->get();
        return view('vendor.availableOrders',[
            'availableOrders'=>$availableOrders
        ]);
    }
}
