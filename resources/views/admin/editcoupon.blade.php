@extends('layout')
@section('main')

<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                          Add New Coupon
                       </div>
                       <div class="col-md-6">
                           <a href="{{ url("/admin/coupon") }}" class="btn btn-success pull-right">All Coupons</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">

                   @if ($errors->any())                  
                   @foreach ($errors->all() as $error )
                   <div class="alert alert-danger">
                    {{ $error }}
                   </div>
                   @endforeach
                   @endif

                      <form action="{{ route("coupon.update", ['id'=>$coupon->id]) }}" method="POST" class="form-horizontal">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Coupon Code</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="code" value="{{ $coupon->code }}" placeholder="Coupon Code">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Type</label>
                         <div class="col-md-4">
                             <select name="type" class="form-control">
                                 <option value="{{ $coupon->id }}">{{ $coupon->type }}</option>
                                 <option value="1">Fixed</option>
                                 <option value="2">Parecent</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label"> Value</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="value" value="{{ $coupon->value }}" placeholder="Value">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Cart Value</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="cart_value" value="{{ $coupon->cart_value }}" placeholder="Cart Value">
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