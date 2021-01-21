<html lang="en" style="--vh:4.54px; --scrollW:17px;"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title') | Mobile Hut - Gadgets, Accessories in the United Kingdom!</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
	<link href="{{asset('css/vendor/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/vendor/vendor.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style-vars-fashion.css')}}" rel="stylesheet">
	<link href="{{asset('fonts/icomoon/icons.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	
	<!-- DO NOT EDIT!! start of plugins -->
	@foreach($plugins as $p)
	  {!! $p['value'] !!}
	@endforeach
	<!-- DO NOT EDIT!! end of plugins -->
	
			<script src="{{asset('js/vendor-special/lazysizes.js')}}"></script>
	<script src="{{asset('js/vendor-special/jquery.min.js')}}"></script>
	<script src="{{asset('js/vendor-special/jquery.ez-plus.js')}}"></script>
	<script src="{{asset('js/vendor/vendor.min.js')}}"></script>
	<script src="{{asset('js/app-html.js')}}"></script>
	
	<script src="{{asset('js/helpers.js').'?ver='.rand(23,999)}}"></script>
			<script src="{{asset('js/mmm.js').'?ver='.rand(23,999)}}"></script>
			
			<!--SweetAlert--> 
			    <link href="{{asset('lib/sweet-alert/sweetalert2.css')}}" rel="stylesheet">
			    <script src="{{asset('lib/sweet-alert/sweetalert2.js')}}"></script>
		
			@yield('scripts')
	
	
	
</head>
<body class="has-smround-btns has-loader-bg equal-height win no-loader documentLoad has-hdr_sticky">
<header class="hdr-wrap">
	<div class="hdr-content hdr-content-sticky">
		<div class="container">
			<div class="row">
				<div class="col-auto show-mobile">
<div class="menu-toggle"> <a href="javascript:void(0)" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
				</div>
				<div class="col-auto hdr-logo">
					<a href="{{url('/')}}" class="logo">MOBILE HUT</a>
				</div>
				<div class="hdr-nav hide-mobile nav-holder-s">
				<ul class="mmenu mmenu-js mmenu--withlabels">
	<li class="mmenu-item--simple"><a href="{{url('/')}}" class="active">Home</a></li>
	<li class="mmenu-item--simple"><a href="javascript:void(0)">Categories</a>
		<div class="mmenu-submenu">
			<ul class="submenu-list">
	
	<li><a href="javascript:void(0)">Gallery</a></li>
	<li><a href="javascript:void(0)">Faq</a></li>
	<li><a href="javascript:void(0)">About Us</a></li>
	<li><a href="javascript:void(0)">Contact Us</a></li>
</ul>
		</div>
	</li>
	<li><a href="javascript:void(0)">Accessories<span class="menu-label">SALE</span></a></li>
	<li class="mmenu-item--mega"><a href="javascript:void(0)">Men</a>
		<div class="mmenu-submenu mmenu-submenu--has-bottom">
			<div class="mmenu-submenu-inside">
				<div class="container">
					<div class="mmenu-left width-25">
						<div class="mmenu-bnr-wrap">
							<a href="javascript:void(0)" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="images/menu/mmenu-bnr-01.webp" class="lazyload fade-up" alt=""></a>
						</div>
						<h3 class="submenu-title"><a href="javascript:void(0)">Pre-Collection<br>Spring-Summer 2021</a></h3>
					</div>
					<div class="mmenu-cols column-4">
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Collections</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Fall-Winter 2020/21</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Ready-to-wear</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)" class="active">Jackets</a>
									<ul class="sub-level">
										<li><a href="javascript:void(0)">Bomber Jackets</a></li>
										<li><a href="javascript:void(0)">Biker Jacket</a></li>
										<li><a href="javascript:void(0)">Trucker Jacket</a></li>
										<li><a href="javascript:void(0)">Denim Jackets</a></li>
										<li><a href="javascript:void(0)">Blouson Jacket<span class="menu-label">SALE</span></a></li>
										<li><a href="javascript:void(0)">Overcoat</a></li>
										<li><a href="javascript:void(0)">Trench Coat</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts</a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
								<li><a href="javascript:void(0)">Swimwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Accessories</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Brands</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-bottom justify-content-center">
							<a href="javascript:void(0)"><i class="icon-fox icon--lg"></i><b>FOXshop News</b><i class="icon-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li class="mmenu-item--mega"><a href="javascript:void(0)">Women</a>
		<div class="mmenu-submenu mmenu-submenu--has-bottom">
			<div class="mmenu-submenu-inside">
				<div class="container">
					<div class="mmenu-right width-25">
						<div class="mmenu-bnr-wrap">
							<a href="javascript:void(0)" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="images/menu/mmenu-bnr-02.webp" class="lazyload fade-up" alt=""></a>
						</div>
						<h3 class="submenu-title"><a href="javascript:void(0)">Pre-Collection<br>Spring-Summer 2021</a></h3>
					</div>
					<div class="mmenu-cols column-4">
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Collections</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Fall-Winter 2020/21</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Ready-to-wear</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a>
									<ul>
										<li><a href="javascript:void(0)">Jackets</a></li>
										<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
										<li><a href="javascript:void(0)">Blouses &amp; Tops</a>
											<ul>
												<li><a href="javascript:void(0)">Jackets</a></li>
												<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
													<ul>
														<li><a href="javascript:void(0)">Jackets</a></li>
														<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
															<ul>
																<li><a href="javascript:void(0)">Jackets</a></li>
																<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
																<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
																<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
																<li><a href="javascript:void(0)">Skirts</a></li>
																<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
																<li><a href="javascript:void(0)">Outerwear</a></li>
																<li><a href="javascript:void(0)">Swimwear</a></li>
															</ul>
														</li>
														<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
														<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
														<li><a href="javascript:void(0)">Skirts</a></li>
														<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
														<li><a href="javascript:void(0)">Outerwear</a></li>
														<li><a href="javascript:void(0)">Swimwear</a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
												<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
												<li><a href="javascript:void(0)">Skirts</a></li>
												<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
												<li><a href="javascript:void(0)">Outerwear</a></li>
												<li><a href="javascript:void(0)">Swimwear</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
										<li><a href="javascript:void(0)">Skirts</a></li>
										<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
										<li><a href="javascript:void(0)">Outerwear</a></li>
										<li><a href="javascript:void(0)">Swimwear</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts</a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
								<li><a href="javascript:void(0)">Swimwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Accessories</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Brands</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-bottom justify-content-center">
							<a href="javascript:void(0)"><i class="icon-fox icon--lg"></i><b>FOXshop News</b><i class="icon-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
</ul></div>
				<div class="hdr-links-wrap col-auto ml-auto">
					<div class="hdr-inline-link">
<div class="search_container_desktop">
	<div class="dropdn dropdn_search dropdn_fullwidth">
		<a href="javascript:void(0)" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
		<div class="dropdn-content" style="max-height: 454px; top: 71px;">
			<div class="container">
				<form method="get" action="#" class="search search-off-popular">
					<input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
					<button type="submit" class="search-button"><i class="icon-search"></i></button>
					<a href="javascript:void(0)" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="dropdn dropdn_wishlist">
	<a href="javascript:void(0)" class="dropdn-link only-icon wishlist-link ">
		<i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
	</a>
</div>
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="javascript:void(0)" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
						<div class="dropdn dropdn_fullheight minicart">
	<a href="javascript:void(0)" class="dropdn-link js-dropdn-link minicart-link only-icon" data-panel="#dropdnMinicart">
		<i class="icon-basket"></i>
		<span class="minicart-qty">3</span>
		<span class="minicart-total hide-mobile">$34.99</span>
	</a>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hdr">
		<div class="hdr-topline hdr-topline--dark js-hdr-top">
			<div class="container">
				<div class="row flex-nowrap">
					<div class="col hdr-topline-left hide-mobile">
<div class="hdr-line-separate">
	<ul class="social-list list-unstyled">
		<li>
			<a href="javascript:void(0)"><i class="icon-facebook"></i></a>
		</li>
		<li>
			<a href="javascript:void(0)"><i class="icon-twitter"></i></a>
		</li>
		<li>
			<a href="javascript:void(0)"><i class="icon-google"></i></a>
		</li>
		<li>
			<a href="javascript:void(0)"><i class="icon-instagram"></i></a>
		</li>
		<li>
			<a href="javascript:void(0)"><i class="icon-vimeo"></i></a>
		</li>
		<li>
			<a href="javascript:void(0)"><i class="icon-linkedin"></i></a>
		</li>
	</ul>
</div>
					</div>
					<div class="col hdr-topline-center">
						<div class="custom-text js-custom-text-carousel slick-initialized slick-slider slick-vertical" data-slick="{&quot;speed&quot;: 1000, &quot;autoplaySpeed&quot;: 3000}">
	<div class="slick-list" style="height: 42px;"><div class="slick-track" style="opacity: 1; height: 294px; transform: translate3d(0px, -126px, 0px);"><div class="custom-text-item slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 552px;" tabindex="-1"><i class="icon-gift"></i> Today only! Post <span>holiday</span> Flash Sale! 2 for $20</div><div class="custom-text-item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 552px;" tabindex="-1"><i class="icon-fox"></i> Use promocode <span>FOXIC</span> to get 15% discount!</div><div class="custom-text-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 552px;" tabindex="-1"><i class="icon-air-freight"></i> <span>Free</span> plane shipping over <span>$250</span></div><div class="custom-text-item slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 552px;" tabindex="0"><i class="icon-gift"></i> Today only! Post <span>holiday</span> Flash Sale! 2 for $20</div><div class="custom-text-item slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 552px;" tabindex="-1"><i class="icon-fox"></i> Use promocode <span>FOXIC</span> to get 15% discount!</div><div class="custom-text-item slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" style="width: 552px;" tabindex="-1"><i class="icon-air-freight"></i> <span>Free</span> plane shipping over <span>$250</span></div><div class="custom-text-item slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 552px;" tabindex="-1"><i class="icon-gift"></i> Today only! Post <span>holiday</span> Flash Sale! 2 for $20</div></div></div>
	
	
</div>
					</div>
					<div class="col hdr-topline-right hide-mobile">
						<div class="hdr-inline-link">
<div class="dropdn_language">
	<div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
		<a href="javascript:void(0)" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
		<div class="dropdn-content">
			<ul>
				<li class="active"><a href="javascript:void(0)"><img src="images/flags/en.webp" alt="">English</a></li>
				<li><a href="javascript:void(0)"><img src="images/flags/sp.webp" alt="">Spanish</a></li>
				<li><a href="javascript:void(0)"><img src="images/flags/de.webp" alt="">German</a></li>
				<li><a href="javascript:void(0)"><img src="images/flags/fr.webp" alt="">French</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="dropdn_currency">
	<div class="dropdn dropdn_caret">
			<a href="javascript:void(0)" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
			<div class="dropdn-content">
					<ul>
						<li class="active"><a href="javascript:void(0)"><span>US dollars</span></a></li>
						<li><a href="javascript:void(0)"><span>Euro</span></a></li>
						<li><a href="javascript:void(0)"><span>UK pounds</span></a></li>
						<li><a href="javascript:void(0)"><span>Canadian dollars</span></a></li>
					</ul>
			</div>
	</div>
</div>
							<div class="hdr_container_desktop">
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="javascript:void(0)" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hdr-content">
			<div class="container">
				<div class="row">
					<div class="col-auto show-mobile">
<div class="menu-toggle"> <a href="javascript:void(0)" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
					</div>
					<div class="col-auto hdr-logo">
						<a href="{{url('/')}}" class="logo">MOBILE HUT</a>
					</div>
					<div class="hdr-nav hide-mobile nav-holder justify-content-center px-4" style="height: 75px;">
<ul class="mmenu mmenu-js mmenu--withlabels">
	<li class="mmenu-item--simple"><a href="javascript:void(0)" class="active">Home</a></li>
	<li class="mmenu-item--simple"><a href="javascript:void(0)">Categories</a>
		<div class="mmenu-submenu">
			<ul class="submenu-list">
	<li><a href="javascript:void(0)">Gallery</a></li>
	<li><a href="javascript:void(0)">Faq</a></li>
	<li><a href="javascript:void(0)">About Us</a></li>
	<li><a href="javascript:void(0)">Contact Us</a></li>
	<li><a href="404.html">404 Page</a></li>
	<li><a href="javascript:void(0)">Typography</a></li>
	<li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
</ul>
		</div>
	</li>
	<li><a href="javascript:void(0)">Accessories<span class="menu-label">SALE</span></a></li>
	<li class="mmenu-item--mega"><a href="javascript:void(0)">Men</a>
		<div class="mmenu-submenu mmenu-submenu--has-bottom">
			<div class="mmenu-submenu-inside">
				<div class="container">
					<div class="mmenu-left width-25">
						<div class="mmenu-bnr-wrap">
							<a href="javascript:void(0)" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="images/menu/mmenu-bnr-01.webp" class="lazyload fade-up" alt=""></a>
						</div>
						<h3 class="submenu-title"><a href="javascript:void(0)">Pre-Collection<br>Spring-Summer 2021</a></h3>
					</div>
					<div class="mmenu-cols column-4">
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Collections</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Fall-Winter 2020/21</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Ready-to-wear</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)" class="active">Jackets</a>
									<ul class="sub-level">
										<li><a href="javascript:void(0)">Bomber Jackets</a></li>
										<li><a href="javascript:void(0)">Biker Jacket</a></li>
										<li><a href="javascript:void(0)">Trucker Jacket</a></li>
										<li><a href="javascript:void(0)">Denim Jackets</a></li>
										<li><a href="javascript:void(0)">Blouson Jacket<span class="menu-label">SALE</span></a></li>
										<li><a href="javascript:void(0)">Overcoat</a></li>
										<li><a href="javascript:void(0)">Trench Coat</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts</a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
								<li><a href="javascript:void(0)">Swimwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Accessories</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Brands</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-bottom justify-content-center">
							<a href="javascript:void(0)"><i class="icon-fox icon--lg"></i><b>FOXshop News</b><i class="icon-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li class="mmenu-item--mega"><a href="javascript:void(0)">Women</a>
		<div class="mmenu-submenu mmenu-submenu--has-bottom">
			<div class="mmenu-submenu-inside">
				<div class="container">
					<div class="mmenu-right width-25">
						<div class="mmenu-bnr-wrap">
							<a href="javascript:void(0)" class="image-hover-scale"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="images/menu/mmenu-bnr-02.webp" class="lazyload fade-up" alt=""></a>
						</div>
						<h3 class="submenu-title"><a href="javascript:void(0)">Pre-Collection<br>Spring-Summer 2021</a></h3>
					</div>
					<div class="mmenu-cols column-4">
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Collections</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
								<li><a href="javascript:void(0)">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="javascript:void(0)">Fall-Winter 2020/21</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Ready-to-wear</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a>
									<ul>
										<li><a href="javascript:void(0)">Jackets</a></li>
										<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
										<li><a href="javascript:void(0)">Blouses &amp; Tops</a>
											<ul>
												<li><a href="javascript:void(0)">Jackets</a></li>
												<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
													<ul>
														<li><a href="javascript:void(0)">Jackets</a></li>
														<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
															<ul>
																<li><a href="javascript:void(0)">Jackets</a></li>
																<li><a href="javascript:void(0)">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
																<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
																<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
																<li><a href="javascript:void(0)">Skirts</a></li>
																<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
																<li><a href="javascript:void(0)">Outerwear</a></li>
																<li><a href="javascript:void(0)">Swimwear</a></li>
															</ul>
														</li>
														<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
														<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
														<li><a href="javascript:void(0)">Skirts</a></li>
														<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
														<li><a href="javascript:void(0)">Outerwear</a></li>
														<li><a href="javascript:void(0)">Swimwear</a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
												<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
												<li><a href="javascript:void(0)">Skirts</a></li>
												<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
												<li><a href="javascript:void(0)">Outerwear</a></li>
												<li><a href="javascript:void(0)">Swimwear</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
										<li><a href="javascript:void(0)">Skirts</a></li>
										<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
										<li><a href="javascript:void(0)">Outerwear</a></li>
										<li><a href="javascript:void(0)">Swimwear</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts</a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
								<li><a href="javascript:void(0)">Swimwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Accessories</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="javascript:void(0)">Brands</a></h3>
							<ul class="submenu-list">
								<li><a href="javascript:void(0)">Jackets</a></li>
								<li><a href="javascript:void(0)">Dresses</a></li>
								<li><a href="javascript:void(0)">Blouses &amp; Tops</a></li>
								<li><a href="javascript:void(0)">Cardigans &amp; Pullovers</a></li>
								<li><a href="javascript:void(0)">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
								<li><a href="javascript:void(0)">Pants &amp; Shorts</a></li>
								<li><a href="javascript:void(0)">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-bottom justify-content-center">
							<a href="javascript:void(0)"><i class="icon-fox icon--lg"></i><b>FOXshop News</b><i class="icon-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
