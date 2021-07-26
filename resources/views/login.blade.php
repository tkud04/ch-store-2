<?php
$title = "Log In / Sign Up";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>
@extends('layout')

@section('content')
<script>
$(document).ready(() => {
	$('.register-div').hide();
});
</script>
				<div class="container pt-1">
					<form action="{{url('login')}}" id="login-form" method="post" class="form mt-5">	
						{!! csrf_field() !!}		
                        <input type="hidden" name="rdr" value="{{$rdr}}">
                      <!--  <p class="mb-2">
						Don't have an account? <a href="{{url('register').'?rdr='.$rdr}}" class="text-secondary">Register</a>
					</p>	-->					
									<label>Email to log in / sign up <span class="req">*</span></label>
									<input type="email" class="form-control" name="id" id="login-email" required="">
									
									<label>Have a Password? <span class="req">*</span></label>
									<select id="login-has-pass" name="lhp" class="form-control">
										<option value="none">Select an option</option>
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									
									<div class="row register-div">
									  <div class="col-md-6">
										<label>First Name <span class="req">*</span></label>
									    <input type="text" id="login-pass-fname" name="fname" class="form-control" placeholder="Your first name">
									  </div>
									  <div class="col-md-6">
									   <label>Last Name <span class="req">*</span></label>
									    <input type="text" id="login-pass-lname" name="lname" class="form-control" placeholder="Your last name">
									  </div>
									</div>
									
									<label>Password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass" id="login-pass" placeholder="Your password">
										
									<div class="login-div">
                                       <a href="{{url('forgot-password')}}" class="text-primary">Forgot Password? </a>   
                                    </div>
										
                                    <div class="register-div">
                                       <label>Re-enter Password <span class="req">*</span></label>
				      <input type="password" class="form-control" name="pass_confirmation" id="login-pass-2" placeholder="Confirm password">
				      
				      <div style="padding: 10px; border: 1px dashed skyblue;">
				        <p class="mb-2">TIP: Passwords must be at least 8 characters.</p>
					<p>We suggest using a combination of uppercase letters, lowercase letters, numbers and symbols to protect your password.</p>
				      </div>
                                    </div>
                                    
									<button id="login-submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
@stop
