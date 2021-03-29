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
<div class="container">
                    <div class="row">
                        <aside class="col-lg-3 sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            </div>
                            <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                            <div class="sidebar-content">
                                <div class="pin-wrapper" style="height: 891px;"><div class="sticky-sidebar pb-6" data-sticky-options="{'top': 0}" style="border-bottom: 0px none rgb(102, 102, 102); width: 280px;">
                                    <div class="widget widget-collapsible">
										<h3 class="widget-title">All Categories<span class="toggle-btn"></span><span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items search-ul">
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
											<li><a href="<?php echo e($cu); ?>"><?php echo $cc['name']; ?></a></li>
										   <?php
												}
												else if(count($children) > 0)
												{
													
										  ?>
                                           <li class="with-ul show">
												<a href="<?php echo e($cu); ?>"><?php echo $cc['name']; ?><i class="fas fa-chevron-down"></i><i class="fas fa-chevron-down"></i></a>
												<ul style="display: block">
												   <?php
												    foreach($children as $c2)
													{
													  $cu2 = url('category')."?xf=".$c2['category'];
												   ?>
													<li><a href="<?php echo e($cu2); ?>"><?php echo $c2['name']; ?></a></li>
													<?php
													 array_push($cccc,$c2['id']);
													}
													?>
												</ul>
											</li>
                                           <?php										   
												}
											  }
											  array_push($cccc,$cc['id']);
											}
										   ?>
										</ul>
									</div>
                                    <div class="header-search mb-6">
                                        <form action="#" class="input-wrapper">
                                            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required="">
                                            <button class="btn btn-search" type="submit">
                                                <i class="d-icon-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="banner banner-newsletter mb-6">
                                        <div class="banner-content w-100 text-center">
                                            <h4 class="banner-price-info text-center text-uppercase text-white"><strong class="d-block mb-0">Sale</strong><span class="d-block font-weight-semi-bold">many item</span></h4>
                                            <h3 class="banner-title mb-1 font-weight-bold">Don’t miss out on<br>the
                                                latest</h3>
                                            <p class="text-grey ls-m mb-3">Get notified of new products,
                                                limited<br>releases, and more.</p>
                                            <form action="#" class="input-wrapper input-wrapper-inline mb-6">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your e-mail address" required="">
                                                <button class="btn" type="submit"><i class="d-icon-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div></div>
                            </div>
                        </aside>
                        <div class="col-lg-9">

                            <?php echo $__env->make('banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <section class="toolbox">
                                <div class="toolbox-left">
                                    <h2 class="title title-simple text-left">Best Sellers</h2>
                                    <p class="show-info">(showing <?php echo e(count($bs)); ?> of <?php echo e(count($bs)); ?> products)</p>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-layout">
                                        <a href="#" class="btn-layout">
                                            <svg width="16" height="10">
                                                <rect x="0" y="0" width="4" height="4"></rect>
                                                <rect x="6" y="0" width="10" height="4"></rect>
                                                <rect x="0" y="6" width="4" height="4"></rect>
                                                <rect x="6" y="6" width="10" height="4"></rect>
                                            </svg>
                                        </a>
                                        <a href="#" class="btn-layout active">
                                            <svg width="16" height="10">
                                                <rect x="0" y="0" width="4" height="4"></rect>
                                                <rect x="6" y="0" width="4" height="4"></rect>
                                                <rect x="12" y="0" width="4" height="4"></rect>
                                                <rect x="0" y="6" width="4" height="4"></rect>
                                                <rect x="6" y="6" width="4" height="4"></rect>
                                                <rect x="12" y="6" width="4" height="4"></rect>
                                            </svg>
                                        </a>
                                    </div>
                                    <a href="#" class="right-sidebar-toggle">Filters</a>
                                </div>
                            </section>
                            <section class="product-wrapper mb-8">
                                <div class="row gutter-xs">
                                    <?php
									#$bestSellers = []; $topProducts = [];
									
									  foreach($bs as $p)
									  {
										  $data = $p['data'];
										  $imgs = $p['imggs'];
										  $pc = $data['category'];
										  $pm = $data['manufacturer'];
										  $amt = $data['amount'];
										  $xf = $p['id'];
										  $uu = url('product')."?xf=".$p['model'];
									?>
									 <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="<?php echo e($uu); ?>">
                                                    <img src="<?php echo e($imgs[0]); ?>" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                                <div class="product-action-vertical">
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-cart" onclick="addToCart({xf: '<?php echo e($xf); ?>'})" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" onclick="addToWishlist({xf: '<?php echo e($xf); ?>'})" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="<?php echo e($uu); ?>"><?php echo e($p['name']); ?></a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">&#0163;<?php echo e(number_format($amt,2)); ?></ins><del class="old-price">&#0163;<?php echo e(number_format($amt + 50,2)); ?></del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php
									  }
									?>
                                </div>
                            </section>
							<section class="toolbox">
                                <div class="toolbox-left">
                                    <h2 class="title title-simple text-left">Top products</h2>
                                    <p class="show-info">(showing <?php echo e(count($tp)); ?> of <?php echo e(count($tp)); ?> products)</p>
                                </div>
                            </section>
							 <section class="product-wrapper mb-8">
                                <div class="row gutter-xs">
                                    <?php
									  foreach($tp as $p)
									  {
										  $data = $p['data'];
										  $imgs = $p['imggs'];
										  $pc = $data['category'];
										  $pm = $data['manufacturer'];
										  $amt = $data['amount'];
										  $uu = url('product')."?xf=".$p['model'];
									?>
									 <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="<?php echo e($uu); ?>">
                                                    <img src="<?php echo e($imgs[0]); ?>" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                                <div class="product-action-vertical">
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="javascript:void(0)" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="javascript:void(0)" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="<?php echo e($uu); ?>"><?php echo e($p['name']); ?></a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">&#0163;<?php echo e(number_format($amt,2)); ?></ins><del class="old-price">&#0163;<?php echo e(number_format($amt + 50,2)); ?></del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<?php
									  }
									?>
                                </div>
                            </section>
                        </div>
                    </div>
                    <aside class="right-sidebar shop-sidebar">
                        <div class="sidebar-overlay"></div>
                        <div class="sidebar-content">
                            <a href="#" class="sidebar-close"><i class="d-icon-times"></i>Close</a>
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">Sort by<span class="toggle-btn"></span></h3>
                                <ul class="widget-body filter-items">
                                    <li><a href="#">Default</a></li>
                                    <li><a href="#">Likes</a></li>
                                    <li><a href="#">Average rating</a></li>
                                    <li><a href="#">Newest</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">Filter By Price<span class="toggle-btn"></span></h3>
                                <ul class="widget-body filter-items">
                                    <li><a href="#">$0.00 - $50.00</a></li>
                                    <li><a href="#">$50.00 - $100.00</a></li>
                                    <li><a href="#">$100.00 - $200.00</a></li>
                                    <li><a href="#">$200.00+</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">Category<span class="toggle-btn"></span></h3>
                                <div class="widget-body pt-6">
								    <?php
									 foreach($c as $cc)
									 {
									?>
                                    <a href="#" class="tag"><?php echo $cc['name']; ?></a>
                                    <?php
									 }
									?>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/index.blade.php ENDPATH**/ ?>