<?php
$title = "FAQ";
$ph = true;
$pcClass = "";

$faqs = [
  ['q' => "", 'a' => ""]
];
?>


<?php $__env->startSection('content'); ?>
<section class="">
                    <div class="container">
                        <h2 class="title mb-lg-9">Frequently Asked Questions</h2>
                        <div class="row mb-10">
                            <div class="col-md-12">
                               <div class="accordion accordion-card-bg accordion-primary accordion-boxed accordion-plus accordion-gutter-md">
							       <?php
								    for($i = 0; $i < count($faqs); $i++)
									{
										$f = $faqs[$i];
								   ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse6-<?php echo e($i); ?>" class="expand"><?php echo e($f['q']); ?></a>
                                        </div>
                                        <div id="collapse6-1" class="collapsed" style="display: none;">
                                            <div class="card-body">
                                                <p class="mb-0"><?php echo $f['a']; ?></p>
                                            </div>
                                        </div>
                                    </div>
									 <?php
									}
								     ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End FAQ Section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/faq.blade.php ENDPATH**/ ?>