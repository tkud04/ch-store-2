<?php
$title = "Cart";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')


<script>
let cart = [];
</script>
				@include('checkout-header',['number' => 1])
				<div class="container mt-8 mb-4">
					<div class="row gutter-lg">
						<div class="col-lg-7 col-md-12">
							<table id="cart-table" class="shop-table cart-table mt-2">
								<thead>
									<tr>
										<th><span>Product</span></th>
										<th></th>
										<th><span>Price</span></th>
										<th><span>quantity</span></th>
										<th>Subtotal</th>
									</tr>
								</thead>
								<tbody>
								<?php
								$cc = (isset($cart)) ? count($cart) : 0;
								   $subtotal = 0;
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
									 $xf = $item['id'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									 $subtotal += ($itemAmount * $qty);
									 $imgs = $item['imggs'];
									 $uu = url('product')."?xf=".$xf;
									 $ru = url('remove-from-cart')."?xf=".$xf;
				                 ?>
								   <script>
								    // cart.push({xf: "{{$qty}}",qty: "{{$qty}}"});
								   </script>
									<tr>
										<td class="product-thumbnail">
											<figure>
												<a href="{{$uu}}">
													<img src="{{$imgs[0]}}" width="100" height="100" alt="{{$item['name']}}">
												</a>
												<a href="{{$ru}}" class="product-remove" title="Remove this product">
													<i class="fas fa-times"></i>
												</a>
											</figure>
										</td>
										<td class="product-name">
											<div class="product-name-section">
												<a href="{{$uu}}">{{$item['name']}}</a>
											</div>
										</td>
										<td class="product-subtotal">
											<span class="amount">&#0163;{{number_format($itemAmount,2)}}</span>
										</td>
										<td class="product-quantity">
											<div class="input-group">
												<button class="quantity-minus d-icon-minus"></button>
												<input class="quantity form-control product-qty" type="number" value="{{$qty}}" data-val="{{$qty}}" data-xf="{{$xf}}" min="1" max="1000000">
												<button class="quantity-plus d-icon-plus"></button>
											</div>
										</td>
										<td class="product-price">
											<span class="amount">&#0163;{{number_format($itemAmount * $qty,2)}}</span>
										</td>
									</tr>
									<?php
								   }
								   
								   $pc = 0.1 * $subtotal;
								   $xx = $subtotal;
								   if(count($sud) == 0) $xx = $subtotal - $pc;
									?>
									
								</tbody>
							</table>
							<div class="cart-actions mb-6 pt-6">
								<div class="coupon">
									<input type="text" name="coupon_code" class="input-text form-control" id="coupon_code" value="" placeholder="Coupon code">
									<button type="submit" class="btn btn-md">Apply Coupon</button>
								</div>
								<a href="javascript:void(0)" id="update-cart-btn" class="btn btn-md btn-icon-left"><i class="d-icon-refresh"></i>Update Cart</a>
							</div>
						</div>
						<aside class="col-lg-5 sticky-sidebar-wrapper">
						   <center>
							<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
								<div class="summary mb-4">
									<h3 class="summary-title text-left">Cart Totals</h3>
									<table class="table table-responsive" style="align: center !important;">
										<tbody><tr class="summary-subtotal">
											<td>
												<h4 class="summary-subtitle">Subtotal</h4>
											</td>
											<td>
												<p class="summary-subtotal-price">&#0163;{{number_format($subtotal,2)}}</p>
											</td>												
										</tr>
										<tr class="sumnary-shipping shipping-row-last">
											<td>
														<h4 class="summary-subtitle">Shipping</h4>
													</td>
													<td>
														<p class="summary-total-price">Free Shipping</p>
													</td>
										</tr>
										@if(count($sud) == 0)
                                                <tr class="sumnary-shipping shipping-row-last">
													
													<td>
														<h4 class="summary-subtitle">10% Discount</h4>
													</td>
													<td>
														<p class="summary-total-price">&#0163;{{number_format($pc,2)}}</p>
													</td>
												</tr>
												@endif
									</tbody></table>
									<table>
										<tbody><tr class="summary-subtotal">
											<td>
												<h4 class="summary-subtitle">Total</h4>
											</td>
											<td>
												<p class="summary-total-price">&#0163;{{number_format($subtotal,2)}}</p>
											</td>												
										</tr>
									</tbody></table>
									<a href="{{url('checkout')}}" class="btn btn-dark btn-checkout">Proceed to checkout</a>
								</div>
							</div>
							</center>
						</aside>
					</div>
				</div>
@stop
