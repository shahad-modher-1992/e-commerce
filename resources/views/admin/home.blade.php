@extends('layout')
@section('main')


<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All Sliders</div>
                      <div class="col-md-6">
                          <a href="{{ route("home.create") }}" class="btn btn-success pull-right">Add New slider</a>
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
                               <th>image</th>
                               <th>Title</th>
                               <th>Subtitle</th>
                               <th>price</th>
                               <th>Link</th>
                               <th>Status</th>
                               <th>Date</th>
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                    @foreach ($sliders as $slider)
    
                       <tbody>
                               <td>{{ $slider->id }}</td>
                               <td><img src="{{ asset("uploads/homeslider/$slider->image") }}" width="60" alt=""></td>
                               <td>{{ $slider->title }}</td>
                               <td>{{ $slider->subtitle }}</td>
                               <td>{{ $slider->price }}</td>
                               <td>{{ $slider->link }}</td>
                               <td>{{ $slider->status == 1 ? 'Active' : 'Inactive'}}</td>
                               <td>{{ carbon\carbon::parse($slider->created_at)->format('d M, Y') }}</td>
                               <td>
                                   <a href="{{ route("home.edit", ['id'=>$slider->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this catigory?') || event.stopImmediatePropagation()" href="{{ route("home.delete", ['id'=>$slider->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                               
                            </tbody>
                            @endforeach

                   </table>
                   {{ $sliders->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection