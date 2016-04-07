@extends('pages.template')





@section('main')

<article class="car-details">
    <div class="car-details__wrap-title clearfix">
        <h2 class="car-details__title">{{$car->carmake}}</h2>
        <div class="car-details__wrap-price"><span class="car-details__price"><span class="car-details__price-inner">${{$car->price}}</span></span></div>
    </div>

    <div id="slider-product" class="flexslider slider-product">
        <ul class="slides">
           
            <li>
                <a href="{{url($car->image1)}}" >
<!--                    <img class="img-responsive" src="assets/media/slider_product/large/1.jpg" height="430" width="770" alt="Foto">-->
                    {!! HTML::image($car->image1,"foto",array('class'=>'img-responsive','height'=>'430','width'=>'770')) !!}
                </a>
            </li>
            <li>
                <a href="{{url($car->image2)}}" >
                     {!! HTML::image($car->image2,"foto",array('class'=>'img-responsive','height'=>'430','width'=>'770')) !!}
                </a>
            </li>
            <li>
                <a href="{{$car->image3}}" >
                    {!! HTML::image($car->image3,"foto",array('class'=>'img-responsive','height'=>'430','width'=>'770')) !!}
                </a>
            </li>
            <li>
                <a href="{{$car->image4}}" >
                   {!! HTML::image($car->image4,"foto",array('class'=>'img-responsive','height'=>'430','width'=>'770')) !!}
                </a>
            </li>
            <li>
                <a href="{{$car->image5}}" >
                   {!! HTML::image($car->image5,"foto",array('class'=>'img-responsive','height'=>'430','width'=>'770')) !!}
                </a>
                
            </li>
<!--            <li>
                <a href="assets/media/slider_product/large/1.jpg" >
                    <img class="img-responsive" src="assets/media/slider_product/large/1.jpg" height="430" width="770" alt="Foto">
                </a>
            </li>-->
        </ul>
    </div>
    <div id="carousel-product" class="flexslider carousel-product">
        <ul class="slides">
            <li>
                 {!! HTML::image($car->image1,"foto",array('class'=>'img-responsive','height'=>'75','width'=>'95')) !!}
            </li>
            <li>
                 {!! HTML::image($car->image2,"foto",array('class'=>'img-responsive','height'=>'75','width'=>'95')) !!}
            </li>
            <li>
                  {!! HTML::image($car->image3,"foto",array('class'=>'img-responsive','height'=>'75','width'=>'95')) !!}
            </li>
            <li>
                  {!! HTML::image($car->image4,"foto",array('class'=>'img-responsive','height'=>'75','width'=>'95')) !!}
            </li>
            <li>
                  {!! HTML::image($car->image5,"foto",array('class'=>'img-responsive','height'=>'75','width'=>'95')) !!}
            </li>
           
        </ul>
    </div>
   
</article>
@stop


@section('side')

<section class="widget">
    <h3 class="widget-title">Specifications</h3>
    <div class="decor-1"></div>
    <div class="widget-content">
        <dl class="list-descriptions list-unstyled">
            <dt>MAke / model:</dt>
            <dd>{{$car->carmake}}</dd>
            <dt>MAke year:</dt>
            <dd>{{$car->caryear}}</dd>
            <dt>vehicle type:</dt>
            <dd>Front-engine, front-wheel-drive, 5-passenger, 4-door sedan</dd>
            <dt>ENGINE TYPE:</dt>
            <dd>DOHC 16-valve inline-4, aluminum block and head, direct fuel injection</dd>
            <dt>DIMENSIONS:</dt>
            <dd>Wheelbase: 111.7 in<br>
                Length: 201.3 in<br>
                Width: 73.0 in Height: 58.9 in<br>
                Curb weight: 3700 lb
            </dd>
            <dt>TRANSMISSION:</dt>
            <dd>6-speed automatic with manual shifting mode</dd>
            <dt>fuel economy:</dt>
            <dd>EPA city/highway: 21/31 mpg</dd>
            <dt>Passenger Capacity:</dt>
            <dd>5 Seats</dd>
        </dl>
    </div>
</section>
<!--<section class="widget widget-banner">
    <h3 class="widget-title">car video</h3>
    <div class="decor-1"></div>
    <div class="widget-content">
        <div class="widget-slider owl-carousel owl-theme owl-theme_mod-d enable-owl-carousel"
             data-pagination="true"
             data-single-item="true"
             data-auto-play="7000"
             data-transition-style="fade"
             data-main-text-animation="true"
             data-after-init-delay="3000"
             data-after-move-delay="1000"
             data-stop-on-hover="true">

            <div class="widget-slider__item"><a href="https://www.youtube.com/watch?v=neS5h_VSvb8" rel="prettyPhoto"><img class="img-responsive" src="assets/media/banners/1.jpg" height="250" width="306" alt="banner"></a></div>
            <div class="widget-slider__item"><a href="https://www.youtube.com/watch?v=neS5h_VSvb8" rel="prettyPhoto"><img class="img-responsive" src="assets/media/banners/1.jpg" height="250" width="306" alt="banner"></a></div>
            <div class="widget-slider__item"><a href="https://www.youtube.com/watch?v=neS5h_VSvb8" rel="prettyPhoto"><img class="img-responsive" src="assets/media/banners/1.jpg" height="250" width="306" alt="banner"></a></div>
            <div class="widget-slider__item"><a href="https://www.youtube.com/watch?v=neS5h_VSvb8" rel="prettyPhoto"><img class="img-responsive" src="assets/media/banners/1.jpg" height="250" width="306" alt="banner"></a></div>
        </div>
    </div>
</section>-->


@stop