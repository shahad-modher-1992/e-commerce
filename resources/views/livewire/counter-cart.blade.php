<div class="wrap-icon-section minicart">
         
    <a href="#" class="link-direction">
    <i class="fa fa-shopping-basket" aria-hidden="true"></i>

    <div class="left-info">
      @if (Auth::check()) 
      <span class="index">{{ $c_product->count() }}</span>
      @endif
      <span class="title">CART</span>
    </div>
    </a>
</div>
