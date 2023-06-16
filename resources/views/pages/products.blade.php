@extends('app')

@section('content')

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- STORE -->
            <div id="store" class="col-md-12">
  
                <h2>{{__('products.tandoors')}}</h2>

                <!-- store products -->
                <div class="row">
                    <!-- product -->

                    @foreach ($products as $product)

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="product">
                            <a href="/{{Config::get('app.locale')}}/product/{{$product->id}}">
                                <div class="product-img">
                                    <img src="/storage/{{$product->thumb}}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{($product->type == 'e') ? __('products.electrical') : __('products.caxi')}}</p>
                                    <h3 class="product-name"><a href="#">{{__('products.tandoor')}} «{{$product[Config::get('app.locale')]}}»</a></h3>
                                    <h4 class="product-price"><b>{{$product->price}} ֏</b></h4>
                                </div>
                                <div class="add-to-cart">
                                    <a href="/{{Config::get('app.locale')}}/product/{{$product->id}}" class="add-to-cart-btn"><i class="fa fa-eye"></i> {{__('products.see')}}</a>
                                </div>
                            </a>
                        </div>
                    </div>
                        
                    @endforeach
                


                </div>


                <h2>{{__('products.bowls')}}</h2>

                <!-- store products -->
                <div class="row">
                    <!-- product -->

                    @foreach ($bowls as $product)

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="product">
                            <div class="product-img">
                                <img src="/{{$product->thumb}}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#"> {{$product->name}}</a></h3>
                                <h4 class="product-price"><b>{{$product->price}} ֏</b></h4>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                


                </div>

                <h2>{{__('products.vases')}}</h2>

                <!-- store products -->
                <div class="row">
                    <!-- product -->

                    @foreach ($vases as $product)

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="product">
                            <div class="product-img">
                                <img src="/{{$product->thumb}}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#"> {{$product->name}}</a></h3>
                                <h4 class="product-price"><b>{{$product->price}} ֏</b></h4>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                


                </div>
                <!-- /store products -->

            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

    
@endsection