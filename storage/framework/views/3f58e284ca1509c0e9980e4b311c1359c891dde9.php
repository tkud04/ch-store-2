<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
				<?php echo $__env->make('checkout-header',['number' => 2], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="container mt-8">
					<form action="#" class="form">
						<div class="row gutter-lg">
							<div class="col-lg-7 mb-6">
							
							<h3 class="title title-simple text-left">Your Details</h3>
							
							<div class="accordion accordion-simple">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-1" class="collapse">Billing Details</a>
                                        </div>
                                        <div id="collapse1-1" class="card-body expanded">
                                           <div class="row">
									<div class="col-xs-6">
										<label>First Name *</label>
										<input type="text" class="form-control" name="first-name" required="">
									</div>
									<div class="col-xs-6">
										<label>Last Name *</label>
										<input type="text" class="form-control" name="last-name" required="">
									</div>
								</div>
								<label>Company Name(Optional)</label>
								<input type="text" class="form-control" name="company-name" required="">
								<label>Country / Region *</label>
								<input type="text" class="form-control" name="country" required="">
								<label>Street Address *</label>
								<input type="text" class="form-control" name="address1" required="" placeholder="House number and Street name">
								<input type="text" class="form-control" name="address2" required="" placeholder="Appartments, suite, unit etc ...">
								<div class="row">
									<div class="col-xs-6">
										<label>Town / City *</label>
										<input type="text" class="form-control" name="city" required="">
									</div>
									<div class="col-xs-6">
										<label>State / County *</label>
										<input type="text" class="form-control" name="state" required="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<label>Postcode / ZIP *</label>
										<input type="text" class="form-control" name="postcode" required="">
									</div>
									<div class="col-xs-6">
										<label>Phone *</label>
										<input type="text" class="form-control" name="phone" required="">
									</div>
								</div>
								
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-2" class="expand">Shipping Details</a>
                                        </div>
                                        <div class="card-body collapsed" id="collapse1-2">
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Donec odio.<br>
                                                Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                                Suspendisse<br>
                                                urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec
                                                justo eget<br>
                                                felis facilisis fermentum.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#collapse1-3" class="expand">Additional Information</a>
                                        </div>
                                        <div id="collapse1-3" class="card-body collapsed">
                                            <label>Order Notes (optional)</label>
							               	<textarea class="form-control" cols="30" rows="6" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
							
                                        </div>
                                    </div>
                                </div>
							
							
								
								</div>
							<aside class="col-lg-5 sticky-sidebar-wrapper">
								<div class="pin-wrapper" style="height: 1038px;"><div class="sticky-sidebar" data-sticky-options="{'bottom': 50}" style="border-bottom: 0px none rgb(102, 102, 102); width: 474.141px;">
									<h3 class="title title-simple text-left">Your Order</h3>
									<div class="summary mb-4">
										<table class="order-table">
											<thead>
												<tr>
													<th>Product</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="product-name">Beige knitted shoes <strong class="product-quantity">×&nbsp;1</strong></td>
													<td class="product-total">$84.00</td>
												</tr>
												<tr>
													<td class="product-name">Beige knitted shoes <strong class="product-quantity">×&nbsp;1</strong></td>
													<td class="product-total">$76.00</td>
												</tr>
												<tr>
													<td class="product-name">Beige knitted shoes <strong class="product-quantity">×&nbsp;1</strong></td>
													<td class="product-total">$76.00</td>
												</tr>
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Subtotal</h4>
													</td>
													<td class="summary-subtotal-price">$220.00
													</td>												
												</tr>
												<tr class="sumnary-shipping shipping-row-last">
													<td colspan="2">
														<h4 class="summary-subtitle">Shipping</h4>
														<ul>
															<li>
																<div class="custom-radio">
																	<input type="radio" id="free-shipping" name="shipping" class="custom-control-input" checked="">
																	<label class="custom-control-label" for="free-shipping">Free
																		Shipping</label>
																</div>
															</li>
															<li>
																<div class="custom-radio">
																	<input type="radio" id="standard_shipping" name="shipping" class="custom-control-input">
																	<label class="custom-control-label" for="standard_shipping">Standard</label>
																</div>
															</li>
															<li>
																<div class="custom-radio">
																	<input type="radio" id="express_shipping" name="shipping" class="custom-control-input">
																	<label class="custom-control-label" for="express_shipping">Express</label>
																</div>
															</li>
														</ul>
													</td>
												</tr>
												<tr class="summary-subtotal">
													<td>
														<h4 class="summary-subtitle">Total</h4>
													</td>
													<td>
														<p class="summary-total-price">$220.00</p>
													</td>												
												</tr>
											</tbody>
										</table>
										<div class="payment accordion radio-type">
											<h4 class="summary-subtitle">Payment Methods</h4>
											<div class="card">
												<div class="card-header">
													<a href="#collapse1" class="collapse">Direct bank transfer
													</a>
												</div>
												<div id="collapse1" class="expanded" style="display: block;">
													<div class="card-body">
														Make your payment directly into our bank account. Please use
														your Order ID as the payment reference. Your order will not be
														shipped until the funds have cleared in our account.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse2" class="expand">Check payments</a>
												</div>
												<div id="collapse2" class="collapsed">
													<div class="card-body">
														Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.
														Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header">
													<a href="#collapse4" class="expand">PayPal</a>
												</div>
												<div id="collapse4" class="collapsed">
													<div class="card-body">
														Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra
														non, semper suscipit, posuere a, pede. Donec nec justo eget
														felis facilisis fermentum.
													</div>
												</div>
											</div>
										</div>
										<p class="checkout-info">Your personal data will used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
										<button type="submit" class="btn btn-dark btn-order">Place Order</button>
									</div>
								</div></div>
							</aside>
						</div>
					</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/checkout.blade.php ENDPATH**/ ?>