</ul>
					</div>
					<div class="hdr-links-wrap col-auto ml-auto">
						<div class="hdr-inline-link">
<div class="search_container_desktop">
	<div class="dropdn dropdn_search dropdn_fullwidth">
		<a href="javascript:void(0)" class="dropdn-link  js-dropdn-link only-icon"><i class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
		<div class="dropdn-content" style="max-height: 454px; top: 91px;">
			<div class="container">
				<form method="get" action="#" class="search search-off-popular">
					<input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
					<button type="submit" class="search-button"><i class="icon-search"></i></button>
					<a href="javascript:void(0)" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="dropdn dropdn_wishlist">
	<a href="javascript:void(0)" class="dropdn-link only-icon wishlist-link ">
		<i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
	</a>
</div>
							<div class="hdr_container_mobile show-mobile">
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="javascript:void(0)" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
</div>
							</div>
							<div class="dropdn dropdn_fullheight minicart">
	<a href="javascript:void(0)" class="dropdn-link js-dropdn-link minicart-link" data-panel="#dropdnMinicart">
		<i class="icon-basket"></i>
		<span class="minicart-qty">3</span>
		<span class="minicart-total hide-mobile">$34.99</span>
	</a>
</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="header-side-panel">
<div class="mobilemenu js-push-mbmenu">
	<div class="mobilemenu-content loaded" style="">
		<div class="mobilemenu-close mobilemenu-toggle">Close</div>
		<div class="mobilemenu-scroll ps ps--theme_default" data-ps-id="0eab4e2a-e801-27c9-b660-7c690b563efc">
			<div class="mobilemenu-search"></div>
			<div class="nav-wrapper show-menu">
				<div class="nav-toggle">
					<span class="nav-back"><i class="icon-angle-left"></i></span>
					<span class="nav-title"></span>
					<a href="javascript:void(0)" class="nav-viewall">view all</a>
				</div>
				<ul class="nav nav-level-1">
					<li><a href="index.html">Layouts<span class="menu-label menu-label--color1">New</span><span class="arrow"><i class="icon-angle-right"></i></span></a>
						<ul class="nav-level-2">
							<li><a href="javascript:void(0)">Fashion (Default) Skin</a></li>
							<li><a href="javascript:void(0)">Sport Skin</a></li>
							<li><a href="javascript:void(0)">Halloween Skin</a></li>
							<li><a href="javascript:void(0)">Medical Skin</a></li>
							<li><a href="javascript:void(0)">Food Market Skin</a></li>
							<li><a href="javascript:void(0)">Cosmetics Skin</a></li>
							<li><a href="javascript:void(0)">Fishing Skin</a></li>
							<li><a href="javascript:void(0)">Books Skin<span class="menu-label menu-label--color1">Coming Soon</span></a></li>
							<li><a href="javascript:void(0)">Electronics Skin<span class="menu-label menu-label--color2">Coming Soon</span></a></li>
							<li><a href="javascript:void(0)">Games Skin<span class="menu-label menu-label--color3">Coming Soon</span></a></li>
							<li><a href="javascript:void(0)">Vaping Skin<span class="menu-label">Coming Soon</span></a></li>
							<li><a href="index-02.html">Home page 2</a></li>
							<li><a href="index-03.html">Home page 3</a></li>
							<li><a href="index-04.html">Home page 4</a></li>
							<li><a href="index-05.html">Home page 5</a></li>
							<li><a href="index-06.html">Home page 6</a></li>
							<li><a href="index-07.html">Home page 7</a></li>
							<li><a href="index-08.html">Home page 8</a></li>
							<li><a href="index-09.html">Home page 9</a></li>
							<li><a href="index-10.html">Home page 10</a></li>
							<li><a href="index-rtl.html">Home page RTL</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">Pages<span class="arrow"><i class="icon-angle-right"></i></span></a>
						<ul class="nav-level-2">
							<li><a href="javascript:void(0)">Product page<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Product page variant 1<span class="menu-label menu-label--color3">Popular</span></a></li>
									<li><a href="product-2.html">Product page variant 2</a></li>
									<li><a href="product-3.html">Product page variant 3</a></li>
									<li><a href="product-4.html">Product page variant 4</a></li>
									<li><a href="product-5.html">Product page variant 5</a></li>
									<li><a href="product-6.html">Product page variant 6</a></li>
									<li><a href="product-7.html">Product page variant 7</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Category page<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Left sidebar filters</a></li>
									<li><a href="category-closed-filter.html">Closed filters</a></li>
									<li><a href="category-horizontal-filter.html">Horizontal filters</a></li>
									<li><a href="category-listview.html">Listing View</a></li>
									<li><a href="category-empty.html">Empty category</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Cart &amp; Checkout<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Cart Page</a></li>
									<li><a href="cart-empty.html">Empty cart</a></li>
									<li><a href="javascript:void(0)">Checkout variant 1</a></li>
									<li><a href="checkout-2.html">Checkout variant 2</a></li>
									<li><a href="checkout-3.html">Checkout variant 3</a></li>
								</ul>
							</li>
							<li><a href="account-create.html">Account<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="account-create.html">Login</a></li>
									<li><a href="account-create.html">Create account</a></li>
									<li><a href="javascript:void(0)">Account details</a></li>
									<li><a href="account-addresses.html">Account addresses</a></li>
									<li><a href="javascript:void(0)">Order History</a></li>
									<li><a href="javascript:void(0)">Wishlist</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="blog.html">Right sidebar</a></li>
									<li><a href="blog-left-sidebar.html">Left sidebar</a></li>
									<li><a href="blog-without-sidebar.html">No sidebar</a></li>
									<li><a href="blog-sticky-sidebar.html">Sticky sidebar</a></li>
									<li><a href="blog-grid.html">Grid</a></li>
									<li><a href="blog-post.html">Blog post</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Gallery</a></li>
							<li><a href="javascript:void(0)">Faq</a></li>
							<li><a href="javascript:void(0)">About Us</a></li>
							<li><a href="javascript:void(0)">Contact Us</a></li>
							<li><a href="404.html">404 Page</a></li>
							<li><a href="javascript:void(0)">Typography</a></li>
							<li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)">New Arrivals<span class="arrow"><i class="icon-angle-right"></i></span></a>
						<ul class="nav-level-2">
							<li><a href="javascript:void(0)">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Heels</a></li>
									<li><a href="javascript:void(0)">Boots</a></li>
									<li><a href="javascript:void(0)">Flats</a></li>
									<li><a href="javascript:void(0)">Sneakers &amp; Athletic</a></li>
									<li><a href="javascript:void(0)">Clogs &amp; Mules</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Tops<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Dresses</a></li>
									<li><a href="javascript:void(0)">Shirts &amp; Tops</a></li>
									<li><a href="javascript:void(0)">Coats &amp; Outerwear</a></li>
									<li><a href="javascript:void(0)">Sweaters</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Heels</a></li>
									<li><a href="javascript:void(0)">Boots</a></li>
									<li><a href="javascript:void(0)">Flats</a></li>
									<li><a href="javascript:void(0)">Sneakers &amp; Athletic</a></li>
									<li><a href="javascript:void(0)">Clogs &amp; Mules</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Bottoms<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Jeans</a></li>
									<li><a href="javascript:void(0)">Pants</a></li>
									<li><a href="javascript:void(0)">slippers</a></li>
									<li><a href="javascript:void(0)">suits</a></li>
									<li><a href="javascript:void(0)">socks</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Accessories<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Sunglasses</a></li>
									<li><a href="javascript:void(0)">Hats</a></li>
									<li><a href="javascript:void(0)">Watches</a></li>
									<li><a href="javascript:void(0)">Jewelry</a></li>
									<li><a href="javascript:void(0)">Belts</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Bags<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="javascript:void(0)">Handbags</a></li>
									<li><a href="javascript:void(0)">Backpacks</a></li>
									<li><a href="javascript:void(0)">Luggage</a></li>
									<li><a href="javascript:void(0)">wallets</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#buynow" target="_blank">Buy Theme<span class="menu-label menu-label--color3">Hurry Up!</span><span class="arrow"><i class="icon-angle-right"></i></span></a></li>
				</ul>
			</div>
			<div class="mobilemenu-bottom">
				<div class="mobilemenu-currency">
