@extends('layout')
@section('main')
    
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                          Add New Order
                       </div>
                       <div class="col-md-6">
                           {{-- <a href="{{ url("/admin/cats") }}" class="btn btn-success pull-right">All Order</a> --}}
                       </div>
                   </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('message'))
                    <div class="alert alert-success">
                         {{  Session::get('message')}}          
                    </div>
                        
                    @endif
                      <form action="{{ route('order.store') }}" method="POST" class="form-horizontal">
                     @csrf
                      
                     <div class="form-group">
                         <div class="col-md-4">
                           <input type="hidden" class="form-control input-md" value="{{ Auth::user()->id }}"  name="user_id">
                         </div>
                         <div class="col-md-4">
                           <input type="hidden" class="form-control input-md" value="{{ $product->product_id }}"  name="product_id">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="col-md-4">
                           <input type="hidden" class="form-control input-md" value="{{ $product->quantity }}"  name="qty">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Phone Number</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="phone" placeholder="Phone Number">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label"> Status</label>
                         <div class="col-md-4">
                             <select name="status" class="form-control">
                                 <option value="">Select</option>
                                 <option value="1">Open</option>
                                 <option value="2">Close</option>
                                 <option value="3">New</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label"></label>
                         <div class="col-md-4">
                             <button type="submit" class="btn btn-primery">Add</button>
                         </div>
                     </div>
 
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection