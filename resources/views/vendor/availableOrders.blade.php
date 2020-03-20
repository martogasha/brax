@include('vendorPartials._header')
    <div class="container clearfix">
        <h1 id="logo" style="background: cornflowerblue">
            Available Orders
        </h1>
    </div>
@foreach($availableOrders as $availableOrder)
<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
    <img src="{{asset('uploads/employee/'.$availableOrder->picture->image)}}" class="img-rounded" alt="Cinque Terre" style="height:200px;width:200px">
    <p class="text-success"><b>Name</b>: {{$availableOrder->picture->desc}}</p>
    <p class="text-success"><b>Size</b>: {{$availableOrder->picture->size}}</p>
    <p class="text-success"><b>Quantity</b>: {{$availableOrder->picture->quantity}}</p>
    <p class="text-success"><b>Price</b>: {{$availableOrder->picture->price}}</p>

</div>
@endforeach

@include('vendorPartials._footer')
