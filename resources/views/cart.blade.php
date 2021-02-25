<?php
$title = "Cart";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
				@include('checkout-header',['number' => 1])
				<div class="container mt-8 mb-4">
					<div class="row gutter-lg">
						<div class="col-lg-8 col-md-12">
							<table class="shop-table cart-table mt-2">
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
									 $uu = url('product')."?xf=".$item['id'];
									 $ru = url('remove-from-cart')."?xf=".$xf;
				                 ?>
									<tr>
										<td class="product-thumbnail">
											<figure>
												<a href="product-simple.html">
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
											<span class="amount">&#0163;{{number_format($itemAmount * $qty,2)}}</span>
										</td>
										<td class="product-quantity">
											<div class="input-group">
												<button class="quantity-minus d-icon-minus"></button>
												<input class="quantity form-control" type="number" min="1" max="1000000">
												<button class="quantity-plus d-icon-plus"></button>
											</div>
										</td>
										<td class="product-price">
											<span class="amount">&#0163;{{number_format($itemAmount,2)}}</span>
										</td>
									</tr>
									<?php
								   }
									?>
									
								</tbody>
							</table>
							<div class="cart-actions mb-6 pt-6">
								<div class="coupon">
									<input type="text" name="coupon_code" class="input-text form-control" id="coupon_code" value="" placeholder="Coupon code">
									<button type="submit" class="btn btn-md">Apply Coupon</button>
								</div>
								<a href="javascript:void(0)" class="btn btn-md btn-icon-left"><i class="d-icon-refresh"></i>Update Cart</a>
							</div>
						</div>
						<aside class="col-lg-4 sticky-sidebar-wrapper">
							<div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
								<div class="summary mb-4">
									<h3 class="summary-title text-left">Cart Totals</h3>
									<table class="shipping">
										<tbody><tr class="summary-subtotal">
											<td>
												<h4 class="summary-subtitle">Subtotal</h4>
											</td>
											<td>
												<p class="summary-subtotal-price">&#0163;{{number_format($subtotal,2)}}</p>
											</td>												
										</tr>
										<tr class="sumnary-shipping shipping-row-last">
											<td colspan="2">
												<h4 class="summary-subtitle">Shipping</h4>
												<ul>
													<li>
														<div class="custom-radio">
															<input type="radio" id="free-shipping" name="shipping" class="custom-control-input" checked="checked">
															<label class="custom-control-label" for="free-shipping">Free
																Shipping</label>
														</div>
													</li>
												</ul>
											</td>
										</tr>
									</tbody></table>
									<div class="shipping-address pb-4">
										<label>Shipping to CA.</label>
										<div class="select-box">
											<select name="country" class="form-control">
												<option value="us" selected="">United States</option>
												<option value="uk">United Kingdom</option>
												<option value="fr">France</option>
												<option value="aus">Austria</option>
											</select>
										</div>
										<div class="select-box">
											<select name="country" class="form-control">
												<option value="default" selected="selected">California</option>
											</select>
										</div>
										<input type="text" class="form-control" name="code" placeholder="Town / city">
										<input type="text" class="form-control" name="code" placeholder="zip">
										<a href="#" class="btn btn-md">Update totals</a>
									</div>
									<table>
										<tbody><tr class="summary-subtotal">
											<td>
												<h4 class="summary-subtitle">Total</h4>
											</td>
											<td>
												<p class="summary-total-price">$426.99</p>
											</td>												
										</tr>
									</tbody></table>
									<a href="checkout.html" class="btn btn-dark btn-checkout">Proceed to checkout</a>
								</div>
							</div>
						</aside>
					</div>
				</div>
@stop
