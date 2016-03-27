@extends('pages.template2')

@section('main')
<div class="container">
    <div class="row">
        <table class="table-striped">
            <thead>
                <tr>
                     <th>Vin Number</th>
                     <th>Car Name</th>
                    <th>Make Year</th>
                    <th>Price</th>
                    <th>Milleage</th>
                    <th>Vehicle Type</th>
        <!--            <th>Description</th>-->
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                <tr>
                    <td >{{$car->vinnumber}}</td>
                    <td >{{$car->carmake}}</td>
                    <td>{{$car->caryear}}</td>
                    <td>{{$car->price}}</td>
                    <td>{{$car->milleage}}</td>
                    <td>{{$car->vehicletype}}</td>
       
                    <td><div class="main-checkout"><a href="{{url('/sameday/deletecar')}}/{{$car->id}}" class="btn">Delete</a> <a href="#" class="btn btn-checkout">Update</a></div></td>
                </tr>
                @endforeach
        </tbody>
      </table>
    </div>
</div>



@stop