@extends('pages.template2')


@section('main')

<div class="col-lg-8">
<!--<form role="form"  >-->
{!!Form::open(array('url'=>'sameday/addcar','method'=>'post','files'=>'true') ) !!}
    
<!--       
        <div class="form-group">
             <label for="vinnumber">VIN NUMBER</label>
             {!! Form::text('vinnumber',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Vin Number')) !!}
        </div>-->
        
<div class="col-lg-8">
    <div class="form-group">
        <label for="vinnumber">VIN NUMBER</label>
        <div class="input-group">

            {!! Form::text('vinnumber',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Vin Number')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="lotnumber">LOT NUMBER</label>
        <div class="input-group">

            {!! Form::text('lotnumber',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Lot Number')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="carmake">MAKE/MODEL</label>
        <div class="input-group">

            {!! Form::text('carmake',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Make or Model')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="caryear">MAKE YEAR</label>
        <div class="input-group">

            {!! Form::text('caryear',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Make Year')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="price">PRICE</label>
        <div class="input-group">

            {!! Form::text('price',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Price')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="color">COLOR</label>
        <div class="input-group">

            {!! Form::text('color',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Color')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="milleage">MILLEAGE</label>
        <div class="input-group">

            {!! Form::text('milleage',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Milleage')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>

    <div class="form-group">
        <label for="vehicletype">VEHICLE TYPE</label>
        <div class="input-group">

            {!! Form::textarea('vehicletype',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Car Milleage')) !!}
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

            {!! Form::text('transmission',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Transmission')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="fuel">FUEL ECONOMY</label>
        <div class="input-group">

            {!! Form::text('fuel',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Fuel')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">
        <label for="damage">DAMAGE</label>
        <div class="input-group">

            {!! Form::text('damage',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Enter Damage')) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
        </div>
    </div>
    <div class="form-group">

        <label for="Condition">Condition</label>
        <select class="form-control" name="condition" id="condition">
            <option value="1">New</option>
            <option value="2">Used</option>
        </select>
        <label></label>
    </div>
    <div class="form-group">

        <label for="Status">Status</label>
        <select class="form-control" name="category" id="category">
            <option value="1">Active</option>
            <option value="2">Inactive</option>
        </select>
        <label></label>
    </div>
</div>


<div class="col-lg-4 col-md-push-1">
    <div class="col-md-10">
        <div class="form-group">
            <label for="image">IMAGE 1</label>
            <div class="input-group">

                {!! Form::file('image1',null,array('class'=>'form-control')) !!}
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="image">IMAGE 2</label>
            <div class="input-group">

                {!! Form::file('image2',null,array('class'=>'form-control')) !!}
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="image">IMAGE 3</label>
            <div class="input-group">

                {!! Form::file('image3',null,array('class'=>'form-control')) !!}
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="image">IMAGE 4</label>
            <div class="input-group">

                {!! Form::file('image4',null,array('class'=>'form-control')) !!}
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
        <div class="form-group">
            <label for="image">IMAGE 5</label>
            <div class="input-group">

                {!! Form::file('image5',null,array('class'=>'form-control')) !!}
                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
            </div>
        </div>
    </div>
    <input type="submit" name="submit"  id="submit" value="Submit" class="btn-block btn-lg btn-danger">    
</div>
<!--        </form>-->
{!!Form::close()!!}

</div>


@stop
