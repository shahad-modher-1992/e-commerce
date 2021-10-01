 
<main id="main" class="main-site">


    <style>
        .regprice{
            font-weight: 300;
            font-size: 13px !important;
            color: #aaaaaa !important;
            text-decoration: line-through;
            padding-left: 10px;
        }
         .wish-product{
             position: absolute;
             z-index: 99;
             top: 93%;
             left: 0;
             right: 30px;
             text-align: right;
             padding-top: 0;
         }
         .wish-product .fa-heart {
             color: #cbcbcb;
             font-size:  32px;
         }
         .wish-product .fa-heart:hover {
             color: #ff7007;
         }
         .full-heart {
             color: #ff7007 !important;
         }
    </style>
    <div class="container">
        
        @if(Session::has('success'))
        <div class="alert alert-success" style="margin-top: 5%">
          <strong>{{ Session::get('success') }} </strong>           
        </div>
        @endif
        

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url("/") }}" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                          <ul class="slides">
                                <img src="{{ asset("uploads/products/$product->image") }}" alt="{{ $product->name }}" />
                          </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="product-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <a href="#" class="count-review">(05 review)</a>
                        </div>
                        <h2 class="product-name">{{ $product->name}}</h2>
                        <div class="short-desc">
                           {{$product->short_desc}}
                        </div>
                        <div class="short-desc" style="margin-top: 3%">
                            {{$product->desc}}
                         </div>
                         <div class="short-desc" style="margin-top: 4%; font-size: 18px">
                          weight :  <span class="text-danger" style="font-weight: bolder">{{$product->weight}}</span> 
                         </div>
                         <div class="short-desc" style="margin-top: 3% ; font-size: 18px">
                          Dimensions : <span class="text-danger" style="font-weight: bolder">  {{$product->Dimensions}} </span>
                         </div>
                         <div class="short-desc" style="margin-top: 3% ; font-size: 18px">
                          Color : <span class="text-danger" style="font-weight: bolder">{{$product->color->name}}</span>  
                         </div>
                    
                         <div class="wrap-social" style="margin-top: 3% ; font-size: 18px">
                             <a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                         </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                        </div>

                        @if ($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
                        <div class="wrap-price"><span class="product-price">${{ $product->sale_price }}</span></div>
                        <del ><span class="product-price regprice">${{ $product->regular_price }}</span></del>
                       
                        @else
                        <div class="wrap-price"><span class="product-price">${{ $product->regular_price }}</span></div>
                        
                        @endif
                        <div class="stock-info in-stock">
                            <p class="availability">Availability: <b>{{ $product->stock_state }}</b></p>
                        </div>
                        <div class="quantity-input">
                            <input type="text" name="quatity" value="{{ $product->quantity }}" data-max="120" pattern="[0-9]*" >									
                             
                        </div>
                        <div class="wrap-butons">
                            <form action="{{ route('cart.store') }}" method="Post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}" >
                                <button  class="btn btn-success" style="cursor: pointer">Add To Cart</button>
        
                            </form>
                            {{-- @if ($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )

                            @else

                            @endif --}}
                            {{-- <a href="#" class="btn add-to-cart">Add to Cart</a> --}}
                            {{-- <div class="wrap-btn">
                                <a href="#" class="btn btn-compare">Add Compare</a>
                                <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                            </div> --}}

                            <div class="wish-product">
                                @if ($product->featured == 1)
                                <a href="" wire:click.prevent="removeFromWishList({{ $product->id }})">
                                    <i class="fa fa-heart full-heart" ></i>
                                </a>
                                @else
                                <a href="" wire:click.prevent="addToWishList({{ $product->id }})">
                                    <i class="fa fa-heart"></i>
                                </a>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!--end main products area-->
            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 4%">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Related Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                               
                            @foreach ($related_product as $item )
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ url("/details/$item->id") }}" title="{{ $item->name }}">
                                        <figure><img src="{{ asset("uploads/products/$item->image") }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                    <div class="wrap-price"><span class="product-price">${{ $item->regular_price }}</span></div>
                                </div>
                            </div>
                            @endforeach					
                        </div>
                    </div><!--End wrap-products-->
                </div>
            </div>
            <div class="row" style="padding: 4%">
                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget widget-our-services  col-lg-6 col-md-4">
                        <div class="widget-content">
                            <ul class="our-services">
    
                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Free Shipping</b>
                                            <span class="subtitle">On Oder Over $99</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Special Offer</b>
                                            <span class="subtitle">Get a gift!</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li class="service">
                                    <a class="link-to-service" href="#">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        <div class="right-content">
                                            <b class="title">Order Return</b>
                                            <span class="subtitle">Return within 7 days</span>
                                            <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
    
                        
                    </div><!-- Categories widget-->
            </div>
          

                 
            <div class="widget mercado-widget widget-product col-lg-6 col-md-4">
                <h2 class="widget-title">Popular Products</h2>
                <div class="widget-content">
                    <ul class="products">
                        @foreach ($Popular_Products as $item )
                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="{{ url("/details/$item->id") }}" title="{{ $item->name }}">
                                        <figure><img src="{{ asset("uploads/products/$item->image") }}" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>{{ $item->name }}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{ $item->regular_price }}</span></div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        

                

                    </ul>
                </div>
            </div>
            </div><!--end sitebar-->
            
             

        </div><!--end row-->

    </div><!--end container-->

</main>