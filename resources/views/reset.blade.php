<?php
$title = "Reset Password";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>
@extends('layout')

@section('content')

				<div class="container pt-1">
					<form action="{{url('reset')}}" id="r-form" method="post" class="form mt-5">	
						{!! csrf_field() !!}		
                        <input type="hidden" name="acsrf" value="{{$x->id}}">
                       <p class="mb-2">
						Set your new password.
					</p>				
									<label>Enter your new password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass" required="">
									
									<label>Confirm password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass_confirmation" required="">
									
                                    
									<button type="submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
@stop
