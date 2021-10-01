@extends('layout')
@section('main')
<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
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
                        <div class="register-form form-item ">
                            <form class="form-stl" action="{{ url('/register') }}" name="frm-login" method="POST" >
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">Name*</label>
                                    <input type="text" id="frm-reg-lname" name="name" placeholder="Your name*">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="email" id="frm-reg-email" name="email" placeholder="Email address">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Phone *</label>
                                    <input type="text" id="frm-reg-email" name="phone" placeholder="phone ">
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">address *</label>
                                    <input type="text" id="frm-reg-email" name="address" placeholder="address ">
                                </fieldset>
                                <fieldset class="wrap-functions ">
                                    <label class="remember-field">
                                        <input name="newletter" id="new-letter" value="forever" type="checkbox"><span>Sign Up for Newsletter</span>
                                    </label>
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Login Information</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password *</label>
                                    <input type="password" id="frm-reg-pass" name="password" placeholder="***********">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass">Confirm Password *</label>
                                    <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="*********">
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half "> 
                                    <label for=""></label>
                                    <select name="role_id" required>
                                       <option value="1">Admin</option> 
                                       <option value="2">User</option> 
                                    </select>
                                </fieldset> 

                                <input type="submit" class="btn btn-sign" >
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