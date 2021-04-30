<?php
$title = "Welcome";
$pcClass = "";
?>






<?php $__env->startSection('content'); ?>

<?php
$ccategories = [
['name' => "Electronics",'category' => "electronics"],
['name' => "Accessories &amp; jewellery",'category' => "accessories-jewellery"],
['name' => "Musical instruments",'category' => "musical-instruments"],
['name' => "Shoes",'category' => "shoes"],
['name' => "Fashion",'category' => "fashion"],
['name' => "Bags",'category' => "bags"],
['name' => "Underwears",'category' => "underwears"],
];
?>

 <?php echo $__env->make('banner-2',['banners' => $banners], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
 <section class="grey-section pt-10 pb-10 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                    <div class="container pt-3">
                        <h2 class="title">Browse Our Categories</h2>
                        <div class="row">
						 <?php
										  $cccc = [];
										  
										    foreach($c as $cc)
											{
												if(!in_array($cc['id'],$cccc))
												{
												$cu = url('category')."?xf=".$cc['category'];
												$children = $cc['children'];
												
												if(count($children) == 0)
												{
													
										   ?>
                            <div class="col-md-3 col-6 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="#">
                                        <figure class="category-media">
                                            <img src="<?php echo e($cc['image'][0]); ?>" alt="category" width="280" height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="<?php echo e($cu); ?>"><?php echo $cc['name']; ?></a></h4>
                                    </div>
                                </div>
                            </div>
							 <?php
												}
											  }
											  array_push($cccc,$cc['id']);
											}
										   ?>
                          
                        </div>
                    </div>
                </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/index-2.blade.php ENDPATH**/ ?>