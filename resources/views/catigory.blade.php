@extends('layout')
@section('main')
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span> Product Category </span></li>
                <li class="item-link"><span> {{ $cat->name }}  </span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="assets/images/shop-banner.jpg" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">{{ $cat->name }} </h1>

                    <div class="wrap-right">

                        <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen" wire:model="sorting">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>

                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                                <option value="12" selected="selected">12 per page</option>
                                <option value="16">16 per page</option>
                                <option value="18">18 per page</option>
                                <option value="21">21 per page</option>
                                <option value="24">24 per page</option>
                                <option value="30">30 per page</option>
                                <option value="32">32 per page</option>
                            </select>
                        </div>

                        <div class="change-display-mode">
                            <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                            <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div>

                </div><!--end wrap shop control-->

                <div class="row">

                    <ul class="product-list grid-products equal-container">

                        @foreach ($products as $product )
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ url("/details/$product->id") }}" title="{{ $product->name }}">
                                        <figure><img src="{{ asset("uploads/products/$product->image")}}" alt="{{ $product->name }}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{ url("/details/$product->id") }}" class="product-name"><span>{{ $product->name }}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{ $product->regular_price }}</span></div>
                                    <a href="#" class="btn add-to-cart">Add To Cart</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        
                       
               

                    </ul>

                </div>

                <div class="wrap-pagination-info">

                    {{-- {{ $products->links() }} --}}
                    {{-- <ul class="page-numbers">
                        <li><span class="page-number-item current" >1</span></li>
                        <li><a class="page-number-item" href="#" >2</a></li>
                        <li><a class="page-number-item" href="#" >3</a></li>
                        <li><a class="page-number-item next-link" href="#" >Next</a></li>
                    </ul>
                    <p class="result-count">Showing 1-8 of 12 result</p> --}}
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                        @foreach ($cats as $cat )
                        <li class="category-item">
                            <a href="{{ url("/cat/{$cat->id}") }}" class="cate-link">{{ $cat->name }}</a>
                        </li>
                        @endforeach
                          
                        </ul>
                    </div>

                </div><!-- Categories widget-->
                {{ $cats->links() }}

                <div class="widget mercado-widget filter-widget brand-widget">
                    <h2 class="widget-title">Brand</h2>
                    <div class="widget-content ">
                        
                        @foreach ($brands as $brand )
                        <form action="{{ route("shop.brand") }}" method="POST">
                            @csrf
                           <input type="hidden" name="brand_id" value="{{ $brand->id }}">
                       <button class="btn">{{ $brand->name }}</button>
                       </form>
                        <br>
                        @endforeach                        
                    </div>
                </div>
                {{ $brands->links() }}
                <!-- brand widget-->
                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Color</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list has-count-index">
                            @foreach ($colors as  $color)
                            <form action="{{ route("shop.color") }}" method="POST">
                                @csrf
                            <input type="hidden" name="color_id" value="{{ $color->id }}">
                            @php 
                            $colorcount = DB::table('products')->where('color_id', '=', $color->id)->count();
                           @endphp
                            <button class="btn">{{ $color->name }}<span>({{ $colorcount }})</span></button>
                            </form>                          
                            <br>
                            @endforeach
                        </ul>
                    </div>
                </div>
               {{ $colors->links() }}

                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Size</h2>
                    <div class="widget-content">
                        <ul class="list-style inline-round ">
                            <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                            <li class="list-item"><a class="filter-link " href="#">M</a></li>
                            <li class="list-item"><a class="filter-link " href="#">l</a></li>
                            <li class="list-item"><a class="filter-link " href="#">xl</a></li>
                        </ul>
                        <div class="widget-banner">
                            <figure><img src="{{ asset("assets/images/size-banner-widget.jpg") }}" width="270" height="331" alt=""></figure>
                        </div>
                    </div>
                </div><!-- Size -->

              

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

</main>
@endsection



