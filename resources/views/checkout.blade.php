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
			   <h2 class="cd-caption">choose delivery option:</h2>
			   <h4 class="cd-header">1 of 1 options:</h4>
			   <div class="row">
			     <div class="col-md-6 mt-5">
				   <div style="border: 3px solid #000!important; padding: 8px!important;">
				     <div>
					 									   <table class="table table-responsive" style="align: center !important;">
											<thead>
												<tr>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php
								$cc = (isset($cart)) ? count($cart) : 0;
								   $subtotal = 0;
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
									 $xf = $item['id'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									 $subtotal += ($itemAmount * $qty);
									 $imgs = $item['imggs'];
									 $uu = url('product')."?xf=".$xf;
									 $ru = url('remove-from-cart')."?xf=".$xf;
				                 ?>
												<tr>
												<div class="row">
												   <div class="col-3 col-md-3">
												     <a href="{{$uu}}">
													   <img src="{{$imgs[0]}}" width="100" height="100" alt="{{$item['name']}}">
												     </a>
												   </div>
												   <div class="col-5 col-md-5">
												     <a href="{{$uu}}">
													   <p><b>{{$item['name']}}</b></p>
												     </a>
												   </div>
												   <div class="col-2 col-md-2">
													   <p><b>Qty</b></p>
													   <p>{{$qty}}</p>
												   </div>
												   <div class="col-2 col-md-2">
												     <p><b>Total</b></p>
													   <p>&#0163;{{number_format($itemAmount * $qty,2)}}</p>
												   </div>
												</div>
												
												</tr>
												<?php
								   }
                                                                    $pc = 0.1 * $subtotal;
																	$xx = $subtotal;
																	if(count($sud) == 0) $xx = $subtotal - $pc;
									?>
												
											</tbody>
										</table>

					 </div>
				   </div>
		         </div>
			     <div class="col-md-6 mt-5">
				   <div style="border: 3px solid #000!important; padding: 8px!important;">
				    <h4 class="cd-header">your final order</h4>
				     <div>
					 									   <table class="table table-responsive" style="align: center !important;">
											<thead>
												<tr>
													<th></th>
												</tr>
											</thead>
											<tbody>
											  <tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Subtotal</h4>
													</td>
													<td class="summary-subtotal-price">&#0163;{{number_format($subtotal,2)}}
													</td>												
												</tr>
												<tr class="sumnary-shipping shipping-row-last">
													
													<td>
														<h4 class="summary-subtitle">Shipping</h4>
													</td>
													<td>
														<p class="summary-total-price">Free Shipping</p>
													</td>
												</tr>
												@if(count($sud) == 0)
                                                <tr class="sumnary-shipping shipping-row-last">
													
													<td>
														<h4 class="summary-subtitle">10% Discount</h4>
													</td>
													<td>
														<p class="summary-total-price">&#0163;{{number_format($pc,2)}}</p>
													</td>
												</tr>
												@endif
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Total</h4>
													</td>
													<td>
														<p class="summary-total-price">&#0163;{{number_format($xx,2)}}</p>
													</td>												
												</tr>
											</tbody>
							</table>
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
