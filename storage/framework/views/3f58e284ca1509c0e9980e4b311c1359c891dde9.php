<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('scripts'); ?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script>

let pd = [], sd = [], ppd = null, pm = "none", ct = "", cts = [1,2,3,4,5];

$(document).ready(() => {

getCT();
initCT();

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
 
    let hh = ['#card-2','#checkout-loading','#checkout-tab-2','#checkout-tab-3','#checkout-tab-4','#checkout-tab-5','#checkout-tab-6'];
	
  hh.forEach((x,i) => {$(x).hide();});
});
</script>
				<?php echo $__env->make('checkout-header',['number' => 2], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="container mt-8">
					<form action="<?php echo e(url('checkout')); ?>" method="post" class="form">
						<input type="hidden" id="tk" value="<?php echo e(csrf_token()); ?>">
						<input type="hidden" id="pm" name="pm" value="none">
						<div class="row gutter-lg">
							<div class="col-lg-7 mb-6">
							
							        <div id="checkout-tab-1">
									  <h3 class="title title-simple text-left">Your Order</h3>
									   <table class="table table-responsive" style="align: center !important;">
											<thead>
												<tr>
													<th>Items</th>
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
													<td class="product-name">
                                                                                                        <div class="product-name-section">
												<a href="<?php echo e($uu); ?>">
													<img src="<?php echo e($imgs[0]); ?>" width="100" height="100" alt="<?php echo e($item['name']); ?>">
												</a>
											</div></td>
													<td class="product-total"><span class="amount">&#0163;<?php echo e(number_format($itemAmount * $qty,2)); ?></span></td>
												</tr>
												<?php
								   }
                                                                    $pc = 0.1 * $subtotal;
																	$xx = $subtotal;
																	if(count($sud) == 0) $xx = $subtotal - $pc;
									?>
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Subtotal</h4>
													</td>
													<td class="summary-subtotal-price">&#0163;<?php echo e(number_format($subtotal,2)); ?>

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
												<?php if(count($sud) == 0): ?>
                                                <tr class="sumnary-shipping shipping-row-last">
													
													<td>
														<h4 class="summary-subtitle">10% Discount</h4>
													</td>
													<td>
														<p class="summary-total-price">&#0163;<?php echo e(number_format($pc,2)); ?></p>
													</td>
												</tr>
												<?php endif; ?>
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Total</h4>
													</td>
													<td>
														<p class="summary-total-price">&#0163;<?php echo e(number_format($xx,2)); ?></p>
													</td>												
												</tr>
											</tbody>
										</table>
										<center>
										<a href="javascript:void(0)" onclick="showCT(2)" class="btn btn-dark btn-order">Next</a>
										</center>
									</div>
							        <div id="checkout-tab-2">
									 <h3 class="title title-simple text-left">Shipping Details</h3>
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
										<label>First Name *</label>
										<input type="text" class="form-control sd" id="sd-fname" name="sd-fname" required="">
										
										<label>Last Name *</label>
										<input type="text" class="form-control sd" id="sd-lname" name="sd-lname" required="">
									
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
								<center>
										<a href="javascript:void(0)" onclick="showCT(1)" class="btn btn-dark btn-order">Back</a>
										<a href="javascript:void(0)" onclick="showCT(3)" class="btn btn-dark btn-order">Next</a>
										</center>
                                        </div>
									
							        <div id="checkout-tab-3">
									  <h3 class="title title-simple text-left">Billing Details</h3>
                                           <div class="row">
									<div class="col-xs-12">
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
									</div>
									<div class="col-xs-6">
										<label>First Name *</label>
										<input type="text" class="form-control bd" id="pd-fname" name="pd-fname" required="">
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control bd" id="pd-lname" name="pd-lname" required="">
									</div>
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
								   <center>
										<a href="javascript:void(0)" onclick="showCT(2)" class="btn btn-dark btn-order">Back</a>
										<a href="javascript:void(0)" onclick="showCT(4)" class="btn btn-dark btn-order">Next</a>
										</center>
                                    </div>
                                   
                                    <div id="checkout-tab-4">
									  <h3 class="title title-simple text-left">Additional Information</h3>
                                            <label>Order Notes (optional)</label>
							               	<textarea class="form-control" cols="30" rows="6" id="notes" name="notes" placeholder="Notes about your order, e.g. special notes for delivery"></textarea><br>
											
											 <h5>You will be charged &#0163;<?php echo e(number_format($xx,2)); ?></h5>
                                       <center>
										<a href="javascript:void(0)" onclick="showCT(5)" class="btn btn-dark btn-order mb-5">Pay via card</a>
										<a href="javascript:void(0)" onclick="showCT(6)">
										  <img src="images/paypal-pay-now.png" style="width: 225px; height: 48px;">
										</a>
										<p class="mt-5">By placing your order, you agree to our <a class="text-primary" href="<?php echo e(url('terms')); ?>">Terms and Conditions</a>.</p>
										</center>
                                    </div>
								    <div id="checkout-tab-5">
									  <h3 class="title title-simple text-left">Card Details</h3>
										                       <label>Full name*</label>
										                       <input type="text" class="form-control" id="card-2-name" placeholder="Full name">
														   
														   <label>Card number*</label>
										                       <input type="number" class="form-control" id="card-2-number" placeholder="Card number">
												
														      <label>Expiry Date*</label>
										                       <input type="text" class="form-control" id="card-2-date" placeholder="MM/YY">
														  
														        <label>CVV*</label>
										                       <input type="number" class="form-control" id="card-2-cvv" placeholder="CVV">
														  
															 
												
												<center>
												 <a href="javascript:void(0)" class="btn btn-dark btn-order" onclick="ck('card')">Confirm and Pay now</a>
												<a href="javascript:void(0)" onclick="showCT(4)" class="btn btn-dark btn-order">Back</a>
										        </center>
                                    </div>
									</div>
									<div id="checkout-tab-6">
									 
									</div>
								</div>
					</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/checkout.blade.php ENDPATH**/ ?>