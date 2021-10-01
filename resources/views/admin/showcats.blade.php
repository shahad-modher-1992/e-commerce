@extends('layout')
@section('main')

<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All catigories</div>
                      <div class="col-md-6">
                          <a href="{{ route("create") }}" class="btn btn-success pull-right">Add New Catigory</a>
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
                               <th>Catigory Name</th>
                               {{-- <th>Slug</th> --}}
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                       @foreach ($cats as $cat )

                       <tbody>
                               <td>{{ $cat->id }}</td>
                               <td>{{ $cat->name }}</td>
                               {{-- <td>{{ $cat->slug }}</td> --}}
                               <td>
                                   <a href="{{ route('cat.edit', ['id'=>$cat->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this catigory?') || event.stopImmediatePropagation()" href="{{ route("cat.delete", ['id'=>$cat->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                       </tbody>
                       @endforeach

                   </table>
                   {{ $cats->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection