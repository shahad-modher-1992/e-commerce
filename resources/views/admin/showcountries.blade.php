@extends('layout')
@section('main')
    
<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All Countries</div>
                      <div class="col-md-6">
                          <a href="{{ route('country.create') }}" class="btn btn-success pull-right">Add New Country</a>
                      </div>
                  </div>
                </div>
                <div class="panel-body">
                    
                    @if (Session::has("message"))
                    <div class="alert alert-success">
                     <strong>  {{ Session::get("message") }} </strong> 
                    </div>
                        
                    @endif
                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Country Name</th>
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                       @foreach ($countries as $country )

                       <tbody>
                               <td>{{ $country->id }}</td>
                               <td>{{ $country->name }}</td>
                               <td>
                                   <a href="{{ route('country.edit', ['id'=>$country->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this country?') || event.stopImmediatePropagation()" href="{{ route("country.delete", ['id'=>$country->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                       </tbody>
                       @endforeach
                   </table>
                   {{ $countries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection