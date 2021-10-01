@extends('layout')
@section('main')

<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All Products</div>
                      <div class="col-md-6">
                          <a href="{{ route("product.create") }}" class="btn btn-success pull-right">Add New Product</a>
                      </div>
                  </div>
                </div>
                <div class="panel-body">
                    @if (Session::has("message"))
                    <div class="alert alert-success">
                        {{ Session::get("message") }}
                    </div>
                        
                    @endif
                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>image</th>
                               <th>Name</th>
                               <th>stock </th>
                               <th>price</th>
                               <th>Sale Price</th>
                               <th>catigory</th>
                               <th>Date</th>
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                       @foreach ($products as $product )

                       <tbody>
                               <td>{{ $product->id }}</td>
                               <td><img src="{{ asset("uploads/products/$product->image") }}" width="60" alt=""></td>
                               <td>{{ $product->name }}</td>
                               <td>{{ $product->stock_state }}</td>
                               <td>{{ $product->regular_price }}</td>
                               <td>{{ $product->sale_price }}</td>
                               <td>{{ $product->catigory->name }}</td>
                               <td>{{ carbon\carbon::parse($product->created_at)->format('d M, Y') }}</td>
                               <td>
                                   <a href="{{ route("product.edit", ['id'=>$product->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this product?') && event.stopImmediatePropagation()" href="{{ route("product.delete", ['id'=>$product->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                       </tbody>
                       @endforeach

                   </table>
                   {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection