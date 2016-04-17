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
            <dt>MAKE / MODEL:</dt>
            <dd>{{$car->carmake}}</dd>
            <dt>MAKE YEAR:</dt>
            <dd>{{$car->caryear}}</dd>
            <dt>VEHICLE TYPE:</dt>
            <dd>{{$car->vehicletype}}</dd>
            <dt>ENGINE TYPE:</dt>
            <dd>{{$car->enginetype}}</dd>
            <dt>VIN NUMBER:</dt>
            <dd>{{$car->vinnumber}}</dd>
            <dt>TRANSMISSION:</dt>
            <dd>{{$car->transmission}}</dd>
            <dt>FUEL ECONOMY:</dt>
            <dd>{{$car->fuel}}</dd>
            <dt>DAMAGE:</dt>
            <dd>{{$car->damage}}</dd>
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