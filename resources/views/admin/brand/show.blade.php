@extends('layout')
@section('main')
<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All Brands</div>
                      <div class="col-md-6">
                          <a href="{{ route("brand.create") }}" class="btn btn-success pull-right">Add New Brand</a>
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
                               <th>Brand Name</th>
                               <th>Catigory Name</th>
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                       @foreach ($brands as $brand )

                       <tbody>
                               <td>{{ $brand->id }}</td>
                               <td>{{ $brand->name }}</td>
                               <td>{{ $brand->catigory->name }}</td>
                               <td>
                                   <a href="{{ route('brand.edit', ['id'=>$brand->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this brand?') || event.stopImmediatePropagation()" href="{{ route("brand.delete", ['id'=>$brand->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                       </tbody>
                       @endforeach

                   </table>
                   {{ $brands->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection