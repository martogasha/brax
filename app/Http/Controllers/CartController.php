<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\FrontPagePicture;
use Hamcrest\Core\IsNull;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(){
        $continueShoppings = FrontPagePicture::all();
        $carts = Cart::all();
        if (auth()->check()) {
            $getTotals = Cart::where('user_id', auth()->user()->id)->get();

            $sum = 0;
            foreach ($getTotals as $getTotal) {
                $total = $getTotal->picture->price;
                $sum += $total;

            }

            return view('cart', [
                'carts' => $carts,
                'sum' => $sum,
                'continueShoppings' => $continueShoppings
            ]);
        }
        else{
            return redirect(url('login'));
        }
    }
    public function cartDelete($id){
        $findCartID = Checkout::where('cart_id',$id)->delete();
        $cartDelete = Cart::find($id);

        $cartDelete->delete();

        $maxs = Cart::all();
        if ($maxs->count()==0){
            return redirect()->route('category');
        }
        else{
            return redirect()->back()->with('success','Item Removed from cart Successfully');
        }

    }
    public function cartCount(){
        $maxs = Cart::all();
        foreach ($maxs as $max){
            $userId = ($max->picture->user_id);

            $cartCount = Cart::where($userId,auth()->user()->id)->count();
        }
        dd($cartCount);
    }
}
