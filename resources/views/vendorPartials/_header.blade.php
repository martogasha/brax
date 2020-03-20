<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<aside class="side-nav" id="show-side-navigation1">
    <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
    <div class="heading">
        <img src="{{asset('assets/img/default.jpeg')}}" alt="">
        <div class="info">
            <h3><a href="#">{{auth()->user()->first}} {{auth()->user()->last}}</a></h3>
            <p>Seller</p>
        </div>
    </div>
    <div class="search">
        <input type="text" placeholder="Type here"><i class="fa fa-search"></i>
    </div>
    <ul class="categories">
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="{{url('Seller')}}"> Dashboard</a></li>
        {{--        <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>--}}
        {{--            <ul class="side-nav-dropdown">--}}
        {{--                <li><a href="#">Lorem ipsum</a></li>--}}
        {{--                <li><a href="#">ipsum dolor</a></li>--}}
        {{--                <li><a href="#">dolor ipsum</a></li>--}}
        {{--                <li><a href="#">amet consectetur</a></li>--}}
        {{--                <li><a href="#">ipsum dolor sit</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        <li><i class="fa fa-comments-o fa-fw"></i><a href="{{url('createProduct')}}">Create Product</a></li>
        @if(\App\FrontPagePicture::where('user_id',auth()->user()->id)->count()==0)
            <li><i class="fa fa-laptop fa-fw"></i><a href="{{url('myProduct')}}"> My Products</a></li>
            @else
            <li><i class="fa fa-laptop fa-fw"></i><a href="{{url('myProduct')}}"> My Products <span class="num succ">{{\App\FrontPagePicture::where('user_id',auth()->user()->id)->count()}}</span></a></li>

        @endif
        @if(\App\AvailableOrder::where('seller_id',auth()->user()->id)->count()==0)
            <li><i class="fa fa-laptop fa-fw"></i><a href="{{url('sellerAvailableOrder')}}"> Available Orders</a></li>
            @else
            <li><i class="fa fa-laptop fa-fw"></i><a href="{{url('sellerAvailableOrder')}}"> Available Orders <span class="num succ">{{\App\AvailableOrder::where('seller_id',auth()->user()->id)->count()}}</span></a></li>

        @endif
        <li><i class="fa fa-laptop fa-fw"></i><a href="#"> Message <span class="num succ">0</span></a></li>

    </ul>
</aside>
<section id="contents">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-align-right"></i>
                </button>
                <a class="navbar-brand" href="#">Seller<span class="main-color">Dashboard</span></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                            <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
                            <li role="separator" class="divider"></li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <li><button type="submit"><i class="fa fa-sign-out"></i> Log out</button></li>

                            </form>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
                    <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
                    <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
