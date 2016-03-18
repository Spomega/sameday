@extends('pages.template')

@section('head')
 {!! HTML::style('bootstrap/css/bootstrap.min.css')  !!}
 {!! HTML::style('font-awesome/css/font-awesome.min.css')  !!}
 
 
 
  {!! HTML::script('js/jquery-1.10.2.min.js') !!}
  {!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
   
@stop


@section('main')
<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="vinnumber">VIN NUMBER</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="vinnumber" id="vinnumber" placeholder="Enter Vin Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="carmake">MAKE/MODEL</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="carmake" id="carmake" placeholder="Enter Car Make or Model" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="caryear">MAKE YEAR</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="caryear" name="caryear" placeholder="Enter Car Make Year" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="price">PRICE</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="color">COLOR</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="color" name="color" placeholder="Enter Color" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="milleage">MILLEAGE</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="milleage" name="milleage" placeholder="Enter Car Milleage" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="vehicletype">VEHICLE TYPE</label>
                    <div class="input-group">
                        <textarea name="vehicletype" id="vehicletype" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="milleage">ENGINE TYPE</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="enginetype" name="enginetype" placeholder="Enter Engine Type" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="transmission">TRANMISSION</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="transmission" name="transmission" placeholder="Enter Transmission" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="transmission">FUEL ECONOMY</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="fuel" name="fuel" placeholder="Enter Fuel" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="transmission">DAMAGE</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="damage" name="damage" placeholder="Enter Damage" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
             <div class="col-lg-4 col-md-push-1">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="image">IMAGE 1</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image1" id="image1">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">IMAGE 2</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image2" id="image2">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">IMAGE 3</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image3" id="image3">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">IMAGE 4</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image4" id="image4">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                    <div class="form-group">
                    <label for="image">IMAGE 5</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image5" id="image4">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>
        </div>
        </form>
       
    </div>
</div>


@stop
