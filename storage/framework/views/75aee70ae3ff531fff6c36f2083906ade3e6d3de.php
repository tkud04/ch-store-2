<?php
$title = "Forgot Password";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>


<?php $__env->startSection('content'); ?>

				<div class="container pt-1">
					<form action="<?php echo e(url('forgot-password')); ?>" id="fp-form" method="post" class="form mt-5">	
						<?php echo csrf_field(); ?>		
                        <input type="hidden" name="rdr" value="<?php echo e($rdr); ?>">
                       <p class="mb-2">
						Can't access your account? No worries! We'll send a reset link to your email.
					</p>				
									<label>Enter your email address <span class="req">*</span></label>
									<input type="email" class="form-control" name="id" id="login-email" required="">
									
                                    
									<button type="submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/forgot-password.blade.php ENDPATH**/ ?>