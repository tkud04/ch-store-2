<?php
$title = "Welcome";
$pcClass = "";
?>
@extends('layout')





@section('content')

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

 @include('banner-2',['banners' => $banners])
 
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
												
												$cu = url('category')."?xf=".$cc['category'];
												$children = $cc['children'];
												
												
													
										   ?>
                            <div class="col-md-3 col-6 mb-4">
                                <div
                                    class="category category-default category-default-1 category-absolute overlay-zoom">
                                    <a href="{{$cu}}">
                                        <figure class="category-media">
                                            <img src="{{$cc['image'][0]}}" alt="category" class="rc" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="{{$cu}}">{!! $cc['name'] !!}</a></h4>
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
									
									  foreach($bs as $p)
									  {
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
                                <a href="{{$uu}}">
                                    <img src="{{$imgs[0]}}" alt="{{$p['name']}}" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="javascript:void(0)" onclick="addToCart({xf: '{{$xf}}',qty: 1})" class="btn-product-icon btn-cart" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0)" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="javascript:void(0)" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="{{$pcu}}">{{$pcn}}</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="{{$uu}}">{{$p['name']}}</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#0163;{{number_format($amt,2)}}</ins><del class="old-price">&#0163;{{number_format($amt + 50,2)}}</del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="{{$uu}}" class="rating-reviews">( 6 reviews )</a>
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
                                    <a href="{{url('categories')}}" class="btn btn-link btn-underline btn-sm">Shop Now<i
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
                                    <a href="{{url('categories')}}" class="btn btn-dark btn-md mb-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-3 banner-fixed content-middle" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.5s'
                            }">
                                <figure>
                                    <img src="images/banner5.jpg" alt="banner" width="380"
                                        height="207" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold mb-0">HP Laptops</h3>
                                    <h4 class="banner-subtitle font-weight-semi-bold ls-s text-body mb-0">Up to 30% off
                                    </h4>
                                    <hr class="bg-dark">
                                    <a href="{{url('categories')}}" class="btn btn-link btn-underline btn-sm">Shop Now<i
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
                    <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
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
					<?php
									#$bestSellers = []; $topProducts = [];
									
									  foreach($tp as $p)
									  {
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
                        <div class="product">
                            <figure class="product-media">
                                <a href="{{$uu}}">
                                    <img src="{{$imgs[0]}}" alt="{{$p['name']}}" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="javascript:void(0)" onclick="addToCart({xf: '{{$xf}}',qty: 1})" class="btn-product-icon btn-cart" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="javascript:void(0)" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="javascript:void(0)" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="{{$pcu}}">{{$pcn}}</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="{{$uu}}">{{$p['name']}}</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">&#0163;{{number_format($amt,2)}}</ins><del class="old-price">&#0163;{{number_format($amt + 50,2)}}</del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="{{$uu}}" class="rating-reviews">( 6 reviews )</a>
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
                        <a href="{{url('categories')}}" class="btn btn-solid pl-5 pr-5">Discover&nbsp;Now</a>
                    </div>
                </section>
@stop
