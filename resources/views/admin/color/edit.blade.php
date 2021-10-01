@extends('layout')
@section('main')
    
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                          Edit Color
                       </div>
                       <div class="col-md-6">
                           <a href="{{ url("/admin/color/show") }}" class="btn btn-success pull-right">All Colors</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">

                      <form action="{{ route("color.update", ['id'=>$color->id]) }}" method="POST" class="form-horizontal">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Color Name</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="name" value="{{ $color->name }}">
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