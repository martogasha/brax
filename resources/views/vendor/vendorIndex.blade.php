@include('vendorPartials._header')

    <section class='statis text-center'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="box bg-primary">
                        <i class="fa fa-eye"></i>
                        <h3>{{\App\AvailableOrder::where('seller_id',auth()->user()->id)->count()}}</h3>
                        <p class="lead">Available Orders</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box danger">
                        <i class="fa fa-user-o"></i>
                        <h3>{{\App\FrontPagePicture::where('user_id',auth()->user()->id)->count()}}</h3>
                        <p class="lead">My Products</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box warning">
                        <i class="fa fa-shopping-cart"></i>
                        <h3>5,154</h3>
                        <p class="lead">Completed sales</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box success">
                        <i class="fa fa-handshake-o"></i>
                        <h3>5,154</h3>
                        <p class="lead">Transactions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chrt3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="chart-container">
                        <canvas id="chart3" width="100%"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('vendorPartials._footer')

