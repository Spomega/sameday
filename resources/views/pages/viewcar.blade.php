@extends('pages.template2')

@section('main')
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Cars Available </h3>
        </div>
        <div class="panel-body">
            <div id="shieldui-grid1" class="sui-grid sui-grid-core">
                <div class="sui-gridheader">
                    <table class="sui-table">
                        <colgroup><col style="width:170px"><col><col><col></colgroup>
                        <thead><tr class="sui-columnheader">
                                <th data-field="vin number" class="sui-headercell"><a href="#" class="sui-link">Vin Number</a></th>
                                <th data-field="car name" class="sui-headercell"><a href="#" class="sui-link">Car Name</a></th>
                                <th data-field="make year" class="sui-headercell"><a href="#" class="sui-link">Make Year</a></th>
                                <th data-field="price" class="sui-headercell"><a href="#" class="sui-link">Price</a></th>
                                <th data-field="milleage" class="sui-headercell"><a href="#" class="sui-link">Milleage</a></th>
                                <th data-field="vehicletype" class="sui-headercell"><a href="#" class="sui-link"></a>Vehicle Type</th>
                                <th data-field="action" class="sui-headercell"><a href="#" class="sui-link">Action</a></th>
                                <th data-field="action1" class="sui-headercell"><a href="#" class="sui-link">Action</a></th>
                            </tr>
                        </thead>
                        <tbody class="sui-hide">
                            <tr><td></td><td></td><td></td><td></td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="sui-gridcontent">
                    <table class="sui-table">
                        <colgroup>
                            <col style="width:170px">
                            <col><col><col>
                        </colgroup>
                        <tbody>
                              @foreach ($cars as $car)
                            <tr class="sui-row">
                                <td class="sui-cell">{{$car->vinnumber}}</td>
                                <td class="sui-cell">{{$car->carmake}}</td>
                                <td class="sui-cell">{{$car->caryear}}</td>
                                <td class="sui-cell">{{$car->price}}</td>
                                <td class="sui-cell">{{$car->milleage}}</td>
                                <td class="sui-cell">{{$car->vehicletype}}</td>
                                <td class="sui-cell"><a href="{{url('/sameday/deletecar')}}/{{$car->id}}" class="btn btn-primary btn-block ">Delete</a></td>
                                <td class="sui-cell"><a href="#" class="btn btn-primary btn-block">Update</a></td> 
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="container">
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
                    <th>Description</th>
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
</div>-->



@stop