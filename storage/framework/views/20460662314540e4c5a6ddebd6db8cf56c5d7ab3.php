<?php
$title = "Categories";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
<section class="mt-md-10 pt-md-3 mt-9">
                        <h2 class="title">Available Categories</h2>
                        <div class="row">
						<?php
						 if(count($c) > 0)
						 {
						   foreach($c as $cc)
						   {
							   $cu = url('category')."?xf=".$cc['id']; 
							   $imgs = $cc['image'];
							   $parent = $cc['parent'];
							   $cp = [];
						?>
                            <div class="col-sm-6 col-lg-3 mb-4">
                                <div class="category category-default category-absolute">
                                    <a href="<?php echo e($cu); ?>">
                                        <figure class="category-media">
                                            <img src="<?php echo e($imgs[0]); ?>" alt="category" width="280" height="280">
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="<?php echo e($cu); ?>"><?php echo e(ucwords($cc['name'])); ?></a></h4>
                                        <span class="category-count">
                                            <span><?php echo e(count($cp)); ?></span> Products
                                        </span>
                                    </div>
                                </div>
                            </div>
                          <?php
						   }
						 }
						  ?>
                        </div>
                    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/categories.blade.php ENDPATH**/ ?>