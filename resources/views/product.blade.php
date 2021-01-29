<?php
$title = "Product";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
				<div class="container-fluid">
					<div class="product-navigation">
						<ul class="breadcrumb breadcrumb-lg">
							<li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
							<li><a href="#" class="active">Products</a></li>
							<li>Detail</li>
						</ul>
						<ul class="product-nav">
							<li class="product-nav-prev">
								<a href="#">
									<i class="d-icon-arrow-left"></i> Prev
									<span class="product-nav-popup">
										<img src="images/product/product-thumb-prev.jpg" alt="product thumbnail" width="110" height="123">
										<span class="product-name">Sed egtas Dnte Comfort</span>
									</span>
								</a>
							</li>
							<li class="product-nav-next">
								<a href="#">
									Next <i class="d-icon-arrow-right"></i>
									<span class="product-nav-popup">
										<img src="images/product/product-thumb-next.jpg" alt="product thumbnail" width="110" height="123">
										<span class="product-name">Sed egtas Dnte Comfort</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="row gutter-lg">
						<aside class="col-lg-3 col-xxl-2 right-sidebar sidebar-fixed sticky-sidebar-wrapper">
							<div class="sidebar-overlay">
								<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
							</div>
							<a href="#" class="sidebar-toggle"><i class="fas fa-chevron-left"></i></a>
							<div class="sidebar-content">
								<div class="pin-wrapper" style="height: 1064.28px;"><div class="sticky-sidebar" style="border-bottom: 0px none rgb(102, 102, 102); width: 304.75px;">
									<div class="service-list mb-4">
										<div class="icon-box icon-box-side icon-box3">
											<span class="icon-box-icon">
												<i class="d-icon-secure"></i>
											</span>
											<div class="icon-box-content">
												<h4 class="icon-box-title">Secured Payment</h4>
												<p>We ensure secure payment!</p>
											</div>
										</div>
										<div class="icon-box icon-box-side icon-box1">
											<span class="icon-box-icon">
												<i class="d-icon-truck"></i>
											</span>
											<div class="icon-box-content">
												<h4 class="icon-box-title">Free Shipping</h4>
												<p>On all US orders above $99</p>
											</div>
										</div>
										<div class="icon-box icon-box-side icon-box2">
											<span class="icon-box-icon">
												<i class="d-icon-money"></i>
											</span>
											<div class="icon-box-content">
												<h4 class="icon-box-title">Money Back guarantee</h4>
												<p>Any back within 30 days</p>
											</div>
										</div>
									</div>
									<div class="banner banner-fixed mb-4">
										<figure>
											<img src="images/product/product-banner.jpg" alt="banner" width="280" height="320">
										</figure>
									</div>

									<div class="widget widget-products">
										<h4 class="widget-title">Our Featured</h4>
										<div class="widget-body">
											<div class="owl-carousel owl-nav-top owl-loaded owl-drag" data-owl-options="{
												'items': 1,
												'loop': true,
												'nav': true,
												'dots': false,
