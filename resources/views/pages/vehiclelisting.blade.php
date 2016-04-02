@extends('pages.template')


@section('main')

 <div class="sorting">
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
            </div> <!--end sorting -->
            
            
            
            
            
            

@stop