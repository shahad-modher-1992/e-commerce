@extends('layout')
@section('main')
<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All Coupons</div>
                      <div class="col-md-6">
                          <a href="{{ route('coupon.create') }}" class="btn btn-success pull-right">Add New Coupon</a>
                      </div>
                  </div>
                </div>
                <div class="panel-body">
                    @if (Session::has("message"))
                    <div class="alert alert-success">
                      <strong>{{ Session::get("message") }} </strong>          
                    </div>
                        
                    @endif
                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Coupon Code</th>
                               <th>Coupon Type</th>
                               <th>Coupon value</th>
                               <th>Cart Value</th>
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                       @foreach ($coupons as $coupon )

                       <tbody>
                               <td>{{ $coupon->id }}</td>
                               <td>{{ $coupon->code }}</td>
                               <td>{{ $coupon->type }}</td>
                               @if ($coupon->type == 'fixed')
                                <td>${{ $coupon->value }}</td>
                               @else
                                <td>{{ $coupon->value }}%</td>
                               @endif
                               <td>{{ $coupon->cart_value }}</td>
                               <td>
                                   <a href="{{ route('coupon.edit', ['id'=>$coupon->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this coupon?') || event.stopImmediatePropagation()" href="{{ route("coupon.delete", ['id'=>$coupon->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                       </tbody>
                       @endforeach

                   </table>
                   {{-- {{ $cats->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection