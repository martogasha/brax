@include('partialsOne._header')

<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li>product details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--product details start-->
<div class="product_details mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="{{asset('uploads/employee/'. $productDetail->image)}}" data-zoom-image="{{asset('uploads/employee/'. $productDetail->image)}}" alt="big-1">
                        </a>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('uploads/employee/'. $productDetail->image)}}" data-zoom-image="{{asset('uploads/employee/'. $productDetail->image)}}">
                                    <img src="{{asset('uploads/employee/'. $productDetail->image)}}" alt="zo-th-1"/>
                                </a>

                            </li>
                            <li >
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('uploads/employee/'. $productDetail->image1)}}" data-zoom-image="{{asset('uploads/employee/'. $productDetail->image1)}}">
                                    <img src="{{asset('uploads/employee/'. $productDetail->image1)}}" alt="zo-th-1"/>
                                </a>

                            </li>
                            <li >
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('uploads/employee/'. $productDetail->image2)}}" data-zoom-image="{{asset('uploads/employee/'. $productDetail->image2)}}">
                                    <img src="{{asset('uploads/employee/'. $productDetail->image2)}}" alt="zo-th-1"/>
                                </a>

                            </li>
                            <li >
                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('uploads/employee/'. $productDetail->image3)}}" data-zoom-image="{{asset('uploads/employee/'. $productDetail->image3)}}">
                                    <img src="{{asset('uploads/employee/'. $productDetail->image3)}}" alt="zo-th-1"/>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <form action="{{url('addCart')}}" method="post" id="cartForm">
                        @csrf
                        <h1>{{$productDetail->desc}}</h1>
                        <div class="product_nav">
                        </div>
                        <div class="product_rating">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="price_box">
                            <span class="current_price">Ksh: {{$productDetail->price}}</span>

                        </div>
                        <div class="product_desc">
                            <p>Size: <b>{{$productDetail->size}}</b></p>
                        </div>
                        <div class="product_variant color">
                            <h3>Available Options</h3>
                            <label>color</label>
                            <ul>
                                <li class="color1"><a href="#"></a></li>
                                <li class="color2"><a href="#"></a></li>
                                <li class="color3"><a href="#"></a></li>
                                <li class="color4"><a href="#"></a></li>
                            </ul>
                        </div>
                        <div class="product_variant quantity">
                            <label>quantity</label>
                            <input min="1" max="100" name="quantity" value="1" type="number">
                        </div>
                        <input type="hidden" name="picId" value="{{$productDetail->id}}">
                        <div class="action_links">
                            <ul>
                                <li class="add_to_cart"><a href="javascript:document.getElementById('cartForm').submit();" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                            </ul>
                        </div>
                        <div class="product_meta">
                            <span>Category: <a href="#">Clothing</a></span>
                        </div>

                    </form>
                    <div class="priduct_social">
                        <ul>
                            <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                            <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                            <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                            <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                            <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                        </ul>
                    </div>

                </div>
            </div>
                <div class="col-lg-6 col-md-6" style="width: 250px">
                    <div class="card">
                        <article class="card-group-item">
                            <header class="card-header"><h5 class="title"><b>FREE DELIVERY $ RETURN POLICY</b></h5></header>
                            <div class="filter-content">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item">Cash on Delivery <span class="float-right badge badge-light round"></span> </a>
                                    <a href="#" class="list-group-item">Pay for product after satisfaction  <span class="float-right badge badge-light round"></span>  </a>
                                    <a href="#" class="list-group-item">Confirm product specification before ordering <span class="float-right badge badge-light round"></span>  </a>
                                    <a href="#" class="list-group-item">Delivery should take less than 3hrs <span class="float-right badge badge-light round"></span>  </a>
                                </div>  <!-- list-group .// -->
                            </div>
                        </article> <!-- card-group-item.// -->
                    </div> <!-- card.// -->

                </div>
            </div>

        </div>
    </div>
</div>

<!--product details end-->

<!--product info start-->
<div class="product_d_info">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="sheet" role="tabpanel" >
                            <div class="product_d_table">
                                <form action="#">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="first_child">Waist</td>
                                            <td>44</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Height</td>
                                            <td>36</td>
                                        </tr>
                                        <tr>
                                            <td class="first_child">Width</td>
                                            <td>22</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->

<!--product area start-->
<section class="product_area related_products mb-47">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Related Products</h2>
                </div>
                <div class="product_carousel product_column4 owl-carousel">
                    @foreach($productTypes as $productType)
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="product-details.html"><img src="{{asset('uploads/employee/'.$productType->image)}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="quick_button">
                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_name">
                                <h3><a href="{{url('productDetails',$productType->id)}}">{{$productType->desc}}</a></h3>
                            </div>
                            <div class="product_rating">
                                <ul>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="current_price">Ksh: {{$productType->price}}</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--product area end-->

<!--product area start-->
{{--<section class="product_area upsell_products mb-50">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section_title">--}}
{{--                    <h2>upsell products</h2>--}}
{{--                </div>--}}
{{--                <div class="product_carousel product_column4 owl-carousel">--}}
{{--                    @foreach($fronts as $front)--}}
{{--                    <div class="single_product">--}}
{{--                        <div class="product_thumb">--}}
{{--                            <a href="product-details.html"><img src="{{asset('uploads/employee/'.$front->image)}}" alt=""></a>--}}
{{--                            <div class="label_product">--}}
{{--                                <span class="label_sale">sale</span>--}}
{{--                            </div>--}}
{{--                            <div class="quick_button">--}}
{{--                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product_content">--}}
{{--                            <div class="product_name">--}}
{{--                                <h3><a href="product-details.html">{{$front->desc}}</a></h3>--}}
{{--                            </div>--}}
{{--                            <div class="product_rating">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="price_box">--}}
{{--                                <span class="current_price">Ksh: {{$front->price}}</span>--}}
{{--                            </div>--}}
{{--                            <div class="action_links">--}}
{{--                                <ul>--}}
{{--                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>--}}
{{--                                    <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>--}}
{{--                                    <li class="compare"><a href="#" title="compare"><i class="zmdi zmdi-swap"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                        @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
<!--product area end-->
@include('Partials._footer')

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product37.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product24.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product25.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product22.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/productbig5.jpg" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Handbag feugiat</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price" >$78.99</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>size</h2>
                                        <select class="select_option">
                                            <option selected value="1">s</option>
                                            <option value="1">m</option>
                                            <option value="1">l</option>
                                            <option value="1">xl</option>
                                            <option value="1">xxl</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>color</h2>
                                        <select class="select_option">
                                            <option selected value="1">purple</option>
                                            <option value="1">violet</option>
                                            <option value="1">black</option>
                                            <option value="1">pink</option>
                                            <option value="1">orange</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1" type="number">
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal area end-->

<!-- JS
============================================ -->

