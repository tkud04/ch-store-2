<?php
$title = "About Us";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<section class="about-section">
                    <div class="container">
                        <h2 class="title mb-lg-9">Who We Are</h2>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <img class="w-100 mb-4 appear-animate fadeInLeftShorter appear-animation-visible" data-animation-options="{'name':'fadeInLeftShorter'}" src="images/about-2.jpg" alt="Mobile Buzz" width="587" height="517" style="position: sticky; top: 2rem; animation-duration: 1.2s;">
                            </div>
                            <div class="col-md-6 order-md-first pt-md-5">
                                <div class="mb-8">
								  @if(count($info) > 0)
								   {!! $info['content'] !!}
								  @endif
								</div>

                                
                                <ul class="list list-circle row cols-sm-2 cols-md-1 cols-xl-2 font-weight-bold text-dark font-primary mb-4">
                                    <li class="appear-animate" data-animation-options="{'name': 'fadeInRightShorter','delay':'.4s'}"><i class="fa fa-check"></i>Free shipping in the United Kinggdom</li>
                                    <li class="appear-animate" data-animation-options="{'name': 'fadeInRightShorter'}">
                                        <i class="fa fa-check"></i>Customer suppport 24/7</li>
                                    <li class="appear-animate" data-animation-options="{'name': 'fadeInRightShorter','delay':'.5s'}"><i class="fa fa-check"></i>100% secure payment</li>
                                    <li class="appear-animate" data-animation-options="{'name': 'fadeInRightShorter','delay':'.3s'}"><i class="fa fa-check"></i>Wide range of categories</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Section-->

                <section class="clients-section grey-section pt-10 pb-10">
                    <div class="container">
                        <h2 class="title mt-3">Our Clients</h2>
                        <div class="owl-carousel owl-theme brand-carousel pt-1 owl-loaded owl-drag" data-owl-options="{
                            'items': 7,
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 30,
                            'loop': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
                            
							<?php
							 $imgLength = 6; $ctr = 0;
							?>
                            
                        <div class="owl-stage-outer">
						   <div class="owl-stage" style="transform: translate3d(-1613px, 0px, 0px); transition: all 1s ease 0s; width: 3631px;">
						      <?php
							   for($i = 0; $i < 18; $i++)
							   {
								   ++$ctr;
								   $ii = $ctr;
								   if($ii > $imgLength)
								   {
									   $ii = 1;
									   $ctr = 1;
								   }
								   
							  ?>
							  <div class="owl-item cloned" style="width: 171.667px; margin-right: 30px;">
							    <figure><img src="{{asset('images/brand-'.$ii.'.png')}}" alt="brand" width="180" height="100"></figure>
							  </div>
							  <?php
							   }
							  ?>
						   </div>
						</div>
						<div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="d-icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="d-icon-angle-right"></i></button></div><div class="owl-dots disabled"></div>							
					  </div>
                    </div>
                </section>
                <!-- End Clients Section -->
@stop
