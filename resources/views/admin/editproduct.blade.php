@extends('layout')
@section('main')
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                         Edit Product
                       </div>
                       <div class="col-md-6">
                           <a href="{{ url("/admin/products") }}" class="btn btn-success pull-right">All Products</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">

                   @if ($errors->any())
                   <div class="alert alert-danger">
                     @foreach ($errors->all() as $error )
                       <p class="py-2">{{ $error }}</p>
                     @endforeach
                   </div>
                     
                   @endif
                      <form action="{{ route("product.update", ['id'=>$product->id]) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Product Name</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $product->name }}" name="name" placeholder="Product Name">
                         </div>
                     </div>
                     <div class="form-group">
                      <label for="" class="col-md-4 control-label"> Brand</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control input-md" value="{{ $product->brand }}" name="brand" placeholder="Brand Name">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-4 control-label">Product Color</label>
                    <div class="col-md-4">
                      <select type="text" class="form-control input-md" name="color_id" >
                          <option value="">select</option>
                          @foreach ($colors as $color)
                              <option value="{{ $color->id }}">{{ $color->name }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                  <div class="form-group">
                      <label for="" class="col-md-4 control-label">Product size</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control input-md" value="{{ $product->size }}" name="size" placeholder="Product Name">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-md-4 control-label">Product Weight</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control input-md" value="{{ $product->weight }}" name="weight" placeholder="Product weight">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-md-4 control-label">Product Dimensions</label>
                      <div class="col-md-4">
                        <input type="text" class="form-control input-md" value="{{ $product->Dimensions }}" name="Dimensions" placeholder="Product Dimensions">
                      </div>
                  </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label"> Short Describtion</label>
                         <div class="col-md-4">
                           <textarea class="form-control input-md" value="" name="short_desc" placeholder="Short Describtion"> {{ $product->short_desc }}</textarea>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Describtion</label>
                         <div class="col-md-4">
                           <textarea class="form-control input-md" value="" name="desc" placeholder="Describtion "> {{ $product->desc }}</textarea>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Regualar price</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $product->regular_price }}" name="regular_price" placeholder="Regualr Price">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Sale Price</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $product->sale_price }}" name="sale_price" placeholder="Sale Price">
                         </div>
                     </div>
                
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">featured</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $product->featured }}" name="featured" placeholder="Featured ">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">quantity </label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $product->quantity }}" name="quantity" placeholder="Quantity ">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">image </label>
                         <div class="col-md-4">
                           <input type="file" class="form-control input-md" value="{{ $product->image }}" name="image" placeholder="Image">
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="" class="col-md-4 control-label">catigories </label>
                        <div class="col-md-4">
                            <select name="catigory_id" class="form-control input-md">
                                
                                    <option value="{{ $cats->id }}">{{ $cats->name }}</option>
                                    @foreach ($category as $cat )
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>  
                                    @endforeach
                                
                            </select>
                        </div>
                      
                    </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label"></label>
                         <div class="col-md-4">
                             <button type="submit" class="btn btn-primery">Update</button>
                         </div>
                     </div>
 
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection