<div class="wrap-search center-section">
        <form action="{{ route("shop.search")}}" method="POST">
            @csrf
           
<div class="col-md-10">

<div class="row ">

    <div class="input-group">

      <div class="col-md-6" style="margin: auto 0px;">
        <input type="text" name="search" aria-label="First name" class="form-control" placeholder="search..">
        <input type="hidden" name="search_product">
      </div>
    <div class="col-md-5" style="margin: auto 0px;">

        <select type="text" name="cat" aria-label="Last name" class="form-control">
            <option value="0">All Catigories</option>
            @foreach ($cats as $cat )
            <option class="level-0" value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
        </select>
    </div>
    <div class="col-md-1 " style="margin: auto 0px;">
        <button type="submit" class="btn btn-danger " style="padding: 9px"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    
</div>
        </form>
    </div>
</div>

</div>
