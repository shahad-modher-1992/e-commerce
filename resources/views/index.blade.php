@extends('layout')
@section('main')
    
	 <main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    @foreach ($home_slider as $item)
                    <div class="item-slide">
						<img src="{{ asset("uploads/homeslider/$item->image") }}" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title"> <b>{{ $item->title }}</b></h2>
							<span class="subtitle">{{ $item->subtitle }}</span>
							<p class="sale-info">Only price: <span class="price">${{ $item->price }}</span></p>
							<a href="#" class="btn-link">{{ $item->link }}</a>
						</div>
					</div>
                    @endforeach
					
				</div>
			</div>

		

			<!--On Sale-->

			@if ($product_on_sale->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())

			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">On Sale</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="{{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s') }}">
					{{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s') }}
				</div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
            
					@foreach ($product_on_sale as  $item)
                    <div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="{{ url("/details/$item->id") }}" title="{{ $item->name }}">
								<figure><img src="{{ asset("uploads/products/$item->image") }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>{{ $item->name }}</span></a>
							<div class="wrap-price">
								<ins><p class="product-price">{{ $item->regular_price }}</p></ins>
								<del><p class="product-price">{{ $item->sale_price }}</p></del>
							
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>

          @endif
			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">						
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                    @foreach ($latest_products as $item)
                                    <div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ url("details/$item->id ")}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{ asset("uploads/products/$item->image") }}" width="800" height="800" alt="{{ $item->name }}"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{ $item->name }}</span></a>
											<div class="wrap-price"><span class="product-price">${{$item->regular_price}}</span></div>
										</div>
									</div>
                                    @endforeach
									

								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Catigory </h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							
							@foreach ($category as $key=>$item )
							<a href="#fashion_{{ $item->id }}" class="tab-control-item {{ $key==0 ?'active':'' }}">{{ $item->name }}</a>
							@endforeach
							
						</div>
						<div class="tab-contents">
                           @foreach ($category as $key=>$item)
						   <div class="tab-content-item {{ $key==0 ?'active':'' }}" id="fashion_{{ $item->id }}">
							
							<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                               
						   @php
							   $c_products = DB::table('products')->where('catigory_id','=', $item->id)->get();
						   @endphp
						  
								@foreach ($c_products as $c_product)
								<div class="product product-style-2 equal-elem ">

									<div class="product-thumnail">
										<a href="{{ url("/details/$c_product->id") }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
											<figure><img src="{{ asset("uploads/products/$c_product->image") }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
										</a>
										<div class="group-flash">
											<span class="flash-item new-label">new</span>
										</div>
										<div class="wrap-btn">
											<a href="#" class="function-link">quick view</a>
										</div>
									</div>
									<div class="product-info">
										<a href="#" class="product-name"><span>{{ $c_product->name }}</span></a>
										<div class="wrap-price"><span class="product-price">${{ $c_product->regular_price }}</span></div>
									</div>
								</div>
								@endforeach			
						</div>	
						</div>
						@endforeach

					</div>

				</div>
			</div>			

		</div>

	</main>
@endsection