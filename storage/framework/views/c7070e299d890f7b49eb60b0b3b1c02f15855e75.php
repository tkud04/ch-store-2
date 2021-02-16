<?php
$title = "Delivery and Warranty";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
<section class="about-section">
                    <div class="container">
                        <h2 class="title mb-lg-9">Delivery and Warranty</h2>
                        <div class="row mb-10">
                            <div class="col-md-12 order-md-first pt-md-5">
                                <div class="mb-8">
								  <?php if(count($info) > 0): ?>
								   <?php echo $info['content']; ?>

								  <?php endif; ?>
								</div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/delivery.blade.php ENDPATH**/ ?>