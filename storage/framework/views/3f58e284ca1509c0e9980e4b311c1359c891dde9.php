<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('scripts'); ?>
 <script src="https://www.paypal.com/sdk/js?currency=GBP&client-id=<?php echo e($pp[0]); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
								   }
								   
								    $pc = 0.1 * $subtotal;
																	$xx = $subtotal;
																	if(count($sud) == 0) $xx = $subtotal - $pc;
?>

<script>

let pd = [], sd = [], ppd = null, pm = "none", ct = "", cts = [1,2,3,4,5,6];

$(document).ready(() => {

getCT();
initCT("<?php echo e($xx); ?>");

<?php if(count($pd) > 0): ?>
  <?php $__currentLoopData = $pd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   pd.push({
	  xf: "<?php echo e($p['id']); ?>",
	  fname: "<?php echo e($p['fname']); ?>",
	  lname: "<?php echo e($p['lname']); ?>",
	  company: "<?php echo e($p['company']); ?>",
	  address_1: "<?php echo e($p['address_1']); ?>",
	  address_2: "<?php echo e($p['address_2']); ?>",
	  city: "<?php echo e($p['city']); ?>",
	  region: "<?php echo e($p['region']); ?>",
	  zip: "<?php echo e($p['zip']); ?>",
	  country: "<?php echo e($p['country']); ?>",
   });
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(count($sd) > 0): ?>
  <?php $__currentLoopData = $sd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   sd.push({
	  xf: "<?php echo e($p['id']); ?>",
	  fname: "<?php echo e($p['fname']); ?>",
	  lname: "<?php echo e($p['lname']); ?>",
	  company: "<?php echo e($p['company']); ?>",
	  address_1: "<?php echo e($p['address_1']); ?>",
	  address_2: "<?php echo e($p['address_2']); ?>",
	  city: "<?php echo e($p['city']); ?>",
	  region: "<?php echo e($p['region']); ?>",
	  zip: "<?php echo e($p['zip']); ?>",
	  country: "<?php echo e($p['country']); ?>",
   });
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
 
    let hh = ['#checkout-cd-loading','#card-2','#checkout-loading','#sd-edit','#pd-edit'];
	
  hh.forEach((x,i) => {$(x).hide();});
  
  initSDSummary();
  initPDSummary();
  
  $('#payc-tab').hide();
  $('#payp-tab').hide();
});
</script>
<div class="container">
  <div class="row">
     <div class="col-md-12">
	  <input type="hidden" id="tk" value="<?php echo e(csrf_token()); ?>">
       <div class="cd-wrapper">
		 <?php echo $__env->make('checkout-header',['number' => 2], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
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
				  <div id="sd-edit">
				   <form>
				     <select class="form-control sd" id="checkout-sd" name="sd">
									    <option value="none">Add new shipping detail</option>
										<?php
										 if(count($sd) > 0)
										 {
											 foreach($sd as $s)
											 {
										?>
									    <option value="<?php echo e($s['id']); ?>"><?php echo e($s['address_1'].", ".$s['city'].", ".strtoupper($s['country'])); ?></option>
									    <?php
											 }
										 }
										?>
									  </select>
				     <div class="row">
					   <div class="col-md-6 mt-5">
					     <label>First Name *</label>
						 <input type="text" class="form-control sd" id="sd-fname" name="sd-fname" required="">
					   </div>
					   <div class="col-md-6 mt-5">
					     <label>Last Name *</label>
						 <input type="text" class="form-control sd" id="sd-lname" name="sd-lname" required="">
					   </div>
					   <label>Company Name(Optional)</label>
								<input type="text" class="form-control sd" id="sd-company" name="sd-company" required="">
								<label>Country / Region *</label>
								<select class="form-control sd" id="sd-country" name="sd-country">
									    <option value="none">Select country</option>
									    <option value="uk">United Kingdom</option>
										<?php
										 if(count($countries) > 0)
										 {
											 foreach($countries as $k => $v)
											 {
										?>
									    <option value="<?php echo e($k); ?>"><?php echo e($v); ?></option>
									    <?php
											 }
										 }
										?>
									  </select>
								<label>Street Address *</label>
								<input type="text" class="form-control sd" id="sd-address-1" name="sd-address-1" required="" placeholder="Address line 1">
								<input type="text" class="form-control sd" id="sd-address-2" name="sd-address-2" required="" placeholder="Address line 2">
								<div class="row">
									<div class="col-xs-6">
										<label>Town / City *</label>
										<input type="text" class="form-control sd" id="sd-city" name="sd-city" required="">
									</div>
									<div class="col-xs-6">
										<label>State / County *</label>
										<input type="text" class="form-control sd" id="sd-region" name="sd-region" required="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label>Postcode / ZIP *</label>
										<input type="text" class="form-control sd" id="sd-zip" name="sd-zip" required="">
									</div>
								</div>
					 </div>
					 <a href="javascript:void(0)" id="sd-done" class="btn btn-sm btn-primary mt-5" style="text-align: right;">Done</a>
					 <a href="javascript:void(0)" id="sd-cancel" class="btn btn-sm btn-primary mt-5" style="text-align: right;">Cancel</a>
				   </form>
				  </div>
				</div>
		     </div>	
			 <div class="col-md-12 mt-5">
			   <h2 class="cd-caption">choose delivery option:</h2>
			   <h4 class="cd-header">1 of 1 options:</h4>
			   <div class="row">
			     <div class="col-md-6 mt-5">
				   <div style=" padding: 8px!important;">
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
												     <a href="<?php echo e($uu); ?>">
													   <img src="<?php echo e($imgs[0]); ?>" width="100" height="100" alt="<?php echo e($item['name']); ?>">
												     </a>
												   </div>
												   <div class="col-5 col-md-5">
												     <a href="<?php echo e($uu); ?>">
													   <p><b><?php echo e($item['name']); ?></b></p>
												     </a>
												   </div>
												   <div class="col-2 col-md-2">
													   <p><b>Qty</b></p>
													   <p><?php echo e($qty); ?></p>
												   </div>
												   <div class="col-2 col-md-2">
												     <p><b>Total</b></p>
													   <p>&#0163;<?php echo e(number_format($itemAmount * $qty,2)); ?></p>
												   </div>
												</div>
												
												</tr>
												<?php
								   }
                                                                   
									?>
												
											</tbody>
										</table>

					 </div>
				   </div>
		         </div>
			     <div class="col-md-6 mt-5">
				   <div style=" padding: 8px!important;">
				    <div style="margin-bottom: 5px; padding: 10px; border: 1px dashed skyblue;">
					  Standard - Get it in 2 to 5 working days
					</div>
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
														<h5 class="cd-caption mt-4">Subtotal:</h5>
													</td>
													<td>
													 &#0163;<?php echo e(number_format($subtotal,2)); ?>

													</td>												
												</tr>
												<tr class="sumnary-shipping shipping-row-last">
													
													<td>
														<h5 class="cd-caption mt-4">Shipping:</h5>
													</td>
													<td>
													 Free Shipping
													</td>
												</tr>
												<?php if(count($sud) == 0): ?>
                                                <tr class="sumnary-shipping shipping-row-last">
													
													<td>
														<h5 class="cd-caption mt-4">10% Discount:</h5>
													</td>
													<td>
														&#0163;<?php echo e(number_format($pc,2)); ?>

													</td>
												</tr>
												<?php endif; ?>
												<tr class="summary-subtotal">
													<td>
														<h5 class="cd-caption mt-4">VAT:</h5>
													</td>
													<td>
														&#0163;<?php echo e(number_format($xx,2)); ?>

													</td>												
												</tr>
												<tr class="summary-subtotal">
													<td>
														<h5 class="cd-caption mt-4">Total inc vat:</h5>
													</td>
													<td>
														&#0163;<?php echo e(number_format($xx,2)); ?>

													</td>												
												</tr>
											</tbody>
							</table>
				   </div>
		         </div>	
		       </div>	
		     </div>	
			 	  
		  </div>	
          <div class="col-md-12 mt-5">
			    <h2 class="cd-caption">billing address:</h2>
				<div style="margin-bottom: 5px; padding: 10px; border: 1px dashed skyblue;">
					  Your billing address must match the address to which your card is registered.
					</div>
				<div style="border: 3px solid #000!important; padding: 8px!important;">
				  <div id="pd-display"></div>
				  <div id="pd-edit">
				     <form>
					   <select class="form-control" id="checkout-pd" name="pd">
									    <option value="none">Add new billing detail</option>
										<?php
										 if(count($pd) > 0)
										 {
											 foreach($pd as $p)
											 {
										?>
									    <option value="<?php echo e($p['id']); ?>"><?php echo e($p['address_1'].", ".$p['city'].", ".strtoupper($p['country'])); ?></option>
									    <?php
											 }
										 }
										?>
									  </select>
						<div class="row">
						  <div class="col-xs-6">
										<label>First Name *</label>
										<input type="text" class="form-control bd" id="pd-fname" name="pd-fname" required="">
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control bd" id="pd-lname" name="pd-lname" required="">
									</div>
								<label>Company Name(Optional)</label>
								<input type="text" class="form-control bd" id="pd-company" name="pd-company" required="">
								<label>Country / Region *</label>
								<select class="form-control bd" id="pd-country" name="pd-country">
									    <option value="none">Select country</option>
									    <option value="uk">United Kingdom</option>
										<?php
										 if(count($countries) > 0)
										 {
											 foreach($countries as $k => $v)
											 {
										?>
									    <option value="<?php echo e($k); ?>"><?php echo e($v); ?></option>
									    <?php
											 }
										 }
										?>
									  </select>
								<label>Street Address *</label>
								<input type="text" class="form-control bd" id="pd-address-1" name="pd-address-1" required="" placeholder="Address line 1">
								<input type="text" class="form-control bd" id="pd-address-2" name="pd-address-2" required="" placeholder="Address line 2">
								<div class="row">
									<div class="col-xs-6">
										<label>Town / City *</label>
										<input type="text" class="form-control bd" id="pd-city" name="pd-city" required="">
									</div>
									<div class="col-xs-6">
										<label>State / County *</label>
										<input type="text" class="form-control bd" id="pd-region" name="pd-region" required="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label>Postcode / ZIP *</label>
										<input type="text" class="form-control bd" id="pd-zip" name="pd-zip" required="">
									</div>
								</div>						
						</div>
						<a href="javascript:void(0)" id="pd-done" class="btn btn-sm btn-primary mt-5" style="text-align: right;">Done</a>
					 <a href="javascript:void(0)" id="pd-cancel" class="btn btn-sm btn-primary mt-5" style="text-align: right;">Cancel</a>
				     <form>
				   </div>
				</div>
		     </div>		
			 <div class="col-md-12 mt-5">
			    <h4 class="cd-header">payment option:</h4>
				<div>
				  <div class="row">
			        <div class="col-md-6">
					  <div class="row">
					    <div class="col-md-6">
					      <center><a href="javascript:void(0)" id="payc" class="btn btn-primary mb-5">Pay via card</a></center>
					    </div>
						<div class="col-md-6">
						 <center>
					      <a href="javascript:void(0)" id="payp">
					       <img src="images/paypal-pay-now.png" style="width: 225px; height: 48px;">
                          </a>
						  </center>
					    </div>
					  </div>
				    </div>
					<div class="col-md-6">
					  <div id="payc-tab" class="mt-5">
									  <h3 class="cd-caption">Card Details</h3>
                                      <form>
                                                                                	
  
										                       <label>Full name*</label>
										                       <input type="text" class="form-control" id="card-2-name" placeholder="Full name">
														   <div class="row mt-5 mb-5">
                                                                                	<div class="col-12 col-md-12">
														   <label>Card number*</label>
										                       <input type="number" class="form-control" id="card-2-number" placeholder="Card number">
												            </div>
												           <div class="col-6 col-md-6">
														      <label>Expiry Date*</label>
										                       <input type="text" class="form-control" id="card-2-date" placeholder="MM/YY">
														  </div>
														<div class="col-6 col-md-6">
														        <label>CVV*</label>
										                       <input type="number" class="form-control" id="card-2-cvv" placeholder="CVV">
														  </div>
															 
												<div class="col-12 col-md-12 mt-5 mb-5">
												<center>
												<div id="checkout-cd-btn">
												 <a href="javascript:void(0)" class="btn btn-dark btn-order" onclick="ck('cd')">Confirm and Pay now</a>
												</div>
											   	 <p id="checkout-cd-loading">
											      Processing <img src="images/loading.gif" alt="" style="width: 50px; height: 50px">
                                                 </p>
										        </center>
										   </div>
										</div>
										</form>
                                    </div>
									<div id="payp-tab" class="mt-5 mb-5">
									  <p>You will be redirected to Paypal to complete your payment.</p>
									  
									  <div id="checkout-pp-btn">
									    <div class="row">
										  <div class="col-12 col-md-12 mt-5 mb-5 p-5">
										    <div id="paypal-button-container"></div>
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
       </div>
     </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/checkout.blade.php ENDPATH**/ ?>