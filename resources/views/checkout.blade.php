<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('scripts')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@stop

@section('content')
<script>

let pd = [], sd = [], ppd = null, pm = "none", ct = "", cts = [1,2,3,4,5,6];

$(document).ready(() => {

getCT();
initCT();

@if(count($pd) > 0)
  @foreach($pd as $p)
   pd.push({
	  xf: "{{$p['id']}}",
	  fname: "{{$p['fname']}}",
	  lname: "{{$p['lname']}}",
	  company: "{{$p['company']}}",
	  address_1: "{{$p['address_1']}}",
	  address_2: "{{$p['address_2']}}",
	  city: "{{$p['city']}}",
	  region: "{{$p['region']}}",
	  zip: "{{$p['zip']}}",
	  country: "{{$p['country']}}",
   });
  @endforeach
@endif

@if(count($sd) > 0)
  @foreach($sd as $p)
   sd.push({
	  xf: "{{$p['id']}}",
	  fname: "{{$p['fname']}}",
	  lname: "{{$p['lname']}}",
	  company: "{{$p['company']}}",
	  address_1: "{{$p['address_1']}}",
	  address_2: "{{$p['address_2']}}",
	  city: "{{$p['city']}}",
	  region: "{{$p['region']}}",
	  zip: "{{$p['zip']}}",
	  country: "{{$p['country']}}",
   });
  @endforeach
@endif
 
    let hh = ['#checkout-cd-loading','#card-2','#checkout-loading','#checkout-tab-2','#checkout-tab-3','#checkout-tab-4','#checkout-tab-5','#checkout-tab-6'];
	
  hh.forEach((x,i) => {$(x).hide();});
  
  initSDSummary();
});
</script>
<div class="container">
  <div class="row">
     <div class="col-md-12">
       <div class="cd-wrapper">
		 @include('checkout-header',['number' => 2])
				
	     <div class="cd-content">
		  <h2 class="cd-caption">select shipping method:</h2>
          <div class="row">
		     
		     <div class="col-md-12">
			    <table class="cd-table">
                  <tbody>
				   <tr>
                    <th>  <img src="images/truck.png" style="width: 40px; height: 48px; margin-right: 10px; max-width: none !important;"></th>
                    <td>
                      <span class="cd-table-span">Free Delivery</span>
                    </td>
                  </tr>
                 </tbody>
				</table>
			 </div>
			 <div class="col-md-12 mt-5">
			    <h2 class="cd-caption">details for delivery:</h2>
				<div style="border: 3px solid #000!important; padding: 8px!important;">
				  <div id="sd-display"></div>
				</div>
		     </div>	
			 <div class="col-md-12 mt-5">
			   <h2 class="cd-caption">delivery option:</h2>
			   <div class="row">
			     <div class="col-md-6 mt-5">
				   <div style="border: 3px solid #000!important; padding: 8px!important;">
				     <div id="scd-display"></div>
				   </div>
		         </div>
			     <div class="col-md-6 mt-5">
				   <div style="border: 3px solid #000!important; padding: 8px!important;">
				     <div id="scd-display"></div>
				   </div>
		         </div>	
		       </div>	
		     </div>	
			 	  
		  </div>		  
	     </div>
       </div>
     </div>
   </div>
</div>
@stop
