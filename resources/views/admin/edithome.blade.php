@extends('layout')
@section('main')
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                          Add New Slider
                       </div>
                       <div class="col-md-6">
                           <a href="{{ url("/admin/home") }}" class="btn btn-success pull-right">All Sliders</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">

                    {{-- @if (Session::has('message'))
                    <div class="alert alert-success">
                         {{  Session::get('message')}}          
                    </div>
                        
                    @endif --}}
                      <form action="{{ route("home.update", ['id'=>$slider->id]) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Title</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="title" value="{{ $slider->title }}" placeholder=" Title">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Subtitle </label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $slider->subtitle }}" name="subtitle" placeholder="Subtitle">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Price </label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $slider->price }}" name="price" placeholder="Price">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Image </label>
                         <div class="col-md-4">
                           <input type="file" class="form-control input-md" value="{{ $slider->image }}" name="image" placeholder="Image">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Link </label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="link" value="{{ $slider->link }}" placeholder="Link">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Status </label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="status" value="{{ $slider->status }}" placeholder="Status">
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