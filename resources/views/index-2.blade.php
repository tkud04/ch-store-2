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
                                            <img src="{{$cc['image'][0]}}" alt="category" width="280" height="280" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="{{$cu}}">{!! $cc['name'] !!}</a></h4>
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
				
				<section class="product-wrapper container appear-animate mt-10 pt-3 pb-8" data-animation-options="{
                    'delay': '.3s'
                }">
                    <h2 class="title">Best Selling</h2>
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
                        <div class="product">
                            <figure class="product-media">
                                <a href="{{$uu}}">
                                    <img src="{{$imgs[0]}}" alt="{{$p['name']}}" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist" title="Add to wishlist"><i
                                        class="d-icon-heart"></i></a>
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">categories</a>
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
                </section>
@stop
