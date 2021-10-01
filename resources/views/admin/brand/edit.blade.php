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
                      <form action="{{ route("brand.update", ['id'=>$brand->id]) }}" method="POST" class="form-horizontal">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Brand Name</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" value="{{ $brand->name }}" name="name" >
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Catigory Name</label>
                         <div class="col-md-4">
                             <select name="catigory_id" class="form-control input-md">
                                 <option value="{{ $catigory->id }}">{{ $catigory->name }}</option>
                                 @foreach ($cats as $cat)
                                 <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                 @endforeach
                             </select>
                           {{-- <input type="text" class="form-control input-md" value="{{ $brand->name }}" name="name" > --}}
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