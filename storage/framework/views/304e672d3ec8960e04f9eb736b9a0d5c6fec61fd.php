<?php
$title = "Reset Password";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>


<?php $__env->startSection('content'); ?>

				<div class="container pt-1">
					<form action="<?php echo e(url('reset')); ?>" id="r-form" method="post" class="form mt-5">	
						<?php echo csrf_field(); ?>		
                        <input type="hidden" name="acsrf" value="<?php echo e($x->id); ?>">
                       <p class="mb-2">
						Set your new password.
					</p>				
									<label>Enter your new password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass" required="">
									
									<label>Confirm password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass_confirmation" required="">
									
                                    
									<button type="submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/reset.blade.php ENDPATH**/ ?>