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
 
 <section class="banner-group mb-9 container text-uppercase appear-animate">
	<div class="banner banner-2 banner-fixed content-middle content-center overlay-light appear-animate"
                                data-animation-options="{
                                'name': 'fadeIn',
                                'delay': '.3s'
                            }">
                                <figure>
                                    <img src="images/banner2.jpg" alt="banner" width="350"
                                        height="177" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">50% Discount</h3>
                                    <h4 class="banner-subtitle ls-normal">On Your First Order</h4>
                                    <a href="<?php echo e(url('register')); ?>" class="btn btn-dark btn-md mb-1">Yes! Sign Me Up Now</a>
                                </div>
                            </div>
                            </section>

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
												
												$cu = url('category')."?xf=".$cc['id'];
												$children = $cc['children'];
												
												
													
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
                    </div>
                </section>
				
				<section class="product-wrapper container appear-animate mt-10 pt-3 pb-8" data-animation-options="{
                    'delay': '.3s'
                }">
                    <h2 class="title">Best Selling</h2>
                    <div class="row">
					<?php
									#$bestSellers = []; $topProducts = [];
									$bsc = count($bs) > 12 ? 12 : count($bs);
									  for($i =0; $i < $bsc; $i++)
									  {
									     $p = $bs[$i];
										  $data = $p['data'];
										  $imgs = $p['imggs'];
										  $pc = $data['category'];
										  $pcu = url('category')."?xf=".$pc['category'];
										  $pcn = $pc['name'];
										  $pm = $data['manufacturer'];
										  $amt = $data['amount'];
										  $xf = $p['id'];
										  $uu = url('product')."?xf=".$xf;
									?>
			<div class="col-md-3 col-6 mb-4">
                        <div class="product">
                            <figure class="product-media">
                                <a href="<?php echo e($uu); ?>">
                                    <img src="<?php echo e($imgs[0]); ?>" alt="<?php echo e($p['name']); ?>" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="javascript:void(0)" onclick="addToCart({xf: '<?php echo e($xf); ?>',qty: 1})" class="btn-product-icon btn-cart" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <!--
								<div class="product-action">
                                    <a href="javascript:void(0)" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
								-->
                            </figure>
                            <div class="product-details">
                                <a href="javascript:void(0)" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="<?php echo e($pcu); ?>"><?php echo e($pcn); ?></a>
                                </div>
                                <h3 class="product-name">
                                    <a href="<?php echo e($uu); ?>"><?php echo e($p['name']); ?></a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#0163;<?php echo e(number_format($amt,2)); ?></ins><del class="old-price">&#0163;<?php echo e(number_format($amt + 50,2)); ?></del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                  <!--  <a href="<?php echo e($uu); ?>" class="rating-reviews">( 6 reviews )</a> -->
                                </div>
                            </div>
                        </div>
			</div>
						<?php
									  }
									?>
                        
                    </div>
                </section>
			
        
		<section class="banner-group mb-9 container text-uppercase appear-animate">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-1 banner-fixed content-middle" data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'delay': '.5s'
                            }">
                                <figure>
                                    <img src="images/banner4.jpg" alt="banner" width="380"
                                        height="207" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">Apple iPhones</h3>
                                    <h4 class="banner-subtitle font-weight-semi-bold ls-s text-body mb-0">Starting at
                                        &#0163;999.00
                                    </h4>
                                    <hr class="bg-dark">
                                    <a href="<?php echo e(url('categories')); ?>" class="btn btn-link btn-underline btn-sm">Shop Now<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 order-lg-auto order-sm-last">
                            <div class="banner banner-2 banner-fixed content-middle content-center overlay-light appear-animate"
                                data-animation-options="{
                                'name': 'fadeIn',
                                'delay': '.3s'
                            }">
                                <figure>
                                    <img src="images/banner2.jpg" alt="banner" width="350"
                                        height="177" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">Amazing Discounts</h3>
                                    <h4 class="banner-subtitle ls-normal">Starting at &#0163;99.00</h4>
                                    <a href="<?php echo e(url('categories')); ?>" class="btn btn-dark btn-md mb-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-3 banner-fixed content-middle" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.5s'
                            }">
                                <figure>
                                    <img src="images/hp2.png" alt="banner" width="380"
                                        height="207" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">Laptops</h3>
                                    <h4 class="banner-subtitle font-weight-semi-bold ls-s text-body mb-0">Up to 30% off
                                    </h4>
                                    <hr class="bg-dark">
                                    <a href="<?php echo e(url('categories')); ?>" class="btn btn-link btn-underline btn-sm">Shop Now<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				
				<section class="product-wrapper container appear-animate mt-10 pt-3 pb-8" data-animation-options="{
                    'delay': '.3s'
                }">
                    <h2 class="title">Top Products</h2>
                    <div class="row">
					<?php
									#$bestSellers = []; $topProducts = [];
									$tpc = count($tp) > 12 ? 12 : count($tp);
									  for($i =0; $i < $tpc; $i++)
									  {
									     $p = $tp[$i];
										  $data = $p['data'];
										  $imgs = $p['imggs'];
										  $pc = $data['category'];
										  $pcu = url('category')."?xf=".$pc['category'];
										  $pcn = $pc['name'];
										  $pm = $data['manufacturer'];
										  $amt = $data['amount'];
										  $xf = $p['id'];
										  $uu = url('product')."?xf=".$xf;
									?>
			<div class="col-md-3 col-6 mb-4">
                        <div class="product">
                            <figure class="product-media">
                                <a href="<?php echo e($uu); ?>">
                                    <img src="<?php echo e($imgs[0]); ?>" alt="<?php echo e($p['name']); ?>" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="javascript:void(0)" onclick="addToCart({xf: '<?php echo e($xf); ?>',qty: 1})" class="btn-product-icon btn-cart" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
								<!--
                                <div class="product-action">
                                    <a href="javascript:void(0)" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
								-->
                            </figure>
                            <div class="product-details">
                                <a href="javascript:void(0)" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="<?php echo e($pcu); ?>"><?php echo e($pcn); ?></a>
                                </div>
                                <h3 class="product-name">
                                    <a href="<?php echo e($uu); ?>"><?php echo e($p['name']); ?></a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#0163;<?php echo e(number_format($amt,2)); ?></ins><del class="old-price">&#0163;<?php echo e(number_format($amt + 50,2)); ?></del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                  <!--  <a href="<?php echo e($uu); ?>" class="rating-reviews">( 6 reviews )</a> -->
                                </div>
                            </div>
                        </div>
			</div>
						<?php
									  }
									?>
                        
                    </div>
                </section><br>
				
				 <section class="banner parallax" data-option="{'offset': 0}"
                    data-image-src="images/parallax-2.jpg" style="background-color: #44352d;">
					<div class="parallax-background" style="background-image: url('images/parallax-2.jpg'); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; transform: translate3d(0px, -46.2812px, 0px); background-position-x: 50%;"></div>
                    <div class="container banner-content appear-animate text-center" data-animation-options="{
                        'name': 'blurIn',
                        'delay': '.3s'
                    }">
                        
                        <h2 class="banner-title font-weight-bold text-uppercase text-white mb-2">Phones and Tablets Collection
                        </h2>
                        <p class="font-primary text-white mb-6">Free shipping in the UK</p>
                        <a href="<?php echo e(url('categories')); ?>" class="btn btn-solid pl-5 pr-5">Discover&nbsp;Now</a>
                    </div>
                </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/index-2.blade.php ENDPATH**/ ?>