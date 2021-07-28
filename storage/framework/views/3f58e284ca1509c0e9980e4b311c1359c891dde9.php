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

let pd = [], sd = [], ppd = null, pm = "none", ct = "", cts = [1,2,3,4,5,6];

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
 
    let hh = ['#checkout-cd-loading','#card-2','#checkout-loading','#checkout-tab-2','#checkout-tab-3','#checkout-tab-4','#checkout-tab-5','#checkout-tab-6'];
	
  hh.forEach((x,i) => {$(x).hide();});
  
  initSDSummary();
  initPDSummary();
});
</script>
<div class="container">
  <div class="row">
     <div class="col-md-12">
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
				   <div style=" padding: 8px!important;">
				    <div style="margin-bottom: 5px; padding: 10px; border: 1px dashed skyblue;">
					  Standard - Get it in 5 working days
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
				</div>
		     </div>		
			 <div class="col-md-12 mt-5">
			    <h2 class="cd-caption">payment option:</h2>
				<div>
				  <div class="row">
			        <div class="col-md-6">
					  <div class="row">
					    <div class="col-md-6">
					      <center><a href="javascript:void(0)" id="payc" class="btn btn-primary mb-5">Pay via card</a></center>
					    </div>
						<div class="col-md-6">
						 <center>
					      <a href="javascript:void(0)" id="payc">
					       <img src="images/paypal-pay-now.png" style="width: 225px; height: 48px;">
                          </a>
						  </center>
					    </div>
					  </div>
				    </div>
					<div class="col-md-6">
					  
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