<div class="dropdn_currency">
	<div class="dropdn dropdn_caret">
			<a href="javascript:void(0)" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
			<div class="dropdn-content">
					<ul>
						<li class="active"><a href="javascript:void(0)"><span>US dollars</span></a></li>
						<li><a href="javascript:void(0)"><span>Euro</span></a></li>
						<li><a href="javascript:void(0)"><span>UK pounds</span></a></li>
						<li><a href="javascript:void(0)"><span>Canadian dollars</span></a></li>
					</ul>
			</div>
	</div>
</div>
				</div>
				<div class="mobilemenu-language">
<div class="dropdn_language">
	<div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
		<a href="javascript:void(0)" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
		<div class="dropdn-content">
			<ul>
				<li class="active"><a href="javascript:void(0)"><img src="images/flags/en.webp" alt="">English</a></li>
				<li><a href="javascript:void(0)"><img src="images/flags/sp.webp" alt="">Spanish</a></li>
				<li><a href="javascript:void(0)"><img src="images/flags/de.webp" alt="">German</a></li>
				<li><a href="javascript:void(0)"><img src="images/flags/fr.webp" alt="">French</a></li>
			</ul>
		</div>
	</div>
</div>
				</div>
			</div>
		<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
	</div>
</div>
	<div class="dropdn-content account-drop" id="dropdnAccount">
	<div class="dropdn-content-block">
		<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
		<ul>
			<li><a href="account-create.html"><span>Log In</span><i class="icon-login"></i></a></li>
			<li><a href="account-create.html"><span>Register</span><i class="icon-user2"></i></a></li>
			<li><a href="javascript:void(0)"><span>Checkout</span><i class="icon-card"></i></a></li>
		</ul>
		<div class="dropdn-form-wrapper">
			<h5>Quick Login</h5>
			<form action="#">
				<div class="form-group">
					<input type="text" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail">
					<div class="invalid-feedback">Can't be blank</div>
				</div>
				<div class="form-group">
					<input type="password" class="form-control form-control--sm" placeholder="Enter your password">
				</div>
				<button type="submit" class="btn">Enter</button>
			</form>
		</div>
	</div>
	<div class="drop-overlay js-dropdn-close"></div>
