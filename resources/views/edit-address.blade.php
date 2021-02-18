<?php
$title = $a['title'];
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<div class="container pt-1">
	<div class="row">
      <div class="col-md-12">
	    <form action="{{url('edit-address')}}" id="ea-form" method="post" class="form">
									{!! csrf_field() !!}
									<input type="hidden" name="xf" value="{{$a['user_id']}}">
									<input type="hidden" name="type" value="{{$a['type']}}">
									
									<div class="row">
										<div class="col-sm-6">
											<label>First Name <span class="req">*</span></label>
											<input type="text" class="form-control" name="fname" value="{{$a['fname']}}" id="ea-fname" required="">
										</div>
										<div class="col-sm-6">
											<label>Last Name <span class="req">*</span></label>
											<input type="text" class="form-control" name="lname" value="{{$a['lname']}}" id="ea-lname" required="">
										</div>

										<div class="col-sm-6">
									       <label>Address Line 1<span class="req">*</span></label>
									      <input type="text" class="form-control" value="{{$a['address_1']}}" name="address_1" id="ea-address-1" required="">
			                            </div>
										<div class="col-sm-6">
									       <label>Address Line 2</label>
									     <input type="text" class="form-control" value="{{$a['address_2']}}" name="address_2" id="ea-address-2" required="">
			                            </div>
										
										<div class="col-sm-6">
									       <label>City<span class="req">*</span></label>
									      <input type="text" class="form-control" value="{{$a['city']}}" name="city" id="ea-city" required="">
			                            </div>
										<div class="col-sm-6">
									       <label>Region/State<span class="req">*</span></label>
									     <input type="text" class="form-control" value="{{$a['region']}}" name="region" id="ea-region" required="">
			                            </div>
										
										<div class="col-sm-6">
									       <label>Postal code</label>
									      <input type="text" class="form-control" value="{{$a['zip']}}" name="zip" id="ea-zip" required="">
			                            </div>
										<div class="col-sm-6">
									       <label>Country<span class="req">*</span></label>
									     <select class="form-control" name="country" id="ea-country" required="">
			                               <option value="none">Select country</option>
										   <?php
										    foreach($countries as $k => $v)
											{
												$ss = $k == $a['country'] ? " selected='selected'" : "";
										   ?>
			                               <option value="{{$k}}"{{$ss}}>{{$v}}</option>
										   <?php
											}
										   ?>
										 </select>
										</div>
									</div>

									<button id="ea-submit" class="btn btn-primary btn-reveal-right">SUBMIT<i class="d-icon-arrow-right"></i></button>
		</form>
	  </div>          
	</div>
</div>
@stop
