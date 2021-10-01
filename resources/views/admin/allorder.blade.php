@extends('layout')
@section('main')

@foreach ($users as $user )

<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">All Order</div>
                      <div class="col-md-6">
                          <div class="pull-right">
                           <p class="btn btn-success">{{ $user->name }}</p>
                          </div>
                         
                      </div>
                  </div>
                </div>

                <div class="panel-body">
                    {{-- @if (Session::has("message"))
                    <div class="alert alert-success">
                        {{ Session::get("message") }}
                    </div>
                        
                    @endif --}}

                   <table class="table table-striped">
                       <thead>
                           <tr>
                              
                               <th>Id</th>
                               <th>image</th>
                               <th>Name</th>
                               <th>stock </th>
                               <th>price</th>
                               <th>Sale Price</th>
                               {{-- <th>catigory</th> --}}
                               <th>Date</th>
                               {{-- <th>Action</th> --}}
                             
                           </tr>
                       </thead>

                        @foreach ($resualt as $order)
                        @if($order->user_id == $user->id)

                       <tbody>
                               <td>{{ $order->id }}</td>
                               <td><img src="{{ asset("uploads/products/$order->image") }}" width="60" alt=""></td>
                               <td>{{ $order->name }}</td>
                               <td>{{ $order->stock_state }}</td>
                               <td>{{ $order->regular_price }}</td>
                               <td>{{ $order->sale_price }}</td>
                               <td>{{ carbon\carbon::parse($order->created_at)->format('d M, Y') }}</td>
                               {{-- <td>
                                   <a href="{{ route("order.edit", ['id'=>$order->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this order?') && event.stopImmediatePropagation()" href="{{ route("order.delete", ['id'=>$order->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td> --}}
                       </tbody>
                       @endif

                       @endforeach
                   </table>

                   <br> <br>

                   {{-- {{ $orders->links() }} --}}
                </div>

            </div>

        </div>

    </div>
</div>
@endforeach

    
@endsection