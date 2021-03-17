<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
<script>
let pd = [], sd = [], ppd = null, pm = "none";

$(document).ready(() => {

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

});
</script>
				<?php echo $__env->make('checkout-header',['number' => 2], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="container mt-8">
					<form action="<?php echo e(url('checkout')); ?>" method="post" id="checkout-form" class="form">
						<?php echo csrf_field(); ?>

						<input type="hidden" id="pm" name="pm" value="">
						<div class="row gutter-lg">
							<div class="col-lg-7 mb-6">
							
							<h3 class="title title-simple text-left">Your Details</h3>
							
							<div class="accordion accordion-simple">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-1" class="collapse">Billing Details</a>
                                        </div>
                                        <div id="collapse1-1" class="card-body expanded">
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
										<input type="text" class="form-control" id="pd-fname" name="pd-fname" required="">
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control" id="pd-lname" name="pd-lname" required="">
									</div>
								</div>
								<label>Company Name(Optional)</label>
								<input type="text" class="form-control" id="pd-company" name="pd-company" required="">
								<label>Country / Region *</label>
								<select class="form-control" id="pd-country" name="pd-country">
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
								<input type="text" class="form-control" id="pd-address-1" name="pd-address-1" required="" placeholder="Address line 1">
								<input type="text" class="form-control" id="pd-address-2" name="pd-address-2" required="" placeholder="Address line 2">
								<div class="row">
									<div class="col-xs-6">
										<label>Town / City *</label>
										<input type="text" class="form-control" id="pd-city" name="pd-city" required="">
									</div>
									<div class="col-xs-6">
										<label>State / County *</label>
										<input type="text" class="form-control" id="pd-region" name="pd-region" required="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label>Postcode / ZIP *</label>
										<input type="text" class="form-control" id="pd-zip" name="pd-zip" required="">
									</div>
								</div>
								
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-2" class="expand">Shipping Details</a>
                                        </div>
                                        <div class="card-body collapsed" id="collapse1-2">
                                             <div class="row">
									<div class="col-xs-12">
									  <select class="form-control" id="checkout-sd" name="sd">
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
									</div>
									<div class="col-xs-6">
										<label>First Name *</label>
										<input type="text" class="form-control" id="sd-fname" name="sd-fname" required="">
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control" id="sd-lname" name="sd-lname" required="">
									</div>
								</div>
								<label>Company Name(Optional)</label>
								<input type="text" class="form-control" id="sd-company" name="sd-company" required="">
								<label>Country / Region *</label>
								<select class="form-control" id="sd-country" name="sd-country">
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
								<input type="text" class="form-control" id="sd-address-1" name="sd-address-1" required="" placeholder="Address line 1">
								<input type="text" class="form-control" id="sd-address-2" name="sd-address-2" required="" placeholder="Address line 2">
								<div class="row">
									<div class="col-xs-6">
										<label>Town / City *</label>
										<input type="text" class="form-control" id="sd-city" name="sd-city" required="">
									</div>
									<div class="col-xs-6">
										<label>State / County *</label>
										<input type="text" class="form-control" id="sd-region" name="sd-region" required="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label>Postcode / ZIP *</label>
										<input type="text" class="form-control" id="sd-zip" name="sd-zip" required="">
									</div>
								</div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-3" class="expand">Additional Information</a>
                                        </div>
                                        <div id="collapse1-3" class="card-body collapsed">
                                            <label>Order Notes (optional)</label>
							               	<textarea class="form-control" cols="30" rows="6" id="notes" name="notes" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
							
                                        </div>
                                    </div>
                                </div>
							
							
								
								</div>
							<aside class="col-lg-5 sticky-sidebar-wrapper">
								<div class="pin-wrapper" style="height: 1038px;"><div class="sticky-sidebar" data-sticky-options="{'bottom': 50}" style="border-bottom: 0px none rgb(102, 102, 102); width: 474.141px;">
									<h3 class="title title-simple text-left">Your Order</h3>
									<div class="summary mb-4">
										<table class="order-table">
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
													<td class="product-name"><?php echo e($item['name']); ?> <strong class="product-quantity">×&nbsp;<?php echo e($qty); ?></strong></td>
													<td class="product-total">&#0163;<?php echo e(number_format($itemAmount * $qty,2)); ?></td>
												</tr>
												<?php
								   }
									?>
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Subtotal</h4>
													</td>
													<td class="summary-subtotal-price">&#0163;<?php echo e(number_format($subtotal,2)); ?>

													</td>												
												</tr>
												<tr class="sumnary-shipping shipping-row-last">
													<td colspan="2">
														<h4 class="summary-subtitle">Shipping</h4>
														<ul>
															<li>
														<div class="custom-radio">
															<input type="radio" id="free-shipping" name="shipping" class="custom-control-input" checked="checked">
															<label class="custom-control-label" for="free-shipping">Free
																Shipping</label>
														</div>
													</li>
														</ul>
													</td>
												</tr>
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Total</h4>
													</td>
													<td>
														<p class="summary-total-price">&#0163;<?php echo e(number_format($subtotal,2)); ?></p>
													</td>												
												</tr>
											</tbody>
										</table>
										<div class="payment accordion radio-type">
											<h4 class="summary-subtitle">Payment Method: <a href="javascript:void(0)" class="btn btn-sm btn-success" id="checkout-pm">NONE</a></h4>
											<div class="card">
												<div class="card-header">
													<a href="#collapse1" class="collapse">Direct bank transfer
													</a>
												</div>
												<div id="collapse1" class="expanded" style="display: block;">
													<div class="card-body">
														Make your payment directly into our bank account. Please use
														your Order ID as the payment reference. Your order will not be
														shipped until the funds have cleared in our account.<br>
														<a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="setPM('direct')">Select</a>
													</div>
												</div>
											</div>
											
											<div class="card">
												<div class="card-header">
													<a href="#collapse4" class="expand">Pay online</a>
												</div>
												<div id="collapse4" class="collapsed">
													<div class="card-body">
														You will be redirected to our secure online payment gateway to make payment and complete your order.<br>
														<a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="setPM('online')">Select</a>
													</div>
												</div>
											</div>
										</div>
										<h4 class="mt-3">Info</h4>
										<p class="checkout-info">Your personal data will used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
										<a href="javascript:void(0)" class="btn btn-dark btn-order" id="checkout-btn">Place Order</a>
									</div>
								</div></div>
							</aside>
						</div>
					</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/checkout.blade.php ENDPATH**/ ?>