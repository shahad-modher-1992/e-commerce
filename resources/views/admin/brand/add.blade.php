@extends('layout')
@section('main')
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                          Add New Brand
                       </div>
                       <div class="col-md-6">
                           <a href="{{ url("/admin/brand/show") }}" class="btn btn-success pull-right">All Brands</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('message'))
                    <div class="alert alert-success">
                         {{  Session::get('message')}}          
                    </div>
                        
                    @endif
                      <form action="{{ route("brand.store") }}" method="POST" class="form-horizontal">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Brand Name</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="name" placeholder="Brand Name">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Catigory</label>
                         <div class="col-md-4">
                             <select name="catigory_id" class="form-control input-md">
                               @foreach ($catigories as $cat)
                                   <option value="{{ $cat->id }}">{{ $cat->name }} </option>
                               @endforeach
                             </select>
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