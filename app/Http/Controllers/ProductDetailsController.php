<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\FrontPagePicture;
use App\ProductType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index($id){
        $fronts = FrontPagePicture::all();
        $productDetail = FrontPagePicture::where('id',$id)->first();
        $productTypes = FrontPagePicture::where('product_id',$productDetail->product_id)->get();

        return view('productDetails',[
            'productDetail'=>$productDetail,
            'productTypes'=>$productTypes,
            'fronts'=>$fronts
        ]);
    }

    public function addCart(Request $request){
        if (auth()->check()){
            $getDetails = FrontpagePicture::find($request->picId);

            $cart = new Cart();
            $cart->picture_id = ($getDetails->id);
            $cart->quantity = $request->input('quantity');
            $cart->user_id = auth()->user()->id;
            $cart->save();;


            $checkout = new Checkout();
            $cartIds = Cart::where('picture_id',$getDetails->id)->get();
            foreach ($cartIds as $cartId)
                $checkout->cart_id = ($cartId->id);


            $checkout->user_id = auth()->user()->id;
            $checkout->seller_id = $cartId->picture->user_id;

            $checkout->picture_id = $cartId->picture_id;
            $checkout->picture_desc = $cartId->picture->desc;
            $checkout->picture_price = $cartId->picture->price;
            $checkout->picture_size = $cartId->picture->size;
            $checkout->picture_quantity = $cartId->picture->quantity;


            $checkout->save();

            return redirect(url('cart'))->with('success','Item Added to Cart Successfully');
        }
        else{
            return redirect(url('login'));

        }

    }
}
