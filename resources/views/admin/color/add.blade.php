@extends('layout')
@section('main')
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                          Add New Catigory
                       </div>
                       <div class="col-md-6">
                           <a href="{{ url("/admin/cats") }}" class="btn btn-success pull-right">All Catigories</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('message'))
                    <div class="alert alert-success">
                         {{  Session::get('message')}}          
                    </div>
                        
                    @endif
                      <form action="{{ route("color.store") }}" method="POST" class="form-horizontal">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Color Name</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="name" placeholder="Color Name">
                         </div>
                     </div>
                     
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label"></label>
                         <div class="col-md-4">
                             <button type="submit" class="btn btn-primery">Add</button>
                         </div>
                     </div>
 
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection