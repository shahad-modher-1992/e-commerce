@extends('layout')
@section('main')
    <div class="container" style="">
        <div class="row">
            <div class="col-md-10 text-center bg-light mb-5" style="height: 200px; padding: 20px 0">
                <img src="{{ asset('assets/images/avatar3.jpg') }}" style="height: 100%" alt="">
            </div>
            
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-9 text-left mb-5" style="font-size: 20px;font-weight:150px ; margin:15px 0;">
                <span>Name  :  </span>       <span style="color:red; font-weight:bolder">{{ Auth::user()->name }}</span>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-9 text-left mb-5" style="font-size: 20px;font-weight:150px; margin:15px 0;">
                <span>email  :  </span>       <span style="color:red; font-weight:bolder">{{ Auth::user()->email }}</span>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-9 text-left mb-5" style="font-size: 20px;font-weight:150px ; margin:15px 0;">
                <span>Phone  :  </span>       <span style="color:red; font-weight:bolder">{{ Auth::user()->phone }}</span>
            </div>
        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-9 text-left mb-5" style="font-size: 20px;font-weight:150px ; margin:15px 0;">
                <span>job  :  </span>    
                @if(Auth::user()->role_id==1 )
                <span style="color:red; font-weight:bolder">Admin</span>
                @else
                <span style="color:red; font-weight:bolder">User</span>
                @endif
            </div>
        </div>
        @if (Auth::user()->role_id == 1)
        <div class="row mt-5 text-center">
            <div class="col-md-9 text-left mb-5" style="font-size: 20px;font-weight:150px ; margin:15px 0;">
                <span>Number Of Orders  :  </span> <span style="color:red; font-weight:bolder">{{ $orders->count() }}</span>
            </div>
        </div>
        @endif

        <div class="row mt-5 text-center">
            <div class="col-md-9 text-left mb-5" style="font-size: 20px;font-weight:150px ; margin:15px 0;">
                <span>City  :  </span>       <span style="color:red; font-weight:bolder">{{ $order->address }}</span>
            </div>
        </div>
    </div>
@endsection