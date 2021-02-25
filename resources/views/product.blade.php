<?php
$title = $product['name'];
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<?php
               $id = $product['id'];
               $name = $product['name'];
               $model = $product['model'];
			   $pd = $product['data'];
			   $imgs = $product['imggs'];
			   $displayName = $name == "" ? $model : $name;
			   $uu = url('product')."?xf=".$model;
			   $cu = url('add-to-cart')."?xf=".$model."&qty=1";
			   $wu = url('add-to-wishlist')."?xf=".$model;
			   //$ccu = url('add-to-compare')."?sku=".$sku;
			   $description = $pd['description'];
			   $category = $pd['category'];
			   $manufacturer = $pd['manufacturer'];
			   $amount = $pd['amount'];
			   $imggs = $product['imggs'];
			    
?>
<div class="container">
<input type="hidden" id="product-xf" value="{{$id}}">
					<div class="product product-single row mb-4">
						<div class="col-md-6">
							<div class="product-gallery pg-vertical">
								<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner owl-loaded owl-drag">
									
								<div class="owl-stage-outer">
								   <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2305px;">
                                    <?php
                                     for($i = 0; $i < count($imggs); $i++)
									 {
										$ii = $imggs[$i];
										$ss = $i == 0 ? " active" : "";
                                    ?>								    
									<div class="owl-item active{{$ss}}" style="width: 461px;">
									   <figure class="product-image">
										<img src="{{$ii}}" data-zoom-image="{{$ii}}" alt="{{$displayName}}" width="800" height="900">
									    <div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:519.109px;width:461px;">
										  <div class="zoomWindowContainer" style="width: 400px;">
										    <div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 461px; height: 519.109px; float: left; display: none; cursor: crosshair; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;{{$ii}}&quot;); top: 0px; left: 0px;" class="zoomWindow">&nbsp;</div>
										  </div>
										</div>
									   </figure>
									 </div>
									 <?php
									 }
									 ?>
								   </div>
							    </div><a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div>
								<div class="owl-dots disabled"></div>
								
								</div>
								<div class="product-thumbs-wrap">
									<div class="product-thumbs">
									    <?php
                                         for($i = 0; $i < count($imggs); $i++)
									     {
										   $ii = $imggs[$i];
										   $ss = $i == 0 ? " active" : "";
                                        ?>	
										<div class="product-thumb{{$ss}}">
											<img src="{{$ii}}" alt="product thumbnail" width="109" height="122">
										</div>
										<?php
									     }
									    ?>
									</div>
									<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
									<button class="thumb-down"><i class="fas fa-chevron-right"></i></button>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product-details">
								<div class="product-navigation">
									<ul class="breadcrumb breadcrumb-lg">
										<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
										<li><a href="javascript:void(0)" class="active">{{$displayName}}</a></li>
										<li>Detail</li>
									</ul>
								</div>

								<h1 class="product-name">{{$displayName}}</h1>
								<div class="product-meta">
									Model #: <span class="product-sku">{{$model}}</span>
									@if($product['sku'] != "") SKU: <span class="product-sku">{{$product['sku']}}</span> @endif
									Manufacturer: <span class="product-brand"><a href="javascript:void(0)">{{$manufacturer['name']}}</a></span>
								</div>
								<div class="product-price">&#0163;{{$amount}}</div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6 reviews )</a>
								</div>
								<p class="product-short-desc">{!! $description !!}</p>

								<hr class="product-divider">

								<div class="product-form product-qty">
									<label>QTY:</label>
									<div class="product-form-group">
										<div class="input-group">
											<button class="quantity-minus d-icon-minus"></button>
											<input id="product-qty" class="quantity form-control" type="number" min="1" max="1000000">
											<button class="quantity-plus d-icon-plus"></button>
										</div>
										<a href="javascript:void(0)" id="product-add-to-cart-btn" class="btn-product btn-cart"><i class="d-icon-bag"></i>Add To
											Cart</a>
									</div>
								</div>

								<hr class="product-divider mb-3">

								<div class="product-footer">
									<div class="social-links">
										<a href="javascript:void(0)" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="javascript:void(0)" class="social-link social-twitter fab fa-twitter"></a>
										<a href="javascript:void(0)" class="social-link social-vimeo fab fa-vimeo-v"></a>
									</div>
									<div class="product-action">
										<a href="javascript:void(0)" onclick="addToWishlist({xf: '{{$product['id']}}')" class="btn-product btn-wishlist"><i class="d-icon-heart"></i>Add To
											Wishlist</a>
										<span class="divider"></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab tab-nav-simple product-tabs mb-4">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#product-tab-description">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-additional">Additional</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-shipping-returns">Shipping &amp; Returns</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#product-tab-reviews">Reviews (0)</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active in" id="product-tab-description">
								<p>{!! $description !!}</p>
							</div>
							<div class="tab-pane" id="product-tab-additional">
								<ul class="list-none">
									<li>
										<p><label>Model number:</label> {{$model}}</p>
									</li>
									@if($product['sku'] != "")
									<li>
										<p><label>SKU:</label> {{$product['sku']}}</p>
									</li>
									@endif
                                    @if($product['mpn'] != "")
									<li>
										<p><label>MPN:</label> {{$product['mpn']}}</p>
									</li>
									@endif
									@if($product['upc'] != "")
									<li>
										<p><label>UPC:</label> {{$product['upc']}}</p>
									</li>
									@endif
									@if($product['ean'] != "")
									<li>
										<p><label>EAN:</label> {{$product['ean']}}</p>
									</li>
									@endif
									@if($product['jan'] != "")
									<li>
										<p><label>JAN:</label> {{$product['jan']}}</p>
									</li>
									@endif
									@if($product['isbn'] != "")
									<li>
										<p><label>ISBN:</label> {{$product['isbn']}}</p>
									</li>
									@endif
								</ul>
							</div>
							<div class="tab-pane " id="product-tab-shipping-returns">
								<h6 class="mb-2">Free Shipping</h6>
								<p class="mb-0">We deliver to over 100 countries around the world. For full details of
									the delivery options we offer, please view our <a href="#" class="text-primary">Delivery
										information</a><br>We hope you’ll love every
									purchase, but if you ever need to return an item you can do so within a month of
									receipt. For full details of how to make a return, please view our <br><a href="#" class="text-primary">Returns information</a></p>
							</div>
							<div class="tab-pane " id="product-tab-reviews">
							 <?php
							  $reviews = [];
							  
							  if(count($reviews) > 0)
							  {
							 ?>
								<div class="d-flex align-items-center mb-5">
									<h4 class="mb-0 mr-2">Average Rating:</h4>
									<div class="ratings-container average-rating mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:80%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
								</div>

								<div class="comments mb-6">
									<ul>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/1.jpg" alt="avatar">
													</a>
												</figure>
												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Jimmy Pearson</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
															libero sodales leo, eget blandit nunc tortor eu nibh. Nullam
															mollis. Ut justo. Suspendisse potenti.
															Sed egestas, ante et vulputate volutpat, eros pede semper
															est, vitae luctus metus libero eu augue. Morbi purus libero,
															faucibus adipiscing, commodo quis, avida id, est. Sed
															lectus. Praesent elementum hendrerit tortor. Sed semper
															lorem at felis. Vestibulum volutpat.</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/3.jpg" alt="avatar">
													</a>
												</figure>

												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Johnathan Castillo</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque
															euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus
															pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- End Comments -->
								<div class="reply">
									<div class="title-wrapper text-left">
										<h3 class="title title-simple text-left text-normal">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
									</div>
									<div class="rating-form">
										<label for="rating">Your rating: </label>
										<span class="rating-stars selected">
											<a class="star-1" href="#">1</a>
											<a class="star-2" href="#">2</a>
											<a class="star-3" href="#">3</a>
											<a class="star-4 active" href="#">4</a>
											<a class="star-5" href="#">5</a>
										</span>

										<select name="rating" id="rating" required="" style="display: none;">
											<option value="">Rate…</option>
											<option value="5">Perfect</option>
											<option value="4">Good</option>
											<option value="3">Average</option>
											<option value="2">Not that bad</option>
											<option value="1">Very poor</option>
										</select>
									</div>
									<form action="#">
										<textarea id="reply-message" cols="30" rows="4" class="form-control mb-4" placeholder="Comment *" required=""></textarea>
										<div class="row">
											<div class="col-md-6 mb-5">
												<input type="text" class="form-control" id="reply-name" name="reply-name" placeholder="Name *" required="">
											</div>
											<div class="col-md-6 mb-5">
												<input type="email" class="form-control" id="reply-email" name="reply-email" placeholder="Email *" required="">
											</div>
										</div>
										<button type="submit" class="btn btn-primary btn-md">Submit<i class="d-icon-arrow-right"></i></button>
									</form>
								</div>
								<!-- End Reply -->
								<?php
										}
								?>
							</div>
						</div>
					</div>
                    
					<?php
					 $related = [];
					 if(count($related) > 0)
					 {
					?>
					<section>
						<h2 class="title">Our Featured</h2>

						<div class="owl-carousel owl-theme owl-nav-full owl-loaded owl-drag" data-owl-options="{
							'items': 5,
							'nav': false,
							'loop': false,
							'dots': true,
							'margin': 20,
							'responsive': {
								'0': {
									'items': 2
								},
								'768': {
									'items': 3
								},
								'992': {
									'items': 4,
									'dots': false,
									'nav': true
								}
							}
						}">
							
							
							
							
						<div class="owl-stage-outer">
						  <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1200px;">
						    <?php
							 foreach($related as $p)
							 {
							?>
						    <div class="owl-item active" style="width: 280px; margin-right: 20px;">
							  <div class="product shadow-media">
								<figure class="product-media">
									<a href="product.html">
										<img src="images/product/featured1.jpg" alt="product" width="280" height="315">
									</a>
									<div class="product-label-group">
										<label class="product-label label-new">new</label>
									</div>
									<div class="product-action-vertical">
										<a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
									</div>
									<div class="product-action">
										<a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
									</div>
								</figure>
								<div class="product-details">
									<a href="#" class="btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="product-name">
										<a href="product.html">Women's Fashion Summer Dress</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
									</div>
									<div class="ratings-container">
										<div class="ratings-full">
											<span class="ratings" style="width:100%"></span>
											<span class="tooltiptext tooltip-top"></span>
										</div>
										<a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
											)</a>
									</div>
								</div>
							  </div>
							</div>
							<?php
					         }
							?>
						   </div>
						 </div>
						 <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div>
					  </div>
					</section>
					<?php
					 }
					?>
				</div>
@stop
