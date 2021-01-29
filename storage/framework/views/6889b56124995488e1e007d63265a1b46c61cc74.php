<?php
$title = "My Wishlist";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('content'); ?>
				<div class="container">
					<table class="shop-table wishlist-table mt-2 mb-4">
						<thead>
							<tr>
								<th class="product-name"><span>Product</span></th>
								<th></th>
								<th class="product-price"><span>Price</span></th>
								<th class="product-stock-status"><span>Stock status</span></th>
								<th class="product-add-to-cart"></th>
								<th class="product-remove"></th>
							</tr>
						</thead>
						<tbody class="wishlist-items-wrapper">
							<tr>
								<td class="product-thumbnail">
									<a href="product-simple.html">
										<figure>
											<img src="images/products/product11.jpg" width="100" height="100" alt="product">
										</figure>
									</a>
								</td>
								<td class="product-name">
									<a href="product-simple.html">Beige knitted elastic runner shoes</a>
								</td>
								<td class="product-price">
									<span class="amount">$84.00</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-in-stock">In Stock</span>
								</td>
								<td class="product-add-to-cart">
									<a href="product.html" class="btn-product"><span>Select option</span></a>
								</td>
								<td class="product-remove">
									<div>
										<a href="#" class="remove" title="Remove this product"><i class="d-icon-times"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="product-thumbnail">
									<a href="product-simple.html">
										<figure>
											<img src="images/products/product12.jpg" width="100" height="100" alt="product">
										</figure>
									</a>
								</td>
								<td class="product-name">
									<a href="product-simple.html">Sed diam nonummy nibh</a>
								</td>
								<td class="product-price">
									<span class="amount">$84.00</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-in-stock">In Stock</span>
								</td>
								<td class="product-add-to-cart">
									<a href="#" class="btn-product btn-cart"><span>Add to Cart</span></a>
								</td>
								<td class="product-remove">
									<div>
										<a href="#" class="remove" title="Remove this product"><i class="d-icon-times"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="product-thumbnail">
									<a href="product-simple.html">
										<figure>
											<img src="images/products/product13.jpg" width="100" height="100" alt="product">
										</figure>
									</a>
								</td>
								<td class="product-name">
									<a href="product-simple.html">Lorem ipsum dolor sit amet, consectetuer adipiscing
										elit,</a>
								</td>
								<td class="product-price">
									<span class="amount">$84.00</span>
								</td>
								<td class="product-stock-status">
									<span class="wishlist-out-stock">Out of Stock</span>
								</td>
								<td class="product-add-to-cart">
									<a href="#" class="btn-product btn-cart btn-disabled"><span>Add to Cart</span></a>
								</td>
								<td class="product-remove">
									<div>
										<a href="#" class="remove" title="Remove this product"><i class="d-icon-times"></i></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/wishlist.blade.php ENDPATH**/ ?>