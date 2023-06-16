@extends('app')

@section('content')

<div class="header-bg">

</div>


<section>

    <div style="width: 100%;">

        <div class="benefit">
            <div class="row">
                <h2 class="benefit-title">{{__('home.title')}}</h2>
            </div>
            <div class="row no-gutters">
                <div class="container">
                    <p class="benefit-desc">
                        {{__('home.subtitle')}}
                    </p>
                    <hr>
                    <p class="benefit-desc">{{__('home.desc1')}}</p>
                    <p class="benefit-desc">{{__('home.desc2')}}</p>
                </div>
            </div>
        </div>
    </div>


</section>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">{{__('home.tandoors')}}</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active home-tab">
                            <div class="products-slick" data-nav="#slick-nav-1">


                                @foreach ($products as $product)

                                    <div class="product">
                                        <a href="/{{Config::get('app.locale')}}/product/{{$product->id}}">
                                            <div class="product-img">
                                                <img src="/storage/{{$product->thumb}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">{{__('home.tandoor')}} «{{$product[Config::get('app.locale')]}}»</a></h3>
                                                <h4 class="product-price">{{$product->price}} ֏</h4>
                                                
                                                
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="/{{Config::get('app.locale')}}/product/{{$product->id}}" class="add-to-cart-btn"><i class="fa fa-eye"></i> {{__('home.see')}}</a>
                                            </div>
                                        </a>
                                    </div>
                                    
                                @endforeach



                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                    <a class="custom-button" style="position:relative;z-index:10;margin-left:15px;margin-top:70px;" href="/products">{{__('home.see_all')}} <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
    
@endsection