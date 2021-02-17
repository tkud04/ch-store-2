<?php
$title = "Sign In";
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

                        <p class="mb-2">
						Don't have an account? <a href="{{url('register')}}" class="text-secondary">Register</a>
					</p>						
									<label>Email address <span class="req">*</span></label>
									<input type="email" class="form-control" name="id" id="login-email" required="">
									
									<label>Password</label>
									<input type="password" class="form-control" name="pass" id="login-pass">

									<button id="login-submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
@stop