</div>
<div class="dropdn-content minicart-drop" id="dropdnMinicart">
	<div class="dropdn-content-block">
		<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
		<div class="minicart-drop-content js-dropdn-content-scroll ps ps--theme_default ps--active-y" data-ps-id="135952b9-6ef1-4205-75fc-5f6027d78cfe">
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col">
					<a href="javascript:void(0)"><img class="fade-up ls-is-cached lazyloaded" src="{{asset('images/product-01-1.webp')}}" data-src="{{asset('images/product-01-1.webp')}}" alt=""></a>
				</div>
				<div class="minicart-prd-info col">
					<div class="minicart-prd-tag">FOXic</div>
					<h2 class="minicart-prd-name"><a href="javascript:void(0)">Leather Pegged Pants</a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old">$200.00</div>
						<div class="price-new">$180.00</div>
					</div>
				</div>
				<div class="minicart-prd-action">
					<a href="javascript:void(0)" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
				</div>
			</div>
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col">
					<a href="javascript:void(0)"><img class="fade-up lazyloaded" src="images/skins/fashion/products/product-16-1.webp" data-src="images/skins/fashion/products/product-16-1.webp" alt=""></a>
				</div>
				<div class="minicart-prd-info col">
					<div class="minicart-prd-tag">FOXic</div>
					<h2 class="minicart-prd-name"><a href="javascript:void(0)">Cascade Casual Shirt</a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old">$200.00</div>
						<div class="price-new">$180.00</div>
					</div>
				</div>
				<div class="minicart-prd-action">
					<a href="javascript:void(0)" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
				</div>
			</div>
			<div class="minicart-empty js-minicart-empty d-none">
				<div class="minicart-empty-text">Your cart is empty</div>
				<div class="minicart-empty-icon">
					<i class="icon-shopping-bag"></i>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve">
						<path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60
							C94.6,47.6,78.1,59.5,78.1,59.5z"></path>
						</svg>
				</div>
			</div>
			<a href="javascript:void(0)" class="minicart-drop-countdown mt-3">
				<div class="countdown-box-full">
					<div class="row no-gutters align-items-center">
						<div class="col-auto"><i class="icon-gift icon--giftAnimate"></i></div>
						<div class="col">
							<div class="countdown-txt">WHEN BUYING TWO
								THINGS A THIRD AS A GIFT
							</div>
							<div class="countdown js-countdown" data-countdown="2021/07/01"><span><span>160</span>DAYS</span><span><span>10</span>HRS</span><span><span>48</span>MIN</span><span><span>32</span>SEC</span></div>
						</div>
					</div>
				</div>
			</a>
			<div class="minicart-drop-info d-none d-md-block">
				<div class="shop-feature-single row no-gutters align-items-center">
					<div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
					<div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
				</div>
			</div>
		<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 388px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 275px;"></div></div></div>
		<div class="minicart-drop-fixed js-hide-empty">
			<div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal="" style="opacity: 0;"><span></span></div>
			<div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
				<div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
				<div class="minicart-drop-total-price col" data-header-cart-total="">$340</div>
			</div>
			<div class="minicart-drop-actions">
				<a href="javascript:void(0)" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart Page</span></a>
				<a href="javascript:void(0)" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a>
			</div>
			<ul class="payment-link mb-2">
				<li><i class="icon-amazon-logo"></i></li>
				<li><i class="icon-visa-pay-logo"></i></li>
				<li><i class="icon-skrill-logo"></i></li>
				<li><i class="icon-klarna-logo"></i></li>
				<li><i class="icon-paypal-logo"></i></li>
				<li><i class="icon-apple-pay-logo"></i></li>
			</ul>
		</div>
	</div>
	<div class="drop-overlay js-dropdn-close"></div>
</div>
</div>

<div class="page-content">
    <!--------- Session notifications-------------->
           	<?php
                  $pop = ""; $val = "";
               
                  if(isset($signals))
                  {
                     foreach($signals['okays'] as $key => $value)
                     {
                       if(session()->has($key))
                       {
                     	$pop = $key; $val = session()->get($key);
                       }
                    }
                 }
              
                ?> 

                    @if($pop != "" && $val != "")
                      @include('session-status',['pop' => $pop, 'val' => $val])
                    @endif
           	<!--------- Input errors -------------->
                       @if (count($errors) > 0)
                             @include('input-errors', ['errors'=>$errors])
                        @endif
	@yield('content')
