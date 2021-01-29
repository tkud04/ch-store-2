<?php
$title = "Welcome";
$pcClass = "";
?>
@extends('layout')





@section('content')

<?php
$categories = [
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
                                    <div class="widget widget-category">
                                        <ul class="menu vertical-menu category-menu">
										   <?php
										    foreach($categories as $cc)
											{
												$cu = url('categories')."?xf=".$cc['category'];
										   ?>
                                            <li><a href="{{$cu}}">{!! $cc['name'] !!}</a></li>
											<?php
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

                            @include('banner')

                            <section class="toolbox">
                                <div class="toolbox-left">
                                    <h2 class="title title-simple text-left">Best Sellers</h2>
                                    <p class="show-info">(showing 12 products of 99)</p>
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
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-1.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">iPad 12 inchi</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-2.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">Fashion White Tablet</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-3.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-new">new</label>
                                                </div>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">Sports Watch</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-4.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-label-group">
                                                    <label class="product-label label-sale">27% off</label>
                                                </div>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">SmartPhone</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-5.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">XBox Gaming Pad</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-6.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">Canon Digital Camera</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-7.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">XP Digital Camera</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-8.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">Sony Digital Camera</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-9.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">Sony Digital Camera 16x</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-10.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">Black IP Camera</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-11.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">iPhone 7</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6 mb-4">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="demo18-product.html">
                                                    <img src="images/pproduct-12.jpg" alt="product" width="280" height="315">
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo18-product.html">SamSung SmartPhone</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <nav class="mb-10 pb-3">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <i class="d-icon-arrow-left"></i>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item-total">of 6</li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next<i class="d-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
									 foreach($categories as $cc)
									 {
									?>
                                    <a href="#" class="tag">{!! $cc['name'] !!}</a>
                                    <?php
									 }
									?>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
@stop
