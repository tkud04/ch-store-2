<?php
$title = "Manufacturers";
$ph = false;
$pcClass = "";
?>
@extends('layout')

@section('content')
<section class="mt-md-10 pt-md-3 mt-9">
                        <h2 class="title">Available Manufacturers</h2>
						<?php
						 if(count($c) > 0)
						 {
						?>
						
						<div class="owl-carousel owl-theme owl-loaded owl-drag" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'items': 4,
                            'margin':  20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 1 
                                },
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4,
                                    'dots': false
                                }
                            }
                        }">
                            
                        <div class="owl-stage-outer">
						   <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1200px;">
						     <?php
							   foreach($m as $mm)
						       {
							     $cu = url('manufacturer')."?xf=".$mm['id']; 
							     $imgs = $mm['image'];
							    # $parent = $mm['parent'];
							     $pc = $mm['product_count'];
							     $pcText = $pc == 1 ? "Product" : "Products";
							 ?>
							 <div class="owl-item active" style="width: 280px; margin-right: 20px;">
							   <div class="category category-ellipse category-absolute overlay-zoom">
                                <a href="{{$cu}}">
                                    <figure class="category-media">
                                        <img src="{{$imgs[0]}}" alt="category" width="280" height="280">
                                    </figure>
                                </a>
                                <div class="category-content">
                                    <h4 class="category-name"><a href="{{$cu}}">{{ucwords($mm['name'])}}</a></h4>
                                    <span class="category-count">
                                        <span>{{$pc}}</span> {{$pcText}}
                                    </span>
                                </div>
                               </div>
							</div>
							<?php
						   }
							?>
						   </div>
						</div>
						<div class="owl-nav disabled">
						  <button type="button" role="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button>
						  <button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button>
						</div>
						<div class="owl-dots disabled"></div>
					</div>
						 
                          <?php
						 }
						  ?>
                    </section>
@stop
