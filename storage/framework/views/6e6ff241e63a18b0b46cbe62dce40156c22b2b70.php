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
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Price<span class="toggle-btn"></span></h3>
										<div class="widget-body">
											<form action="#">
												<div class="filter-price-slider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="18.00"></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="35.00"></div></div></div></div>

												<div class="filter-actions">
													<button type="submit" class="btn btn-sm btn-primary">Filter</button>

													<div class="filter-price-text">Price:
														<span class="filter-price-range">$18 - $35</span>
													</div>
												</div>
											</form><!-- End Filter Price Form -->
										</div>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Size<span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items">
											<li><a href="javascript:void(0)">Small<span>(2)</span></a></li>
											<li><a href="javascript:void(0)">Medium<span>(1)</span></a></li>
											<li><a href="javascript:void(0)">Large<span>(9)</span></a></li>
											<li><a href="javascript:void(0)">Extra Large<span>(1)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Color<span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items">
											<li><a href="javascript:void(0)">Black<span>(2)</span></a></li>
											<li><a href="javascript:void(0)">Blue<span>(1)</span></a></li>
											<li><a href="javascript:void(0)">Green<span>(9)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Brands<span class="toggle-btn"></span></h3>
										<ul class="widget-body filter-items">
											<li><a href="javascript:void(0)">Black<span>(2)</span></a></li>
											<li><a href="javascript:void(0)">Blue<span>(1)</span></a></li>
											<li><a href="javascript:void(0)">Green<span>(9)</span></a></li>
										</ul>
									</div>
								</div></div>
							</div>
						</aside><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/shop-sidebar.blade.php ENDPATH**/ ?>