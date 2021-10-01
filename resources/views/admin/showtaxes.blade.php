@extends('layout')
@section('main')
<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                      <div class="col-md-6">  All Taxes</div>
                      <div class="col-md-6">
                          <a href="{{ route("tax.create") }}" class="btn btn-success pull-right">Add New Tax</a>
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
                               <th>Tax Name</th>
                               <th>percentage</th>
                               <th>active </th>
                               <th>start_date</th>
                               <th>end_date</th>
                               <th>Action</th>
                             
                           </tr>
                       </thead>
                       @foreach ($taxes as $tax )

                       <tbody>
                               <td>{{ $tax->id }}</td>
                               <td>{{ $tax->name }}</td>
                               <td>{{ $tax->percentage }}</td>
                               @if ($tax->active == 1)
                               <td>Active</td>
                               @else
                               <td>Inactive</td>
                               @endif
                               <td>{{ $tax->start_date }}</td>
                               <td>{{ $tax->end_date }}</td>
                               <td>
                                   <a href="{{ route('tax.edit', ['id'=>$tax->id]) }}" class="text-info">
                                   <i class="fa fa-edit fa-2x"></i>
                                  </a>
                                  <a onclick="confirm('Are you sure , you want to delete this tax?') || event.stopImmediatePropagation()" href="{{ route("tax.delete", ['id'=>$tax->id]) }}" class="text-info" style="margin-left: 10px;">
                                <i class="fa fa-times fa-2x"></i></a>
                               </td>
                       </tbody>
                       @endforeach

                   </table>
                   {{ $taxes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection