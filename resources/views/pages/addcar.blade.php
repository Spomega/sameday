@extends('pages.template2')

@section('head')
 {!! HTML::style('bootstrap/css/bootstrap.min.css')  !!}
 {!! HTML::style('font-awesome/css/font-awesome.min.css')  !!}
 
 
 
  {!! HTML::script('js/jquery-1.10.2.min.js') !!}
  {!! HTML::script('bootstrap/js/bootstrap.min.js') !!}
   
@stop


@section('main')


<!--<form role="form"  >-->
{!!Form::open (array('url'=>'sameday/addcar','method'=>'post','files'=>'true') ) !!}
    <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="vinnumber">VIN NUMBER</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" name="vinnumber" id="vinnumber" placeholder="Enter Vin Number" required>-->
                          {!! Form::text('vinnumber',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Vin Number')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="carmake">MAKE/MODEL</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" name="carmake" id="carmake" placeholder="Enter Car Make or Model" required>-->
                          {!! Form::text('carmake',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Make or Model')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="caryear">MAKE YEAR</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" id="caryear" name="caryear" placeholder="Enter Car Make Year" required>-->
                         {!! Form::text('caryear',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Make Year')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="price">PRICE</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>-->
                         {!! Form::text('price',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Price')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="color">COLOR</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" id="color" name="color" placeholder="Enter Color" required>-->
                         {!! Form::text('color',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Color')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="milleage">MILLEAGE</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" id="milleage" name="milleage" placeholder="Enter Car Milleage" required>-->
                         {!! Form::text('milleage',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Milleage')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="vehicletype">VEHICLE TYPE</label>
                    <div class="input-group">
<!--                        <textarea name="vehicletype" id="vehicletype" class="form-control" rows="5" required></textarea>-->
                        {!! Form::textarea('vehicletype',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Milleage')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="milleage">ENGINE TYPE</label>
                    <div class="input-group">
                        {!! Form::text('enginetype',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Engine Type')) !!}
<!--                        <input type="text" class="form-control" id="enginetype" name="enginetype" placeholder="Enter Engine Type" required>-->
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="transmission">TRANMISSION</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" id="transmission" name="transmission" placeholder="Enter Transmission" required>-->
                        {!! Form::text('transmission',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Transmission')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fuel">FUEL ECONOMY</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" id="fuel" name="fuel" placeholder="Enter Fuel" required>-->
                        {!! Form::text('fuel',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Fuel')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="damage">DAMAGE</label>
                    <div class="input-group">
<!--                        <input type="text" class="form-control" id="damage" name="damage" placeholder="Enter Damage" required>-->
                        {!! Form::text('damage',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Damage')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
            
                   <label for="Status">Status</label>
                    <select class="form-control" name="category">
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                    <label></label>
            </div>
        </div>
               
        </div>
         <div class="col-lg-4 col-md-push-1">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="image">IMAGE 1</label>
                    <div class="input-group">
<!--                        <input type="file" class="form-control" name="image1" id="image1">-->
                        {!! Form::file('image1',null,array('class'=>'form-control')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">IMAGE 2</label>
                    <div class="input-group">
<!--                        <input type="file" class="form-control" name="image2" id="image2">-->
                         {!! Form::file('image2',null,array('class'=>'form-control')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">IMAGE 3</label>
                    <div class="input-group">
<!--                        <input type="file" class="form-control" name="image3" id="image3">-->
                         {!! Form::file('image3',null,array('class'=>'form-control')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">IMAGE 4</label>
                    <div class="input-group">
<!--                        <input type="file" class="form-control" name="image4" id="image4">-->
                         {!! Form::file('image4',null,array('class'=>'form-control')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                    <div class="form-group">
                    <label for="image">IMAGE 5</label>
                    <div class="input-group">
<!--                        <input type="file" class="form-control" name="image5" id="image4">-->
                         {!! Form::file('image5',null,array('class'=>'form-control')) !!}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>
                 <input type="submit" name="submit"  id="submit" value="Submit" class="btn-block btn-lg btn-danger">    
        </div>
<!--        </form>-->
     {!!Form::close()!!}
   



@stop
