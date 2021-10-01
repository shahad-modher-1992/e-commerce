@extends('layout')
@section('main')
    
<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="row">
                       <div class="col-md-6">
                          Add New Tax
                       </div>
                       <div class="col-md-6">
                           <a href="{{ url("/admin/tax/show") }}" class="btn btn-success pull-right">All Tax</a>
                       </div>
                   </div>
                </div>
                <div class="panel-body">
                      <form action="{{ route("tax.store") }}" method="POST" class="form-horizontal">
                     @csrf
                      
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Tax Name</label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="name" placeholder="Tax Name">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">percentage </label>
                         <div class="col-md-4">
                           <input type="text" class="form-control input-md" name="percentage" placeholder="percentage">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">active </label>
                         <div class="col-md-4">
                             <select name="active" class="form-control input-md">
                                 <option value="">Select</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">start_date </label>
                         <div class="col-md-4">
                           <input type="date" class="form-control input-md" name="start_date" placeholder="start_date">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">end_date </label>
                         <div class="col-md-4">
                           <input type="date" class="form-control input-md" name="end_date" placeholder="end_date">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Country </label>
                         <div class="col-md-4">

                            @foreach ($countries as $country )
                            <input type="checkbox" name="country[]"  value="{{ $country->id }}" style="margin-left :15px">
                            <label for=""> {{ $country->name }}</label>
                            @endforeach               
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