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
									<div class="row">
									  <div class="col-md-6">
									    <input type="radio" id="login-pass-yes"> Yes
									  </div>
									  <div class="col-md-6">
									    <input type="radio" id="login-pass-no"> No
									  </div>
									</div>
									
									<label>Password</label>
									<input type="password" class="form-control" name="pass" id="login-pass">

									<button id="login-submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
@stop
