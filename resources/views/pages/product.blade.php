@extends('app')

@section('content')

        @php
            
            $images = explode(',',$product->images);

        @endphp

		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">

                            @foreach ($images as $image)

                            <div class="product-preview">
								<img src="/storage/{{$image}}" alt="">
							</div>
                                
                            @endforeach
							

						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							@foreach ($images as $image)

                            <div class="product-preview">
								<img src="/storage/{{$image}}" alt="">
							</div>
                                
                            @endforeach
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
                            <h2 class="product-name">{{__('product.tandoor')}} «{{$product[Config::get('app.locale')]}}»</h2>
	
							<div>
								<h3 class="product-price">{{$product->price}} ֏</h3>
								<span class="product-available">{{__('product.in_stock')}}</span>
							</div>

                            @if($product->height !=="")

                                <p class="specification"><i class="fas fa-arrows-alt-v"></i> {{__('product.height')}}: {{$product->height}} {{__('product.sm')}}</p>

                            @endif

                            @if($product->width !=="")

                                <p class="specification"><i class="fas fa-arrows-alt-h"></i> {{__('product.width')}}: {{$product->width}} {{__('product.sm')}}</p>

                            @endif

                            @if($product->neck !=="")

                                <p class="specification"><i class="far fa-circle"></i> {{__('product.neck')}}: {{$product->neck}} {{__('product.sm')}}</p>

                            @endif

                            @if($product->usingspace !=="")

                                <p class="specification"><i class="fas fa-arrows-alt"></i> {{__('product.using_space')}}: {{$product->usingspace}} {{__('product.sm')}}</p>

                            @endif

                            @if($product->weight !=="")

                                <p class="specification"><i class="fas fa-weight-hanging"></i> {{__('product.weight')}}: {{$product->weight}} {{__('product.kg')}}</p>

                            @endif

                            @if($product->energy !=="")

                                <p class="specification"><i class="fas fa-bolt"></i> {{__('product.energy')}}: {{$product->energy}} {{__('product.energy_2')}}</p>

                            @endif

                            @if($product->has1 !=="")

                                <p class="specification"><i class="fad fa-sword-laser"></i> {{__('product.has')}} {{$product->has1}} {{__('product.has_2')}}</p>

                            @endif

                            @if($product->has2 !=="")

                                <p class="specification"><i class="fad fa-sword-laser"></i> {{__('product.has')}} {{$product->has2}} {{__('product.has_2')}}</p>

                            @endif

                            @if($product->ability !=="")

                                <p class="specification"> <i class="fas fa-meat"></i> {{__('product.ability')}} {{$product->ability}} {{__('product.ability_2')}}</p>

                            @endif

                            @if($product->price4 !=="")

                                <p class="specification"><i class="fad fa-sword-laser"></i> {{__('product.price4')}}:{{$product->price4}} ֏</p>

                            @endif

                            @if($product->price1 !=="")

                                <p class="specification">{{__('product.has_3')}} {{$product->has1}} {{__('product.has_4')}}։ {{$product->price1}} ֏</p>

                            @endif

                            @if($product->price2 !=="")

                                <p class="specification">{{__('product.has_3')}} {{$product->has2}} {{__('product.has_4')}}։ {{$product->price2}} ֏</p>

                            @endif


                            @if($product->kahkal == "1")

                                <p class="specification">{{__('product.kahkal_price')}}: {{$product->kahkal_price}} ֏</p>

                            @endif

                            @if($product->gril_kahkal == "1")

                                <p class="specification">{{__('product.gril_kahkal')}}: {{$product->gril_kahkal_price}} ֏</p>

                            @endif

                            @if($product->price3 !== "")

                                <p class="specification">{{__('product.price3')}}: {{$product->price3}} ֏</p>

                            @endif

                            @if($product->passport == "1")

                                <p class="specification"><i class="fas fa-passport"></i> {{__('product.passport')}}</p>

                            @endif

                            @if($product->wrap == "1")

                                <p class="specification">{{__('product.wrap')}}</p>

                                <p class="specification"><i class="fas fa-box-open"></i> {{__('product.wrap_2')}}: {{$product->wrap_price}} ֏</p>

                            @endif

                            @if($product->type == "w")

                                <p class="specification">{{__('product.w_1')}}</p>

                                <p class="specification">{{__('product.w_2')}}</p>
                                <p class="specification">{{__('product.w_3')}} {{$product->has1}} {{__('product.count')}}</p>

                                <p class="specification">{{__('product.w_4')}}: 1 {{__('product.count')}}</p>
                                <p class="specification">{{__('product.w_5')}}: 1 {{__('product.count')}}</p>
                                <p class="specification">{{__('product.w_6')}}: 1 {{__('product.count')}}</p>

                                <p class="specification">{{$product->kahkal_stage}} {{__('product.w_7')}}: 1 {{__('product.count')}}</p>

                            @endif


						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">{{__('product.how_to_use')}}</a></li>
								<li><a data-toggle="tab" href="#tab2">{{__('product.what_to_cook')}}</a></li>
								<li><a data-toggle="tab" href="#tab3">{{__('product.where_to_use')}}</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content" style="background-color: #fff;padding: 20px 20px;">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											@if ($product->type == 'e')

											<p class="how-use">1) {{__('product.how_to_1')}}</p>

											<p class="how-use">2) {{__('product.how_to_2')}}</p>

											<p class="how-use">3) {{__('product.how_to_3')}}</p>

											<p class="how-use">4) {{__('product.how_to_4')}}</p>

											<p class="how-use">5) {{__('product.how_to_5')}}</p>

											<p class="how-use">6) {{__('product.how_to_6')}}</p>
												
											@endif
											
											@if($product->id == 10)
											
											<p>
											    Армянский угольный тандыр (тонир)<br></br>

