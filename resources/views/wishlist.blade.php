@extends('layout')
@section('main')
<main id="main" class="main-site left-sidebar">

    <div class="container ">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>WishList</span></li>
            </ul>
        </div>


        <div class="row">
        
            @if (Session::has('success'))
            <div class="alert alert-success">
           <strong>{{ Session::get('success') }}</strong>     
            </div>
                
            @endif
       
            <ul class="product-list grid-products equal-container ">
       
               
                @foreach ($products  as  $product)
                @if ($products->count() > 0)

                <li class="col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                    <div class="product product-style-3 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{ url("details/$product->id ")}}" title="{{ $product->name }}">
                                <figure><img src="{{ asset("uploads/products/$product->image") }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                        </div>
                        
                        <div class="product-info">
        
                            <a href="{{ url("details/$product->id ") }}" class="product-name"><span>{{ $product->name }}</span></a>
                            <div class="wrap-price"><span class="product-price">${{ $product->regular_price }}</span></div>
                           
                                <a href="{{ url("/removewish/$product->id") }}" class="btn btn-danger"  style="magin-top: 30px !importabt">Delete </a>
                             
        
                        </div>
                    </div>
                </li>
                @else 
                <h4>No Item In WishList</h4>
                @endif
                @endforeach      
        
            </ul>  

       </div>
       
       <div class="wrap-pagination-info">
           {{ $products->links() }}
          
       </div> 
       <div class="update-clear">
        <a class="btn btn-clear" href="{{ url("/destroywishlist") }}">Clear WishList</a>
    </div>
    </div>
</main>
@endsection