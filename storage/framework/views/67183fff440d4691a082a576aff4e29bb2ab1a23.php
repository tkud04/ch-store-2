<?php
$title = "Orders";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
				<div class="container pt-1">
					<div class="row">
								<div class="col-lg-12 mb-4">
								
							   <?php
							    if(count($orders) > 0)
								{
							   ?>
							   
								 <table class="shop-table wishlist-table mt-2 mb-5">
								    <thead>
									  <tr>
										<th>Details</th>
								        <th class="product-price"><span>Total</span></th>
								        <th class="product-stock-status"><span>Status</span></th>
								        <th class="product-add-to-cart"></th>
									  </tr>
									</thead>
							   <?php
									foreach($orders as $o)
									{
										$items = $o['items'];
										$ou = url('order')."?xf=".$o['reference'];
							   ?>
								
								    <tbody>
									 <tr>
									    <td class="product-name">
										    <p class="mb-2">Reference: <b class="badge badge-success"><?php echo e($o['reference']); ?></b></p>
										    <p class="mb-2">Date: <?php echo e($o['date']); ?></p>
										   <?php
										    for($x = 0; $x < count($items); $x++)
											{
												$i = $items[$x];
												$op = $i['product'];
												$pname = "Removed product"; $pmodel = "REMOVED";
												$imggs = [asset('images/avatar-2.png')]; $uu = "javascript:void(0)";
												
												if(count($op) > 0)
												{
													$pname = $op["name"]; $pmodel = $op["model"];
												    $imggs = $op['imggs']; $uu = url('product')."?xf=".$pmodel;
												}
												
												
										   ?>
										   <div class="mb-2">
										   <a href="<?php echo e($uu); ?>" class="mb-2">
										     <figure>
											  <img src="<?php echo e($imggs[0]); ?>" width="60" height="60" alt="<?php echo e($pname); ?>">
										     </figure>
									       </a>
									       <a href="<?php echo e($uu); ?>"><?php echo e($pname); ?></a> <b class="badge badge-success">x<?php echo e($i['qty']); ?></b>
										   </div>
										   <?php
									        }
										   ?>
								        </td>
								<td class="product-price">
									<span class="amount">&#0163;<?php echo e(number_format($o['amount'],2)); ?></span>
								</td>
								<td class="product-stock-status">
									<span class="badge badge-success"><?php echo e(strtoupper($statuses[$o['status']])); ?></span>
								</td>
								<td class="product-add-to-cart">
									<a href="<?php echo e($ou); ?>" class="btn-product"><span>VIEW</span></a>
								</td>
									  </tr>
									</tbody>
								
								<?php
									}
								?>
								  </table>
								  
								<?php
								}
								else
								{
								?>
								  <p class=" b-2">No order has been made yet.</p>
								  <a href="<?php echo e(url('shop')); ?>" class="btn btn-primary">Go Shop</a>
								<?php
								}
								?>
							    </div>
							  </div>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/orders.blade.php ENDPATH**/ ?>