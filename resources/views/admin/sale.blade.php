@extends('layout')
@section('main')

<div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Sale Setting
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
                <div class="panel-body">

                    @if (Session::has("message")) 
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                        
                    @endif
                    <form action="{{ url("/admin/sale/update") }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select name="status" class="form-control">
                                  <option value="0">Inactive</option>
                                  <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Sale Date</label>
                            <div class="col-md-4">
                                <input type="text" id="sale-date"  value="{{ $sale->sale_date }}" name="sale_date" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4"></label>
                            <div class="col-md-4">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

$(function() {
$('#sale-date').datetimepicker({
    format : "Y/MM/DD h:m:s"
});

 })
</script>

@endsection