</div>

 		<footer class="page-footer footer-style-6 ">
	<div class="holder ">
		<div class="footer-shop-info">
			<div class="container">
				<div class="text-icn-blocks-bg-row">
					<div class="text-icn-block-footer">
						<div class="icn">
							<i class="icon-trolley"></i>
						</div>
						<div class="text">
							<h4>Extra fast delivery</h4>
							<p>Your order will be delivered 3-5 business days after all of your items are available</p>
						</div>
					</div>
					<div class="text-icn-block-footer">
						<div class="icn">
							<i class="icon-currency"></i>
						</div>
						<div class="text">
							<h4>Best price</h4>
							<p>We'll match the product prices of key online and local competitors for immediately</p>
						</div>
					</div>
					<div class="text-icn-block-footer">
						<div class="icn">
							<i class="icon-diplom"></i>
						</div>
						<div class="text">
							<h4>Guarantee</h4>
							<p>If the item you want is available, we can process a return and place a new order</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-top">
		<div class="container">
			<div class="row mt-0">
				<div class="col-lg col-xl last-mobile col-no-collapsed">
					<div class="footer-block">
						<div class="footer-logo">
							<a href="{{url('/')}}">MOBILE HUT</a>
						</div>
						<div class="collapsed-content">
							<ul>
								<li>E-mail: <a href="javascript:void(0)">support@mobilehut.com</a></li>
								<li>Hours: 10:00 - 18:00, Mon - Fri</li>
							</ul>
						</div>
						<ul class="social-list">
	<li>
		<a href="javascript:void(0)" class="icon icon-facebook"></a>
	</li>
	<li>
		<a href="javascript:void(0)" class="icon icon-twitter"></a>
	</li>
	<li>
		<a href="javascript:void(0)" class="icon icon-google"></a>
	</li>
	<li>
		<a href="javascript:void(0)" class="icon icon-vimeo"></a>
	</li>
	<li>
		<a href="javascript:void(0)" class="icon icon-youtube"></a>
	</li>
	<li>
		<a href="javascript:void(0)" class="icon icon-pinterest"></a>
	</li>
</ul>
						<div class="d-lg-none mt-3">
							<div class="box-coupon">
								<div class="box-coupon-icon"><i class="icon-scissors"></i></div>
								<div class="box-coupon-text"><span class="custom-color">MOBILE</span> HUT</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg col-xl">
					<div class="footer-block collapsed-mobile">
						<div class="title">
							<h4>Information</h4>
							<span class="toggle-arrow"><span></span><span></span></span>
						</div>
						<div class="collapsed-content">
							<ul>
	<li><a href="javascript:void(0)">About Us</a></li>
	<li><a href="javascript:void(0)">Contact Us</a></li>
	<li><a href="javascript:void(0)">Terms &amp; Conditions</a></li>
	<li><a href="javascript:void(0)">Returns &amp; Exchanges</a></li>
	<li><a href="javascript:void(0)">Shipping &amp; Delivery</a></li>
</ul>
						</div>
					</div>
				</div>
				<div class="col-lg col-xl">
					<div class="footer-block collapsed-mobile">
						<div class="title">
							<h4>Account details</h4>
							<span class="toggle-arrow"><span></span><span></span></span>
						</div>
						<div class="collapsed-content">
							<ul>
	<li><a href="javascript:void(0)">My Account</a></li>
	<li><a href="javascript:void(0)">View Cart</a></li>
	<li><a href="javascript:void(0)">My Wishlist</a></li>
	<li><a href="javascript:void(0)">Track My Order</a></li>
</ul>
						</div>
					</div>
				</div>
				<div class="col-lg col-xl">
					<div class="footer-block collapsed-mobile">
						<div class="title">
							<h4>Safe payments</h4>
							<span class="toggle-arrow"><span></span><span></span></span>
						</div>
						<div class="collapsed-content">
							<ul class="payment-link">
								<li><i class="icon-google-pay-logo"></i></li>
								<li><i class="icon-visa-pay-logo"></i></li>
								<li><i class="icon-apple-pay-logo"></i></li>
							</ul>
						</div>
						<div class="d-none d-lg-block">
							<div class="box-coupon">
								<div class="box-coupon-icon"><i class="icon-scissors"></i></div>
								<div class="box-coupon-text"><span class="custom-color">MOBILE</span> HUT</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom footer-bottom--bg">
		<div class="container">
			<div class="footer-copyright text-center">
				<a href="javascript:void(0)">MOBILE HUT</a> &copy;<script>document.write(new Date().getFullYear)</script> copyright
			</div>
		</div>
	</div>
