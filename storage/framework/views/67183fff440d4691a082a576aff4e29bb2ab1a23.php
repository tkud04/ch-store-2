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
							       <div style="overflow-x: auto !important;">
								<table class="table table-responsive" style="align: center !important; width: 100% !important;">
											<thead>
											  <tr>
												<th>Details</th>
								                <th><span>Total</span></th>
								               <th><span>Status</span></th>
								              <th></th>
								             <tr>
											</thead>
											<tbody>
											<?php
								
				                   foreach($orders as $o)
									{
										$items = $o['items'];
										$ou = url('order')."?xf=".$o['reference'];
					                 
				                 ?>
												<tr style="margin-bottom: 5px;">
													<td class="product-name">
                                                      <div class="product-name-section">
                                                            <p class="mb-2">Reference: <b class="badge badge-success"><?php echo e($o['reference']); ?></b></p>
										          <p class="mb-2">Date ordered: <?php echo e($o['date']); ?></p>   
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
												<a href="<?php echo e($uu); ?>">
													<img src="<?php echo e($imggs[0]); ?>" width="100" height="100" alt="<?php echo e($pname); ?>">
												</a>
											<?php
									        }
										   ?>
											</div>
                                           </td>
										  <td class="product-name"><span class="amount">&#0163;<?php echo e(number_format($o['amount'],2)); ?></span></td>
										  <td class="product-name">
									       <span class="badge badge-success"><?php echo e(strtoupper($statuses[$o['status']])); ?></span>
								          </td>
								         <td class="product-name">
									      <a href="<?php echo e($ou); ?>" class="btn btn-primary btn-md"><span>VIEW</span></a>
								         </td>
												</tr>
												
											</tbody>
											<?php
									       }
								         ?>
										</table>
								              </div>
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