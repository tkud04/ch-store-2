<?php
$title = $product['name'];
$ph = true;
$pcClass = "";
?>

<?php
               $id = $product['id'];
               $name = $product['name'];
               $model = $product['model'];
			   $pd = $product['data'];
			   $imgs = $product['imggs'];
			   $displayName = $name == "" ? $model : $name;
			   $uu = url('product')."?xf=".$id;
			   $cu = url('add-to-cart')."?xf=".$id."&qty=1";
			   $wu = url('add-to-wishlist')."?xf=".$id;
			   //$ccu = url('add-to-compare')."?sku=".$sku;
			   $description = $pd['description'];
			   $category = $pd['category'];
			   $manufacturer = $pd['manufacturer'];
			   $amount = $pd['amount'];
			   $imggs = $product['imggs'];
			    
?>

@extends('layout')

@section('metas')
<link rel="canonical" href="{{$uu}}">
@stop

@section('content')
<div class="container">
<input type="hidden" id="product-xf" value="{{$id}}">
					<div class="product product-single row mb-4">
					        <div class="col-md-12" itemtype="http://schema.org/Product" itemscope>
      <meta itemprop="mpn" content="{{$product['mpn']}}" />
      <meta itemprop="name" content="{{$displayName}}" />
      <?php
       for($i = 0; $i < count($imggs); $i++)
	{
	   $ii = $imggs[$i];
      ?>
      <link itemprop="image" href="{{$ii}}" />
      <?php
      }
      ?>
     
      <meta itemprop="description" content="{{$pd['description']}}" />
      <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
        <link itemprop="url" href="{{$uu}}" />
        <meta itemprop="availability" content="https://schema.org/InStock" />
        <meta itemprop="priceCurrency" content="GBP" />
        <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />
        <meta itemprop="price" content="{{number_format($amount,2)}}" />
        <meta itemprop="priceValidUntil" content="2040-11-20" />
      </div>
      <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
        <meta itemprop="reviewCount" content="89" />
        <meta itemprop="ratingValue" content="4.4" />
      </div>
      <div itemprop="review" itemtype="http://schema.org/Review" itemscope>
        <div itemprop="author" itemtype="http://schema.org/Person" itemscope>
          <meta itemprop="name" content="Fred Benson" />
        </div>
        <div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
          <meta itemprop="ratingValue" content="4" />
          <meta itemprop="bestRating" content="5" />
        </div>
      </div>
      <meta itemprop="sku" content="{{$product['sku']}}" />
      <div itemprop="brand" itemtype="http://schema.org/Brand" itemscope>
        <meta itemprop="name" content="{{$manufacturer['name']}}" />
      </div>
    </div>
  </div>
  
  <div class="product product-single row mb-4">
						<div class="col-md-6">
							 <div id="slider" class="slider">
                              <div class="wrapper">
                                <div id="items" class="items">
                                    <?php
                                     for($i = 0; $i < count($imggs); $i++)
									 {
										$ii = $imggs[$i];
										$ss = $i == 0 ? " active" : "";
										$ss2 = $i == 0 ? " itemprop='image'" : "";
                                    ?>	
                                      <span class="slide">									
									     <img src="{{$ii}}" data-zoom-image="{{$ii}}" alt="{{$displayName}}">								  
									 </span>
									 <?php
									 }
									 ?>
							    </div>
                              </div>
                              <a id="prev" class="control prev"></a>
                              <a id="next" class="control next"></a>
                           </div>
						</div>
						<div class="col-md-6">
							<div class="product-details">
								<div class="product-navigation">
									<ul class="breadcrumb breadcrumb-lg">
										<li><a href="{{url('/')}}"><i class="d-icon-home"></i></a></li>
										<li><a href="javascript:void(0)" class="active">{{$displayName}}</a></li>
										<li>Detail</li>
									</ul>
								</div>

								<!--<h1 class="product-name" itemprop="name">{{$displayName}}</h1>-->
								<div class="product-meta">
									Model #: <span class="product-sku">{{$model}}</span>
									@if($product['sku'] != "") SKU: <span class="product-sku">{{$product['sku']}}</span> @endif
									Manufacturer: <span class="product-brand"><a href="javascript:void(0)">{{$manufacturer['name']}}</a></span>
								</div>
								<div class="product-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								   &#0163;<span itemprop="price">{{$amount}}</span>
								   <meta itemprop="priceCurrency" content="GBP"/>
								 </div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6 reviews )</a>
								</div>
								<p class="product-short-desc"  itemprop="description">{!! $description !!}</p>

								<hr class="product-divider">

								<div class="product-form product-qty">
									<label>QTY:</label>
									<div class="product-form-group">
										<div class="input-group">
											<button id="qminus" class="quantity-minus d-icon-minus"></button>
											<input id="product-qty" class="quantity form-control" type="number" value="1" min="1" max="1000000">
											<button id="qplus" class="quantity-plus d-icon-plus"></button>
										</div>
										<a href="javascript:void(0)" id="product-add-to-cart-btn" class="btn-product btn-cart"><i class="d-icon-bag"></i>Add To
											Cart</a>
									</div>
								</div>

								<hr class="product-divider mb-3">

								<div class="product-footer">
									<div class="social-links">
										<a href="javascript:void(0)" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="javascript:void(0)" class="social-link social-twitter fab fa-twitter"></a>
										<a href="javascript:void(0)" onclick="addToWishlist({xf: '{{$product['id']}}')" class="social-link fab fa-heart"></a>
									</div>
									
								</div>
							</div>
						</div>

                    <div class="col-md-12">
					<div class="tab tab-nav-simple product-tabs mb-4">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#product-tab-description">Description</a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active in" id="product-tab-description">
							
                                                               <ul class="list-none">
									<li>
										<p><label>Model number:</label> {{$model}}</p>
									</li>
									@if($product['sku'] != "")
									<li>
										<p><label>SKU:</label> {{$product['sku']}}</p>
									</li>
									@endif
                                    @if($product['mpn'] != "")
									<li>
										<p><label>MPN:</label> {{$product['mpn']}}</p>
									</li>
									@endif
									@if($product['upc'] != "")
									<li>
										<p><label>UPC:</label> {{$product['upc']}}</p>
									</li>
									@endif
									@if($product['ean'] != "")
									<li>
										<p><label>EAN:</label> {{$product['ean']}}</p>
									</li>
									@endif
									@if($product['jan'] != "")
									<li>
										<p><label>JAN:</label> {{$product['jan']}}</p>
									</li>
									@endif
									@if($product['isbn'] != "")
									<li>
										<p><label>ISBN:</label> {{$product['isbn']}}</p>
									</li>
									@endif
								</ul>
                                                               <h6 class="mb-2">Free Shipping</h6>
								<p class="mb-0">We deliver to over 100 countries around the world. For full details of
									the delivery options we offer, please view our <a href="#" class="text-primary">Delivery
										information</a><br>We hope you’ll love every
									purchase, but if you ever need to return an item you can do so within a month of
									receipt.</p>
							</div>
							
							<div class="tab-pane " id="product-tab-shipping-returns">
								
							</div>
							<div class="tab-pane " id="product-tab-reviews">
							 <?php
							  $reviews = [];
							  
							  if(count($reviews) > 0)
							  {
							 ?>
								<div class="d-flex align-items-center mb-5">
									<h4 class="mb-0 mr-2">Average Rating:</h4>
									<div class="ratings-container average-rating mb-0">
										<div class="ratings-full">
											<span class="ratings" style="width:80%"></span>
											<span class="tooltiptext tooltip-top">4.00</span>
										</div>
									</div>
								</div>

								<div class="comments mb-6">
									<ul>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/1.jpg" alt="avatar">
													</a>
												</figure>
												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Jimmy Pearson</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
															libero sodales leo, eget blandit nunc tortor eu nibh. Nullam
															mollis. Ut justo. Suspendisse potenti.
															Sed egestas, ante et vulputate volutpat, eros pede semper
															est, vitae luctus metus libero eu augue. Morbi purus libero,
															faucibus adipiscing, commodo quis, avida id, est. Sed
															lectus. Praesent elementum hendrerit tortor. Sed semper
															lorem at felis. Vestibulum volutpat.</p>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<figure class="comment-media">
													<a href="#">
														<img src="images/blog/comments/3.jpg" alt="avatar">
													</a>
												</figure>

												<div class="comment-body">
													<div class="comment-rating ratings-container mb-0">
														<div class="ratings-full">
															<span class="ratings" style="width:80%"></span>
															<span class="tooltiptext tooltip-top">4.00</span>
														</div>
													</div>
													<div class="comment-user">
														<h4><a href="#">Johnathan Castillo</a></h4>
														<span class="comment-date">November 9, 2018 at 2:19 pm</span>
													</div>

													<div class="comment-content">
														<p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque
															euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus
															pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- End Comments -->
								<div class="reply">
									<div class="title-wrapper text-left">
										<h3 class="title title-simple text-left text-normal">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
									</div>
									<div class="rating-form">
										<label for="rating">Your rating: </label>
										<span class="rating-stars selected">
											<a class="star-1" href="#">1</a>
											<a class="star-2" href="#">2</a>
											<a class="star-3" href="#">3</a>
											<a class="star-4 active" href="#">4</a>
											<a class="star-5" href="#">5</a>
										</span>

										<select name="rating" id="rating" required="" style="display: none;">
											<option value="">Rate…</option>
											<option value="5">Perfect</option>
											<option value="4">Good</option>
											<option value="3">Average</option>
											<option value="2">Not that bad</option>
											<option value="1">Very poor</option>
										</select>
									</div>
									<form action="#">
										<textarea id="reply-message" cols="30" rows="4" class="form-control mb-4" placeholder="Comment *" required=""></textarea>
										<div class="row">
											<div class="col-md-6 mb-5">
												<input type="text" class="form-control" id="reply-name" name="reply-name" placeholder="Name *" required="">
											</div>
											<div class="col-md-6 mb-5">
												<input type="email" class="form-control" id="reply-email" name="reply-email" placeholder="Email *" required="">
											</div>
										</div>
										<button type="submit" class="btn btn-primary btn-md">Submit<i class="d-icon-arrow-right"></i></button>
									</form>
								</div>
								<!-- End Reply -->
								<?php
										}
								?>
							</div>
						</div>
					  </div>
					</div>
                    
					
				</div>
@stop
