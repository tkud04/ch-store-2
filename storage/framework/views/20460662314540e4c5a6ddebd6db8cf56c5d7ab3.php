<?php
$title = "Categories";
$ph = false;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
<section class="mt-md-10 pt-md-3 mt-9">
                        <h2 class="title">Available Categories</h2>
						<div class="row">
 <?php
										  $cccc = [];
										  
										    foreach($c as $cc)
											{
												
										$cu = url('category')."?xf=".$cc['id'];
											#$children = $cc['children'];
												
												
													
										   ?>
                            <div class="col-md-3 col-6 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="<?php echo e($cu); ?>">
                                        <figure class="category-media">
                                            <img src="<?php echo e($cc['image'][0]); ?>" alt="category" class="rc" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="<?php echo e($cu); ?>"><?php echo $cc['name']; ?></a></h4>
                                    </div>
                                </div>
                            </div>
							 <?php
												
											  
											  array_push($cccc,$cc['id']);
											}
										   ?>
                          </div>
                    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/categories.blade.php ENDPATH**/ ?>