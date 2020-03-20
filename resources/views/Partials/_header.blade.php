<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/pallas-preview/pallas/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2020 11:11:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Braxlan - Online Shopping</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/fav .png')}}">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css    ')}}">

</head>

<body>
<header class="header_area">
@include('flash-message')
    <div class="header_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="categories_menu categori_two">
                        <div class="categories_title">
                            <h2 class="categori_toggle">Categories</h2>
                        </div>
                        <form action="{{url('search')}}" method="post">
                            @csrf
                        <div class="categories_menu_toggle">
                            <ul>
                                <li class="menu_item_children categorie_list"><a href="#"><span><i class="zmdi zmdi-desktop-mac"></i></span> Men Wear <i class=""></i></a>
                                </li>
                                <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-image"></i></span>  Women Wear <i class=""></i></a>
                                </li>
                                <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-camera"></i></span> Men Shoes <i class=""></i></a>
                                </li>
                                <li class="menu_item_children"><a href="#"><span><i class="zmdi zmdi-dribbble"></i></span> Women Shoes <i class=""></i></a>
                                </li>
                                <li><a href="#"><span><i class="zmdi zmdi-tv"></i></span>Jackets</a></li>
                                <li><a href="#"><span><i class="zmdi zmdi-tv-list"></i></span> Tshirts</a></li>
                                <li><a href="#"><span><i class="zmdi zmdi-cake"></i></span> Sweaters</a></li>
                                <li><a href="#"><span><i class="zmdi zmdi-memory"></i></span> Slippers</a></li>
                                <li><a href="#"><span><i class="zmdi zmdi-case-download"></i></span> Children Store</a></li>
                                <li id="cat_toggle" class="has-sub"><a href="#"> Bags</a>
                                </li>
                            </ul>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main_menu menu_two header_position">
                        <nav>
                            <ul>
                                <li><a href="about.html"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

</header>
<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <span>MENU</span>
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="welcome_text">
                        <p>Welcome to <span>Fashion Store</span> </p>
                    </div>

                    <div class="top_right">
                        <ul>
                            <li class="currency"><a href="#"><i class="fa fa-dollar"></i> Kenya Shillings</a>
                            </li>
                            <li class="language"><a href="#"><i class="zmdi zmdi-dribbble"></i> English</a>
                            </li>
                            @if(auth()->check())
                            <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> {{auth()->user()->first}} {{auth()->user()->last}} <i class="zmdi zmdi-caret-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="{{url('myAccount')}}">My Account </a></li>
                                    <li><a href="{{url('cart')}}">Shopping Cart</a></li>
                                    <li><a href="{{url('checkout')}}">Checkout </a></li>
                                </ul>
                            </li>
                                @else
                                <li class="language"><a href="{{url('register')}}"><button CLASS="btn btn-danger">Register</button></a>
                                </li>
                                <li class="language"><a href="{{'login'}}"><button CLASS="btn btn-danger">Login</button></a>
                                </li>
                                @endif


                        </ul>
                    </div>
                    <div class="search-container">
                        <form action="{{url('search')}}" method="post">
                            @csrf
                            <div class="hover_category">
                                <select class="select_option" name="select" id="categori2">
                                    <option selected value="1">All Categories</option>
                                    <option value="2">Accessories</option>
                                    <option value="3">Accessories & More</option>
                                    <option value="4">Butters & Eggs</option>
                                    <option value="5">Camera & Video </option>
                                    <option value="6">Mornitors</option>
                                    <option value="7">Tablets</option>
                                    <option value="8">Laptops</option>
                                    <option value="9">Handbags</option>
                                    <option value="10">Headphone & Speaker</option>
                                    <option value="11">Herbs & botanicals</option>
                                    <option value="12">Vegetables</option>
                                    <option value="13">Shop</option>
                                    <option value="14">Laptops & Desktops</option>
                                    <option value="15">Watchs</option>
                                    <option value="16">Electronic</option>
                                </select>
                            </div>
                            <div class="search_box">
                                <input placeholder="Search product..." type="text">
                                <button type="submit"><i class="zmdi zmdi-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="mini_cart_wrapper">

                        @if(auth()->check())
                            @if(\App\Cart::where('user_id',auth()->user()->id)->count() >1)
                                <a href="{{url('cart')}}"><i class="zmdi zmdi-shopping-basket"></i> <span><b>{{\App\Cart::where('user_id',auth()->user()->id)->count()}}</b> items</span> </a>
                            @else
                                <a href="{{url('cart')}}"><i class="zmdi zmdi-shopping-basket"></i> <span><b>{{\App\Cart::where('user_id',auth()->user()->id)->count()}}</b> items</span> </a>
                        @endif
                    @endif
                        <!--mini cart-->
                        <!--mini cart end-->
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="{{url('about')}}">about Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="Offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> braxlanshop@gmail.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

