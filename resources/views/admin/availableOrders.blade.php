@include('adminPartials._header')

<div class="container clearfix">
    <h1 id="logo" style="background: cornflowerblue">
        Seller Available Orders
    </h1>
</div>
@foreach($availableOrders as $availableOrder)
<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
    <img src="{{asset('uploads/employee/'.$availableOrder->picture->image)}}" class="img-rounded" alt="Cinque Terre" style="height:200px;width:200px">
    <p class="text-success"><b>Name</b>: {{$availableOrder->picture->desc}}</p>
    <p class="text-success"><b>Size</b>: {{$availableOrder->picture->size}}</p>
    <p class="text-success"><b>Quantity</b>: {{$availableOrder->picture->quantity}}</p>
    <p class="text-success"><b>Price</b>: {{$availableOrder->picture->price}}</p>
    <p class="text-success"><b>Customer</b>: {{$availableOrder->user->first}} {{$availableOrder->user->last}}</p>
    <p class="text-success"><b>Customer Phone</b>: {{$availableOrder->user->phone}}</p>
    <p class="text-success"><b>Customer Address</b>: {{$availableOrder->user->address}}</p>
    <p class="text-success"><b>Seller</b>: {{$availableOrder->seller->first}} {{$availableOrder->seller->last}}</p>
    <p class="text-success"><b>Seller Phone</b>: {{$availableOrder->seller->phone}}</p>
    <form action="{{route('deleteOrder')}}" method="post">
        @csrf
        <input type="hidden" name="orderId" value="{{$availableOrder->id}}">
        <input type="hidden" name="userId" value="{{$availableOrder->user_id}}">
        <input type="hidden" name="pictureId" value="{{$availableOrder->picture_id}}">
        <button class="btn btn-success" type="submit">Complete Order</button>
    </form>
    <br>
    <form action="{{url('returnOrder')}}" method="post">
        @csrf
        <input type="hidden" id="getPictureId" name="getPicId" value="{{$availableOrder->picture_id}}">
        <button class="btn btn-danger">Cancel Order</button>
    </form>
</div>



@endforeach




<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>



@include('adminPartials._footer')
