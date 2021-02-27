<aside class="col-lg-3 sidebar sidebar-fixed shop-sidebar sticky-sidebar-wrapper">
							<div class="sidebar-overlay">
								<a class="sidebar-close" href="javascript:void(0)"><i class="d-icon-times"></i></a>
							</div>
							<div class="sidebar-content">
								<div class="pin-wrapper" style="height: 1182.88px;"><div class="sticky-sidebar" style="border-bottom: 0px none rgb(102, 102, 102); width: 272.5px;">
									<div class="widget widget-collapsible">
										<h3 class="widget-title">All Categories<span class="toggle-btn"></span><span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items search-ul">
										  <?php
										  $cccc = []; $mmmm = [];
										  
										    foreach($c as $cc)
											{
												if(!in_array($cc['id'],$cccc))
												{
												$cu = url('category')."?xf=".$cc['category'];
												$children = $cc['children'];
												
												if(count($children) == 0)
												{
													
										   ?>
											<li><a href="{{$cu}}">{!! $cc['name'] !!}</a></li>
										   <?php
												}
												else if(count($children) > 0)
												{
													
										  ?>
                                           <li class="with-ul show">
												<a href="{{$cu}}">{!! $cc['name'] !!}<i class="fas fa-chevron-down"></i><i class="fas fa-chevron-down"></i></a>
												<ul style="display: block">
												   <?php
												    foreach($children as $c2)
													{
													  $cu2 = url('category')."?xf=".$c2['category'];
												   ?>
													<li><a href="{{$cu2}}">{!! $c2['name'] !!}</a></li>
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
									<div class="widget widget-collapsible">
										<h3 class="widget-title">All Manufacturers<span class="toggle-btn"></span><span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items search-ul">
										  <?php
										 
										    foreach($m as $mm)
											{
												if(!in_array($mm['id'],$mmmm))
												{
												$mu = url('manufacturer')."?xf=".$mm['id'];
												
													
										   ?>
											<li><a href="{{$mu}}">{!! $mm['name'] !!}</a></li>										  
                                           <?php										   
												}
											  array_push($mmmm,$mm['id']);
											}
										   ?>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Price<span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items">
											<li><input type="text" class="ssb-input" id="ssb-price-from" placeholder="Min price"></li>
											<li><input type="text" class="ssb-input" id="ssb-price-to" placeholder="Max price"></li>											
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Size<span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items">
											<li><input type="text" class="ssb-input" id="ssb-size-length" placeholder="Length"></li>
											<li><input type="text" class="ssb-input" id="ssb-size-width" placeholder="Width"></li>	
											<li><input type="text" class="ssb-input" id="ssb-size-height" placeholder="Height"></li>	
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<div class="filter-actions">
										<button id="ssb-btn" class="btn btn-sm btn-primary">Search</button>
									</div>
									</div>
									
								</div></div>
							</div>
						</aside>