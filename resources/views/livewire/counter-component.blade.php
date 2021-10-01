<div class="wrap-icon-section wishlist">
	<a href="#" class="link-direction">
		<i class="fa fa-heart" aria-hidden="true"></i>
		<div class="left-info">
			@if ($product->count() > 0 )
			<span class="index">{{ $product->count() }} item</span>

			@endif
			<a href="{{ route('wishlist') }}"><span class="title" >Wishlist</span></a>
		</div>
	</a>
</div>
	
	
	
