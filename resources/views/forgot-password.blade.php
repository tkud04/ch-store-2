<?php
$title = "Forgot Password";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>
@extends('layout')

@section('content')

				<div class="container pt-1">
					<form action="{{url('forgot-password')}}" id="fp-form" method="post" class="form mt-5">	
						{!! csrf_field() !!}		
                        <input type="hidden" name="rdr" value="{{$rdr}}">
                       <p class="mb-2">
						Can't access your account? No worries! We'll send a reset link to your email.
					</p>				
									<label>Enter your email address <span class="req">*</span></label>
									<input type="email" class="form-control" name="id" id="login-email" required="">
									
                                    
									<button type="submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
@stop
