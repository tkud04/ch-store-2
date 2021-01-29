<?php
$title = "My Account";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
				<div class="container pt-1">
					<div class="tab tab-vertical">
						<ul class="nav nav-tabs mb-4" role="tablist">
							<li class="nav-item">
								<a class="nav-link" href="#dashboard">Dashboard</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#orders">Orders</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#downloads">Downloads</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#address">Addresses</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="#account">Account details</a>
							</li>
							<li class="nav-item">
								<a href="#">Logout</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="dashboard">
								<p class="mb-2">
									Hello <span>User</span> (not <span>User</span>? <a href="#" class="text-secondary">Log out</a>)
								</p>
								<p>
									From your account dashboard you can view your <a href="#orders" class="link-to-tab text-secondary">recent orders</a>, manage your <a href="#address" class="link-to-tab text-secondary">shipping and billing
										addresses</a>, and <a href="#account" class="link-to-tab text-secondary">edit
										your password and account details</a>.
								</p>
							</div>
							<div class="tab-pane" id="orders">
								<p class=" b-2">No order has been made yet.</p>
								<a href="#" class="btn btn-primary">Go Shop</a>
							</div>
							<div class="tab-pane" id="downloads">
								<p class="mb-2">No downloads available yet.</p>
								<a href="#" class="btn btn-primary">Go Shop</a>
							</div>
							<div class="tab-pane" id="address">
								<p class="mb-2">The following addresses will be used on the checkout page by default.
								</p>
								<div class="row">
									<div class="col-lg-6 mb-4">
										<div class="card card-address">
											<div class="card-body">
												<h5 class="card-title">Billing Address</h5>
												<p>User Name<br>
													User Company<br>
													John str<br>
													New York, NY 10001<br>
													1-234-987-6543<br>
													yourmail@mail.com<br>
												</p>
												<a href="#" class="btn btn-link btn-secondary btn-underline">Edit <i class="far fa-edit"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 mb-4">
										<div class="card card-address">
											<div class="card-body">
												<h5 class="card-title">Shipping Address</h5>
												<p>You have not set up this type of address yet.</p>
												<a href="#" class="btn btn-link btn-secondary btn-underline">Edit <i class="far fa-edit"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane active in" id="account">
								<form action="#" class="form">
									<div class="row">
										<div class="col-sm-6">
											<label>First Name *</label>
											<input type="text" class="form-control" name="first_name" required="">
										</div>
										<div class="col-sm-6">
											<label>Last Name *</label>
											<input type="text" class="form-control" name="last_name" required="">
										</div>
									</div>

									<label>Display Name *</label>
									<input type="text" class="form-control mb-0" name="display_name" required="">
									<small class="d-block form-text mb-4">This will be how your name will be displayed
										in the account section and in reviews</small>

									<label>Email address *</label>
									<input type="email" class="form-control" name="email" required="">

									<label>Current password (leave blank to leave unchanged)</label>
									<input type="password" class="form-control" name="current_password">

									<label>New password (leave blank to leave unchanged)</label>
									<input type="password" class="form-control" name="new_password">

									<label>Confirm new password</label>
									<input type="password" class="form-control" name="confirm_password">

									<button type="submit" class="btn btn-primary btn-reveal-right">SAVE CHANGES <i class="d-icon-arrow-right"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/dashboard.blade.php ENDPATH**/ ?>