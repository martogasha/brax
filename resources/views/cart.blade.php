@include('partialsOne._header')
@include('flash-message')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area mt-60">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)


                                    <tr>
                                        <form action="{{url('cartDelete/'. $cart->id)}}" method="POST" id="deleteCartForm">
                                            @csrf
                                        <td class="product_remove"><a href="javascript:document.getElementById('deleteCartForm').submit();"><i class="fa fa-trash-o"></i></a></td>
                                        </form>
                                    <td class="product_thumb"><a href="#"><img src="{{asset('uploads/employee/'. $cart->picture->image)}}" alt="" style="width: 40px;left: 40px"></a></td>
                                    <td class="product_name"><a href="#">{{$cart->picture->desc}}</a></td>
                                    <td class="product-price">Ksh:{{$cart->picture->price}}</td>
                                    <td class="product_quantity"><label></label> <input min="1" max="100" value="{{$cart->quantity}}" type="number"></td>
                                    <td class="product_total">Ksh: {{$cart->picture->price}}</td>


                                </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">Ksh: {{$sum}}</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Delivery Fee (Outskirts of Nairobi)</p>
                                    <p class="cart_amount"><span></span>Free</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">Ksh: {{$sum}}</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="{{url('checkout')}}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
    </div>
</div>

<!--shopping cart area end -->
@include('Partials._footer')

