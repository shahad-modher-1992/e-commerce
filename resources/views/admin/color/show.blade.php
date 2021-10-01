@extends('layout')
@section('main')
<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All Colors</div>
                      <div class="col-md-6">
                          <a href="{{ route("color.create") }}" class="btn btn-success pull-right">Add New Color</a>
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
                               <th>Color Name</th>
                               {{-- <th>Slug</th> --}}
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                       @foreach ($colors as $color )

                       <tbody>
                               <td>{{ $color->id }}</td>
                               <td>{{ $color->name }}</td>
                               {{-- <td>{{ $color->slug }}</td> --}}
                               <td>
                                   <a href="{{ route('color.edit', ['id'=>$color->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this color?') || event.stopImmediatePropagation()" href="{{ route("color.delete", ['id'=>$color->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                       </tbody>
                       @endforeach

                   </table>
                   {{ $colors->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection