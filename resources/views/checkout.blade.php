@include('partialsOne._header')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->



<!--Checkout page section-->
<div class="Checkout_section mt-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="user-actions">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Returning customer?
                        <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>

                    </h3>
                    <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                        <div class="checkout_info">
                            <form action="#">
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-6 mb-20">
                                <label>First Name <span>*</span></label>
                                <input type="text" value="{{auth()->user()->first}}">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Last Name  <span>*</span></label>
                                <input type="text" value="{{auth()->user()->last}}">
                            </div>
                            <div class="col-12 mb-20">
                                <label for="country">country <span>*</span></label>
                                <input type="text" value="{{auth()->user()->address}}">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Phone<span>*</span></label>
                                <input type="text" value="{{auth()->user()->phone}}">

                            </div>
                            <div class="col-12 mb-20">
                                <label> Email Address<span>*</span></label>
                                <input type="text" value="{{auth()->user()->email}}">

                            </div>
                            <div class="col-12 mb-20">
                                <input id="address" type="checkbox" data-target="createp_account" />
                                <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                    <div class="row">
                                        <div class="col-lg-6 mb-20">
                                            <label>First Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Last Name  <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="select_form_select">
                                                <label for="countru_name">country <span>*</span></label>
                                                <select class="niceselect_option" name="cuntry" id="countru_name">
                                                    <option value="2">bangladesh</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">Afghanistan</option>
                                                    <option value="5">Ghana</option>
                                                    <option value="6">Albania</option>
                                                    <option value="7">Bahrain</option>
                                                    <option value="8">Colombia</option>
                                                    <option value="9">Dominican Republic</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Street address  <span>*</span></label>
                                            <input placeholder="House number and street name" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Town / City <span>*</span></label>
                                            <input  type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>State / County <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone<span>*</span></label>
                                            <input type="text">

                                        </div>
                                        <div class="col-lg-6">
                                            <label> Email Address   <span>*</span></label>
                                            <input type="text">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="{{url('confirm')}}" method="post">
                        @csrf
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($checkouts as $checkout)
                                <tr>
                                    <td> {{$checkout->cart->picture->desc}} <strong> × {{$checkout->cart->quantity}}</strong></td>
                                    <td>Ksh: {{$checkout->cart->picture->price}}</td>
                                </tr>
                                    <input type="hidden" value="{{$checkout->picture->id}}" name="getPicId">
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td>Ksh: {{$sum}}</td>
                                </tr>
                                <tr>
                                    <th>Shipping (Outskirts of Nairobi)</th>
                                    <td><strong>Free</strong></td>
                                </tr>
                                <tr class="order_total">
                                    <th>Order Total</th>
                                    <td><strong>Ksh: {{$sum}}</strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment_method">
                            <div class="panel-default">
                                <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Create an account?</label>

                                <div id="method" class="collapse one" data-parent="#accordion">
                                    <div class="card-body1">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-default">
                                <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                    <div class="card-body1">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="order_button">
                                <button type="submit">Place Order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout page section end-->
@include('Partials._footer')
