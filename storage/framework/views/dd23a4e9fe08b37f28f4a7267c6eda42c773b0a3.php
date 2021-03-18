<?php
$title = "Dashboard";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('scripts'); ?>
  <!-- DataTables CSS -->
  <link href="<?php echo e(asset('lib/datatables/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet" /> 
  <link href="<?php echo e(asset('lib/datatables/css/buttons.dataTables.min.css')); ?>" rel="stylesheet" /> 
  <link href="<?php echo e(asset('lib/datatables/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet" /> 
  
      <!-- DataTables js -->
       <script src="<?php echo e(asset('lib/datatables/js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/datatables/js/datatables-init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
				<div class="container pt-1">
					<div class="tab tab-vertical">
						<ul class="nav nav-tabs mb-4" role="tablist">
							<li class="nav-item">
								<a class="nav-link" href="#dashboard">Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#account">My Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#password">Change Password</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#address">Address Book</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#wishlist">Wishlist</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#orders">Order History</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#downloads">Downloads</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#returns">Returns</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo e(url('bye')); ?>">Logout</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="dashboard">
								<p class="mb-2">
									Hello <span><?php echo e($user->fname); ?></span> (not <span><?php echo e($user->fname); ?></span>? <a href="<?php echo e(url('bye')); ?>" class="text-secondary">Log out</a>)
								</p>
								<p>
									From your account dashboard you can view your <a href="#orders" class="link-to-tab text-secondary">recent orders</a>, manage your <a href="#address" class="link-to-tab text-secondary">shipping and billing
										addresses</a>, and <a href="#account" class="link-to-tab text-secondary">edit
										your password and account details</a>.
								</p>
							</div>
							<div class="tab-pane active in" id="account">
								<form action="<?php echo e(url('profile')); ?>" id="profile-form" method="post" class="form">
									<?php echo csrf_field(); ?>

									<div class="row">
										<div class="col-sm-6">
											<label>First Name <span class="req">*</span></label>
											<input type="text" class="form-control" name="fname" value="<?php echo e($user->fname); ?>" id="profile-fname" required="">
										</div>
										<div class="col-sm-6">
											<label>Last Name <span class="req">*</span></label>
											<input type="text" class="form-control" name="lname" value="<?php echo e($user->lname); ?>" id="profile-lname" required="">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
									       <label>Email address <span class="req">*</span></label>
									      <input type="email" class="form-control" value="<?php echo e($user->email); ?>" name="email" id="profile-email" required="">
			                            </div>
										<div class="col-sm-6">
									       <label>Phone number <span class="req">*</span></label>
									      <input type="number" class="form-control" value="<?php echo e($user->phone); ?>" name="phone" id="profile-phone" required="">
			                            </div>
									</div>

									<button id="profile-submit" class="btn btn-primary btn-reveal-right">SUBMIT<i class="d-icon-arrow-right"></i></button>
								</form>
							</div>
							<div class="tab-pane" id="password">
								<form action="<?php echo e(url('password')); ?>" method="post" class="form">	
									<?php echo csrf_field(); ?>

									
									<label>New password (leave blank to leave unchanged)</label>
									<input type="password" class="form-control" name="pass">

									<label>Confirm new password</label>
									<input type="password" class="form-control" name="pass_confirmation">

									<button id="password-submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
							</div>
							<div class="tab-pane" id="address">
								<p class="mb-2">The following addresses will be used on the checkout page.
								</p>
								<div class="row">
									<div class="col-lg-12 mb-4">
									    <div class="table-responsive">
										 <table class="table mb-5">
										  <thead>
										   <tr>
										      <td><h5 class="card-title">Payment Addresses</h5></td>
										   </tr>
										  </thead>
										  <tbody>
										  <tr>
										  <?php
										   if(count($pd) > 0)
										   {
											   foreach($pd as $pdd)
											   {
												   $pdu = url('edit-address')."?type=payment&xf=".$pdd['id'];
										  ?>
										  <td>
										   <div class="card card-address">
											   <div class="card-body">
												   <p><?php echo e(strtoupper($pdd['fname']." ".$pdd['lname'])); ?><br>
													   <?php echo e($pdd['company']); ?><br>
													   <?php echo e($pdd['address_1']); ?><br>
													   <?php if($pdd['address_2'] != ""): ?> <?php echo e($pdd['address_2']); ?><br><?php endif; ?>
													   <?php echo e($pdd['city']); ?>, <?php echo e($pdd['zip']); ?><br>
													   <?php echo e($pdd['region']); ?><br>
													   <?php echo e($countries[$pdd['country']]); ?><br>
												   </p>
												   <a href="<?php echo e($pdu); ?>" class="btn btn-link btn-secondary btn-underline">Edit <i class="fas fa-edit"></i></a>
											   </div>
											</div>
											</td>
											<?php
											   }
										    }
											?>
											</tr>
											</tbody>
										   </table>
										   
										   <table class="table">
										  <thead>
										   <tr>
										     <td><h5 class="card-title">Shipping Addresses</h5></td>
										   </tr>
										  </thead>
										  <tbody>
										  <tr>
										  <?php
										   if(count($sd) > 0)
										   {
											   foreach($sd as $sdd)
											   {
												   $sdu = url('edit-address')."?type=shipping&xf=".$sdd['id'];
										  ?>
										  <td>
										   <div class="card card-address">
											   <div class="card-body">
												   <p><?php echo e(strtoupper($sdd['fname']." ".$sdd['lname'])); ?><br>
													   <?php echo e($sdd['company']); ?><br>
													   <?php echo e($sdd['address_1']); ?><br>
													   <?php if($sdd['address_2'] != ""): ?> <?php echo e($sdd['address_2']); ?><br><?php endif; ?>
													   <?php echo e($sdd['city']); ?>, <?php echo e($sdd['zip']); ?><br>
													   <?php echo e($sdd['region']); ?><br>
													   <?php echo e($countries[$sdd['country']]); ?><br>
												   </p>
												   <a href="<?php echo e($sdu); ?>" class="btn btn-link btn-secondary btn-underline">Edit <i class="fas fa-edit"></i></a>
											   </div>
											</div>
											</td>
											<?php
											   }
										    }
											?>
											</tr>
											</tbody>
										   </table>
										</div>
								     </div>
								</div>
							</div>
							
							<div class="tab-pane" id="wishlist">
								<p class=" b-2">No items in your wishlist yet.</p>
								<a href="<?php echo e(url('shop')); ?>" class="btn btn-primary">Go Shopping</a>
							</div>
							<div class="tab-pane" id="orders">
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
								  <a href="<?php echo e(url('orders')); ?>" class="btn-product"><span>VIEW MORE</span></a>
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
							<div class="tab-pane" id="downloads">
								<p class="mb-2">No downloads available yet.</p>
								<a href="#" class="btn btn-primary">Go Shop</a>
							</div>
							<div class="tab-pane" id="returns">
								<p class="mb-2">No return requests yet.</p>
								<a href="#" class="btn btn-primary">Go Shop</a>
							</div>
							
							
						</div>
					</div>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/dashboard.blade.php ENDPATH**/ ?>