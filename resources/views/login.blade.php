<?php
$title = "Log In/ Sign Up";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>
@extends('layout')

@section('content')
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
									<select id="login-has-pass">
										<option value="none">Select an option</option>
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select>
									
									<div class="row register-div">
									  <div class="col-md-6">
										<label>First Name <span class="req">*</span></label>
									    <input type="text" id="login-pass-fname" class="form-control" placeholder="Your first name">
									  </div>
									  <div class="col-md-6">
									   <label>Last Name <span class="req">*</span></label>
									    <input type="text" id="login-pass-lname" class="form-control" placeholder="Your last name">
									  </div>
									</div>
									
									<label>Password</label>
									<input type="password" class="form-control" name="pass" id="login-pass">

									<button id="login-submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
@stop
