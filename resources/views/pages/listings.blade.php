@extends('pages.template')





@section('main')


<!--            <div class="sorting">
                <div class="sorting__inner">
                    <div class="sorting__item">
                        <span class="sorting__title">select View</span>
                    </div>
                    <div class="sorting__item">
                        <span class="sorting__title">show on page</span>
                        <div  class="select jelect">
                            <input id="page" name="page" value="0" data-text="imagemin" type="text" class="jelect-input">
                            <div tabindex="0" role="button" class="jelect-current">10 Items</div>
                            <ul class="jelect-options">
                                <li  class="jelect-option jelect-option_state_active">10 Items</li>
                                <li  class="jelect-option">20 Items</li>
                                <li  class="jelect-option">30 Items</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sorting__item">
                        <span class="sorting__title">Sort by</span>
                        <div  class="select jelect">
                            <input id="sort" name="sort" value="0" data-text="imagemin" type="text" class="jelect-input">
                            <div tabindex="0" role="button" class="jelect-current">Last Added</div>
                            <ul class="jelect-options">
                                <li  class="jelect-option jelect-option_state_active">Last Added</li>
                                <li  class="jelect-option">First Added</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
            
             @foreach ($cars as $car)
            
             <article class="card clearfix">
                 <div class="card__img">
<!--                     <img class="img-responsive" src="" height="196" width="235" alt="foto">-->
                     <a href="{{url('/sameday/cardetail')}}/{{$car->id}}">{!! HTML::image($car->image1,"foto",array('class'=>'img-responsive','height'=>'196','width'=>'235')) !!}</a>
                 </div>
                 <div class="card__inner">
                     <a href="{{url('/sameday/cardetail')}}/{{$car->id}}"><h2 class="card__title ui-title-inner">{{$car->carmake}}</h2></a>
                     <div class="card__description">
                         <p>{{$car->vehicletype}}</p>
                     </div>
                     <ul class="card__list list-unstyled">
                         <li class="card-list__row">
                             <span class="card-list__title">Lot Number:</span>
                             <span class="card-list__info">{{$car->lotnumber}}</span>
                         </li>
                         
                         <li class="card-list__row">
                             <span class="card-list__title">Mileage:</span>
                             <span class="card-list__info">{{$car->milleage}}</span>
                         </li>
                          <li class="card-list__row">
                             <span class="card-list__title">Fuel</span>
                             <span class="card-list__info">{{$car->fuel}}</span>
                         </li>
                         <li class="card-list__row">
                             <span class="card-list__title">Color:</span>
                             <span class="card-list__info">{{$car->color}}</span>
                         </li>
                         <li class="card-list__row">
                             <span class="card-list__title">Engine:</span>
                             <span class="card-list__info">{{$car->enginetype}}</span>
                         </li>
                         <li class="card-list__row">
                             <span class="card-list__title">Transmission:</span>
                             <span class="card-list__info">{{$car->transmission}}</span>
                         </li>
                         
                         @if($car->sold =='1') 
                        <li class="card-list__row">
                              <img src="assets/img/sold.gif" alt="This listing has been sold.">
                         </li>
                         @endif
                     </ul>
                     <div class="card__price">PRICE:<span class="card__price-number">${{$car->price}}</span></div>
                 </div>
             </article>


            
            @endforeach
<!--            
            <ul class="pagination">
                <li><a href="javascript:void(0);">PREV</a></li>
                <li class="active"><a href="javascript:void(0);">1</a></li>
                <li><a href="javascript:void(0);">2</a></li>
                <li><a href="javascript:void(0);">3</a></li>
                <li><a href="javascript:void(0);">4</a></li>
                <li><a href="javascript:void(0);">5</a></li>
                <li><a href="javascript:void(0);">NEXT</a></li>
            </ul>-->


@stop