	<!--header-->
	<header id="header" class="header header-style-1">

		<style>
			.fa-bell{
				/* color:#cbcbcb; */
				position: relative;

			}
			.fa-bell:hover {
				 color:#cbcbcb !important; 
			}
			.count{
				position: absolute;
				font-size: 20px;
				top:-6px;
				right: -2px;
				color: red;
			}
		</style>
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								@guest
								<li class="menu-item" ><a title="Register or Login" href="{{ url("/login") }}">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="{{ url("/register") }}">Register</a></li>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-en.png') }}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset("assets/images/lang-hun.png") }}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-ger.png') }}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-fra.png') }}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-can.png') }}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								@endguest
								@auth
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-en.png') }}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset("assets/images/lang-hun.png") }}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-ger.png') }}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-fra.png') }}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-can.png') }}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
								@if (Auth::user()->role_id == 1)
								
								<li class="menu-item lang-menu menu-item-has-children parent" >
									<a title="my account" href="#">{{ Auth::user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Dashbord" href="{{ url("/admin/dashbord") }}">Dashbord</a>
										</li>
										<li class="menu-item" >
											<a title="catigory" href="{{ url('/admin/cats') }}">All Catigories</a>
										</li>
										<li class="menu-item" >
											<a title="brand" href="{{ url('/admin/brand/show') }}">All Brands</a>
										</li>
										<li class="menu-item" >
											<a title="color" href="{{ url('/admin/color/show') }}">All Colors</a>
										</li>
										<li class="menu-item" >
											<a title="product" href="{{ url('/admin/products') }}">Products</a>
										</li>
										<li class="menu-item" >
											<a title="homeslider" href="{{ url('/admin/home') }}">Manage Home Slider</a>
										</li>
										<li class="menu-item" >
											<a title="Sale" href="{{ url('/admin/sale') }}">Sale Setting</a>
										</li>
										<li class="menu-item" >
											<a title="country" href="{{ url('/admin/country/show') }}">All Country</a>
										</li>
										<li class="menu-item" >
											<a title="taxes" href="{{ url('/admin/tax/show') }}">All Taxes</a>
										</li>
										<li class="menu-item" >
											<a title="orders" href="{{ url('/admin/order/all') }}">All orders</a>
										</li>
									
										<li class="menu-item" >
											<a title="log out" href="{{ url("logout") }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()" >Logout</a>
										</li>
									<form  id="form-logout"action="{{ url('logout') }}" method="POST">
									@csrf
									</form>

									</ul>
								</li>
								
							

								@else
								<li class="menu-item lang-menu menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">{{ Auth::user()->name }}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="user" href="{{ route('user.show') }}">{{ Auth::user()->name }}</a>
										</li>
										<li class="menu-item" >
											<a title="user" href="{{ route('order.show') }}">My Order</a>
										</li>
										<li class="menu-item" >
											<a title="log out" href="{{ url("logout") }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()" >Logout</a>
										</li>
								    	<form  id="form-logout"action="{{ url('logout') }}" method="POST">
								    	@csrf
								    	</form>
									
									</ul>
								</li>
								@endif

								<li class="menu-item menu-item-has-children parent" >
									
									@if(Auth::user()->unreadNotifications->count() == 0)
									<a title="" href="#"><i class="fa fa-bell fa-2x " aria-hidden="false"></i>
									<strong class="count"></strong>
									</a>
									@else
									<a title="" href="#"><i class="fa fa-bell-o fa-2x " aria-hidden="false"></i>
										<strong class="count text-danger">{{ Auth::user()->unreadNotifications->count() }}</strong>
									</a>
									@endif
									<ul class="submenu curency" >
										@foreach (Auth::user()->notifications as $item )
										@if ($item->unread())
										<li class="menu-item bg-danger" >
											<a href="{{ route('order.show', ['id'=> $item->data['data']['id'], 'notifyId'=> $item->id]) }}">New Order Created #{{ $item->data['data']['id'] }}</a>
										</li>
										@else
										<li class="menu-item bg-success" >
											<a  href="{{ route('order.show', ['id'=> $item->data['data']['id'], 'notifyId'=> $item->id]) }}">New Order Created #{{ $item->data['data']['id'] }}</a>
										</li>
										@endif
									
										@endforeach
										
										
									</ul>
								</li>
								@endauth
								
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{ route('user.show') }}" class="link-to-home"><i class="fa fa-user fa-4x" style="color:#5cadf0"></i></a>
						</div>

						@livewire('header-search-livewire')
						<div class="wrap-icon right-section">					
							@livewire('counter-component')
							@livewire('counter-cart')
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{ url("/") }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="{{ url("/shop") }}" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/cart') }}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="{{ url("/checkout") }}" class="link-term mercado-item-title">Checkout</a>
								</li>
								{{-- <li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>																	 --}}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>