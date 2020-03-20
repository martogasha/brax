@include('adminPartials._header')

<table class="table">
    <caption>List of Orders</caption>
    <thead>
    <tr>
        <th scope="col">Customer Name</th>
        <th scope="col">Order Id</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
    @foreach($getOrders as $getOrder)
    <tr>
        <td><a href="{{url('adminAvailableOrder',$getOrder->user_id)}}" ><button class="btn btn-info">{{$getOrder->user->first}} {{$getOrder->user->last}}</button></a></td>
        <td># {{$getOrder->id}}</td>
        <td><a href=""><button class="btn btn-success">Complete order</button></a>  <a href=""><button class="btn btn-danger">Cancel order</button></a></td>
    </tr>
        @endforeach

    </tbody>
</table>
@include('adminPartials._footer')
