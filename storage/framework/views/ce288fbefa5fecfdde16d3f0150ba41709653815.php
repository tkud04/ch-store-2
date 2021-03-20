<?php
$title = "Invoice";
$no_header = true;
$pcClass = "";
?>




<?php $__env->startSection('title',$title); ?>


<?php $__env->startSection('content'); ?>
<script>
let xf = "", products = [], pCover = "none", tkOrderHistory = "<?php echo e(csrf_token()); ?>",
    orderProducts = [], eoPaymentXF = "new", eoShippingXF = "new";

  

$(document).ready(() => {
	hideElem(["#eo-loading"]);
	
	 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  products.push({
		  id: "<?php echo e($p['id']); ?>", 
		  name: "<?php echo e($p['name']); ?>", 
		  model: "<?php echo e($p['model']); ?>", 
		  qty: "<?php echo e($p['qty']); ?>", 
		  amount: "<?php echo e($p['data']['amount']); ?>"
		  });
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
 <?php $__currentLoopData = $o['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  orderProducts.push({p: <?php echo e($i['product_id']); ?>, q: <?php echo e($i['qty']); ?>});
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  
	  refreshProducts({type: "normal", target: "#order-products", t: 'order'});
		   refreshProducts({type: "review", target: "#order-products-review", t: 'order'});
		   refreshProducts({type: "review", target: "#order-products-2", t: 'order'});
});
</script>

<?php
$pd = $o['pd'];
$sd = $o['sd'];
$customer = $o['user'];
$cname = $customer['fname']." ".$customer['lname'];

$payment_method = "Credit Card/Debit Card";
$shipping_method = "Free Shipping";
?>

<div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
	    
	  </div>
      
	  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-6 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fas fa-user"></i> Order Details</h3>
           </div>
           <ul class="list-group list-group-flush">
		   
                <li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Date added"><i class="fas fa-calendar"></i> </span>
				  <?php echo e($o['date']); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Payment method"><i class="fas fa-credit-card"></i> </span>
				  <?php echo e($payment_method); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shipping method"><i class="fas fa-truck"></i> </span>
				  <?php echo e($shipping_method); ?>

				</li>
           </ul>
        </div>
	  </div>
	  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-6 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fas fa-user"></i> Customer Details</h3>
           </div>
           <ul class="list-group list-group-flush">
		   
                <li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer name"><i class="fas fa-user"></i> </span>
				  <?php echo e(ucwords($cname)); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer email"><i class="fas fa-envelope"></i> </span>
				  <?php echo e(ucwords($customer['email'])); ?>

				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer phone number"><i class="fas fa-phone"></i> </span>
				  <?php echo e(ucwords($customer['phone'])); ?>

				</li>
           </ul>
        </div>
	  </div>
	  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fas fa-user"></i> Order #<?php echo e($o['reference']); ?></h3>
				<div class="table-responsive mb-5">
				  <table class="table table-striped table-bordered first etuk-table">
                                              <thead>
                                                <tr>
                                                  <th>Payment Address</th>
                                                  <th>Shipping Address</th>
                                                </tr>
                                              </thead>
                                              <tbody>
										      <?php
											  
											  ?>
											   <tr>
											     <td>
											      <?php echo e(strtoupper($cname)); ?><br>
											      <?php echo e(strtoupper($pd['address_1'])); ?><br>
											      <?php if($pd['address_2'] != ""): ?><?php echo e(strtoupper($pd['address_2'])); ?><br><?php endif; ?>
											      <?php echo e(strtoupper($pd['city'])." ".$pd['zip']); ?><br>
											      <?php echo e(strtoupper($pd['region'])); ?><br>
											      <?php echo e(ucwords($countries[$pd['country']])); ?><br>
											      </td>
												  <td>
											      <?php echo e(strtoupper($cname)); ?><br>
											      <?php echo e(strtoupper($sd['address_1'])); ?><br>
											      <?php if($pd['address_2'] != ""): ?><?php echo e(strtoupper($sd['address_2'])); ?><br><?php endif; ?>
											      <?php echo e(strtoupper($sd['city'])." ".$sd['zip']); ?><br>
											      <?php echo e(strtoupper($sd['region'])); ?><br>
											      <?php echo e(ucwords($countries[$sd['country']])); ?><br>
											      </td>											  
											   </tr>
											  <?php
											  
											  ?>
									    	  </tbody>
					</table>
				</div>
				<div class="table-responsive mb-5">
				   <table class="table table-striped table-bordered first etuk-table">
                                              <thead>
                                                <tr>
                                                  <th>Product</th>
                                                  <th>Model</th>
												  <th>Quantity</th>
                                                  <th>Unit price</th>
                                                  <th>Total</th>
                                                </tr>
                                              </thead>
                                              <tbody id="order-products-2">
										        <?php
												
												?>
												 
												<?php
												
												?>
									    	  </tbody>
											 </table>
				</div>
           </div>
		</div>
	  </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/invoice.blade.php ENDPATH**/ ?>