Армянский тонир (тандыр) используется для приготовления еды.
По старому поверью, женщины в Армении, выпекая лаваш и наклоняясь к тониру, кланяются Солнцу.
Вертикальный тандыр устанавливается горлом сверху.
Армянский тонир традиционно устанавливается ниже уровня пола. Но поскольку мы предлагаем переносной тандыр, то его можно размещать на поверхности.
Наши тандыры изготовлены из шамотной глины. Никаких заменителей!
В наших тонирах (тандырах) можно выпечь самый вкусный хлеб и приготовить самое вкусное мясо. И это не только вкусно, но и очень полезно.
Тандыр установлен на специальной (металлической) платформе, которая в свою очередь закреплена на прочных промышленных колесах. Он легко перемещается, и Вы можете его установить на своем участке или в месте общественного питания в удобном для Вас месте.
Тонир (тандыр) утеплен снаружи теплоизоляционными материалами, в нижней части изделия есть поддувало для растопки и выемки угля.
Наружная поверхность тонира (тандыра) может быть оформлена и по личному пожеланию. Мы исполняем отделку в стильном дизайне и применяем декоративные камни или мозаику или керамическую плитку.
Наши мастера правильно делают первую топку и охлаждение тонира, это важно для дальнейшего его использования.
Работать на тандыре (тонире) просто. Засыпаете дрова, разжигаете, чтобы разогреть стенки до 350 - 400°С, после протапливания закрывайте нижнее отверстие для подачи воздуха и загружайте продукты для готовки. Закрывайте плотно горловину крышкой и можете сверху положить ватное, намоченное одеяло.
Запомните: Все готовится после прогорания дров и превращения их в уголья.
Армянский угольный тандыр (тонир) можно купить в нашем интернет - магазине https://tonir.am
И в качестве изумительного и полезного подарка.
											</p>
											@endif
											
											@if($product->id == 30)
											
											<p>
											    Армянский угольный тандыр (тонир)<br></br>

Армянский тонир (тандыр) используется для приготовления еды.
По старому поверью, женщины в Армении, выпекая лаваш и наклоняясь к тониру, кланяются Солнцу.
Вертикальный тандыр устанавливается горлом сверху.
Армянский тонир традиционно устанавливается ниже уровня пола. Но поскольку мы предлагаем переносной тандыр, то его можно размещать на поверхности.
Наши тандыры изготовлены из шамотной глины. Никаких заменителей!
В наших тонирах (тандырах) можно выпечь самый вкусный хлеб и приготовить самое вкусное мясо. И это не только вкусно, но и очень полезно.
Тандыр установлен на специальной (металлической) платформе, которая в свою очередь закреплена на прочных промышленных колесах. Он легко перемещается, и Вы можете его установить на своем участке или в месте общественного питания в удобном для Вас месте.
Тонир (тандыр) утеплен снаружи теплоизоляционными материалами, в нижней части изделия есть поддувало для растопки и выемки угля.
Наружная поверхность тонира (тандыра) может быть оформлена и по личному пожеланию. Мы исполняем отделку в стильном дизайне и применяем декоративные камни или мозаику или керамическую плитку.
Наши мастера правильно делают первую топку и охлаждение тонира, это важно для дальнейшего его использования.
Работать на тандыре (тонире) просто. Засыпаете дрова, разжигаете, чтобы разогреть стенки до 350 - 400°С, после протапливания закрывайте нижнее отверстие для подачи воздуха и загружайте продукты для готовки. Закрывайте плотно горловину крышкой и можете сверху положить ватное, намоченное одеяло.
Запомните: Все готовится после прогорания дров и превращения их в уголья.
Армянский угольный тандыр (тонир) можно купить в нашем интернет - магазине https://tonir.am
И в качестве изумительного и полезного подарка.
											</p>
											@endif
											
											
											@if($product->id == 20)
											
											<p>
											    Снять большую верхнюю крышку. Заложить сухие дрова внутрь корпуса на колосники на 2/3 объема печи и разжечь. Набор рабочей температуры происходит примерно через 1 час в зависимости от используемых дров, их количества и объема тандыра. Лучше использовать дрова фруктовых деревьев, как и для мангала. Можно применять древесный уголь. После того как на внутренних стенках тандыра исчезнет копоть, т. Е. Они станут чистыми, тандыр накрыть большой крышкой. По окончании горения необходимо убедиться в отсутствии не прогоревших дров, после чего нужно частично освободить тандыр от углей с помощью кочерги и совка. Угли должны лежать тонким слоем на колосниках или под ними. Закрыть поддувало.

<br><br>Тандыр готов к работе!<br><br>

При максимальном разогреве допускается появление волосяных трещин, не влияющих на работу печи.
											</p>
											@endif
											
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											@if ($product->type == 'e')
												<p class="how-use">{{__('product.what_to_cook_desc')}}</p>
											@endif
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											@if ($product->type == 'e')
												<p class="how-use">{{__('product.where_to_cook_desc')}}</p>
											@endif
										</div>
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

    
@endsection