'margin': 20											}">
												<!-- End Products Col -->
												<!-- End Products Col -->
											<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-649px, 0px, 0px); transition: all 0s ease 0s; width: 1949px;"><div class="owl-item cloned" style="width: 304.75px; margin-right: 20px;"><div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div></div><div class="owl-item cloned" style="width: 304.75px; margin-right: 20px;"><div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div></div><div class="owl-item active" style="width: 304.75px; margin-right: 20px;"><div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div></div><div class="owl-item" style="width: 304.75px; margin-right: 20px;"><div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div></div><div class="owl-item cloned" style="width: 304.75px; margin-right: 20px;"><div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div></div><div class="owl-item cloned" style="width: 304.75px; margin-right: 20px;"><div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget1.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget2.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.html">
																<img src="images/shop/product-widget3.jpg" alt="product" width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.html">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
										</div>
									</div><!-- End Widget Products -->
								</div></div>
							</div>
						</aside>
						<div class="col-lg-9 col-xxl-10">
							<div class="product product-single row mb-4">
								<div class="col-md-6">
									<div class="product-gallery product-gallery-sticky">
										<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner owl-loaded owl-drag">
											
											
											
											
											
										<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2386px;"><div class="owl-item active" style="width: 477.125px;"><figure class="product-image">
												<img src="images/product/product-1-580x580.jpg" data-zoom-image="images/product/product-1-800x900.jpg" alt="Women's Brown Leather Backpacks" width="800" height="900">
											<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:477.125px;width:477.125px;"><div class="zoomWindowContainer" style="width: 400px;"><div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: -91.7493px 0px; width: 477.125px; height: 477.125px; float: left; cursor: crosshair; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;images/product/product-1-800x900.jpg&quot;); top: 0px; left: 0px; opacity: 0.0732729;" class="zoomWindow">&nbsp;</div></div></div></figure></div><div class="owl-item" style="width: 477.125px;"><figure class="product-image">
												<img src="images/product/product-2-580x580.jpg" data-zoom-image="images/product/product-2-800x900.jpg" alt="Women's Brown Leather Backpacks" width="800" height="900">
											<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:477.125px;width:477.125px;"><div class="zoomWindowContainer" style="width: 400px;"><div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 477.125px; height: 477.125px; float: left; display: none; cursor: crosshair; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;images/product/product-2-800x900.jpg&quot;);" class="zoomWindow">&nbsp;</div></div></div></figure></div><div class="owl-item" style="width: 477.125px;"><figure class="product-image">
												<img src="images/product/product-3-580x580.jpg" data-zoom-image="images/product/product-3-800x900.jpg" alt="Women's Brown Leather Backpacks" width="800" height="900">
											<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:477.125px;width:477.125px;"><div class="zoomWindowContainer" style="width: 400px;"><div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 477.125px; height: 477.125px; float: left; display: none; cursor: crosshair; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;images/product/product-3-800x900.jpg&quot;);" class="zoomWindow">&nbsp;</div></div></div></figure></div><div class="owl-item" style="width: 477.125px;"><figure class="product-image">
												<img src="images/product/product-4-580x580.jpg" data-zoom-image="images/product/product-4-800x900.jpg" alt="Women's Brown Leather Backpacks" width="800" height="900">
											<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:477.125px;width:477.125px;"><div class="zoomWindowContainer" style="width: 400px;"><div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 477.125px; height: 477.125px; float: left; display: none; cursor: crosshair; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;images/product/product-4-800x900.jpg&quot;);" class="zoomWindow">&nbsp;</div></div></div></figure></div><div class="owl-item" style="width: 477.125px;"><figure class="product-image">
												<img src="images/product/product-5-580x580.jpg" data-zoom-image="images/product/product-5-800x900.jpg" alt="Women's Brown Leather Backpacks" width="800" height="900">
											<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:477.125px;width:477.125px;"><div class="zoomWindowContainer" style="width: 400px;"><div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 477.125px; height: 477.125px; float: left; display: none; cursor: crosshair; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;images/product/product-5-800x900.jpg&quot;);" class="zoomWindow">&nbsp;</div></div></div></figure></div></div></div><a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
										<div class="product-thumbs-wrap">
											<div class="product-thumbs owl-carousel owl-loaded owl-drag">
												
												
												
												
												
											<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 609px;"><div class="owl-item active" style="width: 121.781px;"><div class="product-thumb active">
													<img src="images/product/product-1-137x137.jpg" alt="product thumbnail" width="109" height="122">
												</div></div><div class="owl-item active" style="width: 121.781px;"><div class="product-thumb">
													<img src="images/product/product-2-137x137.jpg" alt="product thumbnail" width="109" height="122">
												</div></div><div class="owl-item active" style="width: 121.781px;"><div class="product-thumb">
													<img src="images/product/product-3-137x137.jpg" alt="product thumbnail" width="109" height="122">
												</div></div><div class="owl-item active" style="width: 121.781px;"><div class="product-thumb">
													<img src="images/product/product-4-137x137.jpg" alt="product thumbnail" width="109" height="122">
												</div></div><div class="owl-item active" style="width: 121.781px;"><div class="product-thumb">
													<img src="images/product/product-5-137x137.jpg" alt="product thumbnail" width="109" height="122">
												</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fas fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fas fa-chevron-right"></i></button></div><div class="owl-dots disabled"></div></div>
											<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
											<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="product-details">
										<h1 class="product-name">Women's Brown Leather Backpacks</h1>
										<div class="product-meta">
											SKU: <span class="product-sku">12345670</span>
											BRAND: <span class="product-brand">The Northland</span>
										</div>
										<div class="product-price">$139.00</div>
										<div class="ratings-container">
											<div class="ratings-full">
												<span class="ratings" style="width:80%"></span>
												<span class="tooltiptext tooltip-top"></span>
											</div>
											<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6
												reviews )</a>
										</div>
										<p class="product-short-desc mb-5">Sed egestas, ante et vulputate volutpat, eros
											pede semper est, vitae luctus metus libero eu augue. Morbi purus liberpuro
											ate vol faucibus adipiscing. Sed lectus te.<br>
											et vulputate aucibus adipiscing. Sed lectus. us adipiscing. Sed lectus. </p>
										<div class="product-form product-color">
											<label>Color:</label>
											<div class="product-variations">
												<a class="color" data-src="images/demos/demo7/products/big1.jpg" href="#" style="background-color: #d99e76"></a>
												<a class="color" data-src="images/demos/demo7/products/2.jpg" href="#" style="background-color: #267497"></a>
												<a class="color" data-src="images/demos/demo7/products/3.jpg" href="#" style="background-color: #9a999d"></a>
												<a class="color" data-src="images/demos/demo7/products/4.jpg" href="#" style="background-color: #2b2b2b"></a>
											</div>
										</div>
										<div class="product-form product-size">
											<label>Size:</label>
											<div class="product-form-group">
												<div class="product-variations">
													<a class="size" href="#">S</a>
													<a class="size" href="#">M</a>
													<a class="size" href="#">L</a>
													<a class="size" href="#">XL</a>
													<a class="size" href="#">2XL</a>
												</div>
												<a href="#" class="size-guide"><i class="d-icon-ruler"></i>Size
													Guide</a>
												<a href="#" class="product-variation-clean" style="display: none;">Clean All</a>
											</div>
										</div>
										<div class="product-variation-price">
											<span>$239.00</span>
										</div>

										<hr class="product-divider">

										<div class="product-form product-qty">
											<label>QTY:</label>
											<div class="product-form-group">
												<div class="input-group">
													<button class="quantity-minus d-icon-minus"></button>
													<input class="quantity form-control" type="number" min="1" max="1000000">
													<button class="quantity-plus d-icon-plus"></button>
												</div>
												<button class="btn-product btn-cart" disabled="disabled"><i class="d-icon-bag"></i>Add
													To Cart</button>
											</div>
										</div>

										<hr class="product-divider mb-3">

										<div class="product-footer">
											<div class="social-links">
												<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
												<a href="#" class="social-link social-twitter fab fa-twitter"></a>
												<a href="#" class="social-link social-vimeo fab fa-vimeo-v"></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-wishlist"><i class="d-icon-heart"></i>Add To Wishlist</a>
												<span class="divider"></span>
												<a href="#" class="btn-product btn-compare"><i class="d-icon-random"></i>Add
													To Compare</a>
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
													<a class="nav-link" href="#product-tab-shipping-returns">Shipping
														&amp; Returns</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#product-tab-reviews">Reviews (8)</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active in" id="product-tab-description">
													<p>Donec tellus massa, tristique sit amet condim vel, facilisis quis
														sapien. Praesent id engmin rae sitf amet odio vulputate eleifend
														in in tortor. Sellus massa, tristique it amet cond coim vel,
														faci lisis rae Facilisis quis sapien. Praesent id enim sit amet
														odio vulputatefi.</p>
													<ul class="list-type-check ml-2 font-secondary">
														<li>Praesent id enim sit amet.</li>
														<li>Tdio vulputate eleifend in in tortor. ellus massa.Dristique
															sitiismonec.</li>
														<li>Massa ristique sit amet condim vel, facilisis
															quimequistiqutiqu amet condim.</li>
														<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet
														</li>
													</ul>
													<p>Praesent id enim sit amet odio vulputate eleifend in in tortor.
														Sellus massa, tristique sitiismonec tellus massa, tristique sit
														amet condim vel, facilisis quimequistiqutiqu amet condim vel,
														facilisis Facilisis quis sapien. Praesent id enim sit amet odio
														vulputate odio vulputate eleifend in in tortor. Sellus massa,
														tristique sitiismonec tellus massa, tristique sit
														ametcdimel,facilisis quimequistiqutiqu amet condim vel,
														facilisis Facilisis quis sapien. Praesent id enim sit amet odio
														vulputate</p>
												</div>
												<div class="tab-pane" id="product-tab-additional">
													<ul class="list-none">
														<li><label>Color:</label>
															<p>Black, Brown, Coffee</p>
														</li>
														<li><label>Style:</label>
															<p>Vintage</p>
														</li>
														<li><label>Material:</label>
															<p>PU, Faux Leather</p>
														</li>
														<li><label>Closure Type:</label>
															<p>Hasp</p>
														</li>
														<li><label>Bags Structure:</label>
															<p>Cell phone Pocket, Zipper Pouch</p>
														</li>
														<li><label>Size:</label>
															<p>L</p>
														</li>
														<li><label>Capacity:</label>
															<p>15.6 Inch Laptop</p>
														</li>
													</ul>
												</div>
												<div class="tab-pane " id="product-tab-shipping-returns">
													<h6 class="mb-2">Free Shipping</h6>
													<p class="mb-0">We deliver to over 100 countries around the world.
														For full details of the delivery options we offer, please view
														our <a href="#" class="text-primary">Delivery
															information</a><br>We hope you’ll love every purchase, but
														if you ever need to return an item you can do so within a month
														of receipt. For full details of how to make a return, please
														view our <br><a href="#" class="text-primary">Returns
															information</a></p>
												</div>
												<div class="tab-pane " id="product-tab-reviews">
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
																			<span class="comment-date">November 9, 2018
																				at 2:19 pm</span>
																		</div>

																		<div class="comment-content">
																			<p>Sed pretium, ligula sollicitudin laoreet
																				viverra, tortor libero sodales leo, eget
																				blandit nunc tortor eu nibh. Nullam
																				mollis. Ut justo. Suspendisse potenti.
																				Sed egestas, ante et vulputate volutpat,
																				eros pede semper est, vitae luctus metus
																				libero eu augue. Morbi purus libero,
																				faucibus adipiscing, commodo quis, avida
																				id, est. Sed lectus. Praesent elementum
																				hendrerit tortor. Sed semper lorem at
																				felis. Vestibulum volutpat.</p>
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
																			<span class="comment-date">November 9, 2018
																				at 2:19 pm</span>
																		</div>

																		<div class="comment-content">
																			<p>Vestibulum volutpat, lacus a ultrices
																				sagittis, mi neque euismod dui, eu
																				pulvinar nunc sapien ornare nisl.
																				Phasellus pede arcu, dapibus eu,
																				fermentum et, dapibus sed, urna.</p>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<!-- End Comments -->
													<div class="reply">
														<div class="title-wrapper text-left">
															<h3 class="title title-simple text-left text-normal">Add a
																Review</h3>
															<p>Your email address will not be published. Required fields
																are marked *</p>
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
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<section>
								<h2 class="title title-link mb-4">New Arrivals
									<a href="#" class="btn btn-link btn-slide-right">View more<i class="fa fa-chevron-right"></i></a>
								</h2>
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
										},
										'1200': {
											'items': 5
										}
									}
								}">
									
									
									
									
									
								<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 995px;"><div class="owl-item active" style="width: 178.85px; margin-right: 20px;"><div class="product shadow-media">
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
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
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
												<a href="#" class="rating-reviews">( <span class="review-count">6</span>
													reviews )</a>
											</div>
										</div>
									</div></div><div class="owl-item active" style="width: 178.85px; margin-right: 20px;"><div class="product shadow-media">
										<figure class="product-media">
											<a href="product.html">
												<img src="images/product/featured2.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<a href="#" class="btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
											<div class="product-cat">
												<a href="shop-grid-3col.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="product.html">Mackintosh Poket Backpack</a>
											</h3>
											<div class="product-price">
												<span class="price">$35.00</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( <span class="review-count">6</span>
													reviews )</a>
											</div>
										</div>
									</div></div><div class="owl-item active" style="width: 178.85px; margin-right: 20px;"><div class="product shadow-media">
										<figure class="product-media">
											<a href="product.html">
												<img src="images/product/featured3.jpg" alt="product" width="280" height="315">
											</a>

											<div class="product-label-group">
												<label class="product-label label-sale">27% off</label>
											</div>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<a href="#" class="btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
											<div class="product-cat">
												<a href="shop-grid-3col.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="product.html">Women's Fashion T Shirt</a>
											</h3>
											<div class="product-price">
												<span class="price">$19.00</span>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( <span class="review-count">6</span>
													reviews )</a>
											</div>
										</div>
									</div></div><div class="owl-item active" style="width: 178.85px; margin-right: 20px;"><div class="product shadow-media">
										<figure class="product-media">
											<a href="product.html">
												<img src="images/product/featured4.jpg" alt="product" width="280" height="315">
											</a>
											<div class="product-action-vertical">
												<a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
											</div>
											<div class="product-action">
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
											</div>
										</figure>
										<div class="product-details">
											<a href="#" class="btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
											<div class="product-cat">
												<a href="shop-grid-3col.html">categories</a>
											</div>
											<h3 class="product-name">
												<a href="product.html">Fashion Training Sneaker</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">$98.00</ins><del class="old-price">$210.00</del>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="#" class="rating-reviews">( <span class="review-count">6</span>
													reviews )</a>
											</div>
										</div>
									</div></div><div class="owl-item active" style="width: 178.85px; margin-right: 20px;"><div class="product shadow-media">
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
												<a href="#" class="btn-product btn-quickview" title="Quick View">Quick
													View</a>
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
												<a href="#" class="rating-reviews">( <span class="review-count">6</span>
													reviews )</a>
											</div>
										</div>
									</div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
							</section>
						</div>
					</div>
				</div>
@stop
