@extends('layout')
@section('main')

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class="row">
				@if ($errors->any() )
				@foreach ($errors->all() as $error)
				<div class="alert alert-danger">
				  <p> {{ $error }} </p>  
				</div>
				@endforeach
				@endif
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
								<form  method="POST" action="{{ url("/login") }}">
									@csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">Log in to your account</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">Email Address:</label>
										<input type="email" id="frm-login-uname" name="email" placeholder="Type your email address">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Password:</label>
										<input type="password" id="frm-login-pass" name="password" placeholder="************">
									</fieldset>
									
									<fieldset class="wrap-input">
										<label class="remember-field">
											<input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
										</label>
										<a class="link-function left-position" href="{{ url("forgot-password") }}" title="Forgotten password?">Forgotten password?</a>
									</fieldset>
									<input type="submit" class="btn btn-submit">
								</form>
							</div>
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
    
@endsection