</footer>
		<div class="footer-sticky">
	<div class="sticky-addcart js-stickyAddToCart closed">
		<div class="container">
			<div class="row">
				<div class="col-auto sticky-addcart_image">
					<a href="javascript:void(0)">
						<img src="{{asset('images/product-01-1.webp')}}" alt="">
					</a>
				</div>
				<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
					<h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
					<div class="sticky-addcart_price">
						<span class="sticky-addcart_price--actual">$180.00</span>
						<span class="sticky-addcart_price--old">$210.00</span>
					</div>
				</div>
				<div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
					<div class="select-wrapper">
						<select class="form-control form-control--sm">
							<option value="">--Please choose an option--</option>
						</select>
					</div>
				</div>
				<div class="col-auto sticky-addcart_actions">
					<div class="prd-block_qty">
						<span class="option-label">Quantity:</span>
						<div class="qty qty-changer">
							<button class="decrease"></button>
							<input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
							<button class="increase"></button>
						</div>
					</div>
					<div class="btn-wrap">
						<button class="btn js-prd-addtocart" data-fancybox="" data-src="#modalCheckOut">Add to cart
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
		<div class="container">
			<div class="row">
				<div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
				<div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i class="icon-basket"></i></div>
				<div class="col-auto popup-addedtocart_logo">
					MOBILE HUT
				</div>
				<div class="col popup-addedtocart_info">
					<div class="row">
						<a href="javascript:void(0)" class="col-auto popup-addedtocart_image">
							<span class="image-container w-100">
								<img src="{{asset('images/product-01-1.webp')}}" alt="">
							</span>
						</a>
						<div class="col popup-addedtocart_text">
							<a href="javascript:void(0)" class="popup-addedtocart_title"></a>
							<span class="popup-addedtocart_message">Added to <a href="javascript:void(0)" class="underline">Cart</a></span>
							<span class="popup-addedtocart_error_message"></span>
						</div>
					</div>
				</div>
				<div class="col-auto popup-addedtocart_actions">
					<span>You can continue</span> <a href="javascript:void(0)" class="btn btn--grey btn--sm js-open-drop" data-panel="#dropdnMinicart"><i class="icon-basket"></i><span>Check Cart</span></a> <span>or</span> <a href="javascript:void(0)" class="btn btn--invert btn--sm"><i class="icon-envelope-1"></i><span>Check out</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
		<div class="container">
			<div class="row">
				<div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i></div>
				<div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
					<a href="javascript:void(0)" data-caption="">
						<span class="image-container"><img src="#" alt=""></span>
					</a>
				</div>
				<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
					<h1 class="sticky-addcart_title"><a href="javascript:void(0)">&nbsp;</a></h1>
					<div class="sticky-addcart_price">
						<span class="sticky-addcart_price--actual"></span>
						<span class="sticky-addcart_price--old"></span>
					</div>
					<div class="sticky-addcart_error_message">Error Message</div>
				</div>
				<div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
					<div class="select-wrapper">
						<select class="form-control form-control--sm sticky-addcart_options_select">
							<option value="none">Select Option please..</option>
						</select>
						<div class="invalid-feedback">Can't be blank</div>
					</div>
				</div>
				<div class="col-auto sticky-addcart_actions">
					<div class="prd-block_qty">
						<span class="option-label">Quantity:</span>
						<div class="qty qty-changer">
							<button class="decrease"></button>
							<input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
							<button class="increase"></button>
						</div>
					</div>
					<div class="btn-wrap">
						<button class="btn js-prd-addtocart">Add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="back-to-top js-back-to-top compensate-for-scrollbar" href="javascript:void(0)" title="Scroll To Top">
		<i class="icon icon-angle-up"></i>
	</a>
	<div class="loader-horizontal js-loader-horizontal">
		<div class="progress">
			<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
		</div>
	</div>
</div>
<div class="footer-sticky">
	<div class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000" data-delay="500" data-from="Aberdeen,Bakersfield,Birmingham,Cambridge,Youngstown" data-products="[{&quot;productname&quot;:&quot;Leather Pegged Pants&quot;, &quot;productlink&quot;:&quot;javascript:void(0)&quot;,&quot;productimage&quot;:&quot;{{asset('images/product-01-1.webp')}}&quot;},{&quot;productname&quot;:&quot;Black Fabric Backpack&quot;, &quot;productlink&quot;:&quot;javascript:void(0)&quot;,&quot;productimage&quot;:&quot;{{asset('images/product-28-1.webp')}}&quot;},{&quot;productname&quot;:&quot;Combined Chunky Sneakers&quot;, &quot;productlink&quot;:&quot;javascript:void(0)&quot;,&quot;productimage&quot;:&quot;{{asset('images/product-23-1.webp')}}&quot;}]">
		<div class="payment-notification payment-notification--squared" style="transform: translateY(120%); opacity: 0;">
			<div class="payment-notification-inside">
				<div class="payment-notification-container">
					<a href="javascript:void(0)" class="payment-notification-image js-pn-link" title="Black Fabric Backpack">
						<img src="{{asset('images/product-28-1.webp')}}" class="js-pn-image" alt="">
					</a>
					<div class="payment-notification-content-wrapper">
						<div class="payment-notification-content">
							<div class="payment-notification-text">Someone purchased</div>
							<a href="javascript:void(0)" class="payment-notification-name js-pn-name js-pn-link" title="Black Fabric Backpack">Black Fabric Backpack</a>
							<div class="payment-notification-bottom">
								<div class="payment-notification-when"><span class="js-pn-time">10</span> min ago</div>
								<div class="payment-notification-from">from <span class="js-pn-from">Cambridge</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="payment-notification-close"><i class="icon-close-bold"></i></div>
				<div class="payment-notification-qw prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i></div>
			</div>
		</div>
	</div>
</div>
		<div id="popupNewsletter" class="modal-info-content js-newslettermodal newslettermodal--classic p-0" style="display: none;" data-pause="12000" data-expires="0" data-only-index="false">
	<div class="row align-items-center">
		<div class="col-sm-8 d-none d-sm-block">
			<div class="popup-newsletter-image image-container" style="padding-bottom: 160.0%">
				<img class="w-100 ls-is-cached lazyloaded" src="{{asset('images/popup-image.webp')}}" data-src="{{asset('images/popup-image.webp')}}" alt="">
			</div>
		</div>
		<div class="col-sm-10">
			<div class="popup-newsletter-content">
				<form method="post" action="#" class="newslettermodal-content-form">
					<h3 class="newslettermodal-content-title">Be The First To Know</h3>
					<div class="newslettermodal-content-text">About our newest arrivals, special offers plus 10% off on your first order.</div>
					<div class="form-group mt-3">
						<div class="form-label">Email address</div>
						<input type="email" name="email" class="form-control form-control--sm" value="" placeholder="Email address">
					</div>
					<button type="submit" class="btn w-100">Subscribe</button>
					<div class="popup-newsletter-info-sm mt-2">By subscribing, you accept the <a href="javascript:void(0)" class="modal-info-link" data-src="#agreementInfo">Terms of Use</a></div>
				</form>
			</div>
		</div>
	</div>
	<div data-fancybox-close="" class="fancybox-close-small modal-close"><i class="icon-close"></i></div>
</div>

</body></html>
