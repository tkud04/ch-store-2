<?php
$title = "Sign In";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>


<?php $__env->startSection('content'); ?>
				<div class="container pt-1">
					<form action="<?php echo e(url('login')); ?>" id="login-form" method="post" class="form mt-5">	
						<?php echo csrf_field(); ?>		

                        <p class="mb-2">
						Don't have an account? <a href="<?php echo e(url('register')); ?>" class="text-secondary">Register</a>
					</p>						
									<label>Email address <span class="req">*</span></label>
									<input type="email" class="form-control" name="id" id="login-email" required="">
									
									<label>Password</label>
									<input type="password" class="form-control" name="pass" id="login-pass">

									<button id="login-submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/login.blade.php ENDPATH**/ ?>