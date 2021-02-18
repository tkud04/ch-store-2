<?php
$title = "Categories";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
<section class="mt-md-10 pt-md-3 mt-9">
                        <h2 class="title">Available Categories</h2>
                        <div class="row">
						<?php
						 if(count($c) > 0)
						 {
						   foreach($c as $cc)
						   {
							   $cu = url('category')."?xf=".$cc['id']; 
							   $imgs = $cc['image'];
							   $parent = $cc['parent'];
							   $cp = [];
						?>
                            <div class="col-sm-6 col-lg-3 mb-4">
                                <div class="category category-default category-absolute">
                                    <a href="{{$cu}}">
                                        <figure class="category-media">
                                            <img src="{{$imgs[0]}}" alt="category" width="280" height="280">
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="{{$cu}}">{{ucwords($cc['name'])}}</a></h4>
                                        <span class="category-count">
                                            <span>{{$cc['product_count']}}</span> Products
                                        </span>
                                    </div>
                                </div>
                            </div>
                          <?php
						   }
						 }
						  ?>
                        </div>
                    </section>
@stop
