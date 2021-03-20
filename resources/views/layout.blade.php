<html lang="en" class="wf-opensans-n4-active wf-opensans-n6-active wf-opensans-n7-active wf-poppins-n4-active wf-poppins-n6-active wf-poppins-n7-active wf-poppins-n9-active wf-active" style=""><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>{{$title}} | Mobile Buzz - Gadgets, Phones and Accessories in the United Kingdom</title>

    <meta name="keywords" content="iphone, android">
    <meta name="description" content="Mobile Buzz - Gadgets, Phones and Accessories in the United Kingdom">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script src="js/webfont.js" async=""></script><script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700,900'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>



    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <!--<link rel="stylesheet" type="text/css" href="css/demo18.min.css">-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,600,700,900" media="all">
     
	   <script src="vendor/jquery/jquery.min.js"></script>
	 
	 	<!-- custom js -->
	<script src="{{asset('js/helpers.js').'?ver='.rand(32,99999)}}"></script>
	<script src="{{asset('js/mmm.js').'?ver='.rand(32,99999)}}"></script>
	
	 
	 	<!--SweetAlert--> 
    <link href="lib/sweet-alert/sweetalert2.css" rel="stylesheet">
    <script src="lib/sweet-alert/sweetalert2.js"></script>
	 
    <!-- Custom CSS File -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css').'?ver='.rand(32,99999)}}">
	
	@yield('styles')
	@yield('scripts')

	
<!-- DO NOT EDIT!! start of plugins -->
@foreach($plugins as $p)
  {!! $p['value'] !!}
@endforeach
<!-- DO NOT EDIT!! end of plugins -->
</head>
 <?php
	  $xu = url('login'); $xt = "Account";
	
	  if(is_null($user))
	  {
		$welcomeText = "Welcome to our online store!";
	  }
	  else
	  {
		$xu = url('dashboard'); $xt = "Dashboard";
		 $welcomeText = "Welcome back, ".$user->fname."!";
	  }
	  ?>
<body class="home loaded" style="overflow-x: hidden;">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            <div class="bounce4"></div>
        </div>
    </div>
    <div class="page-wrapper">
       
		@if(!isset($no_header))
		 <h1 class="d-none">Mobile Buzz - Your Number 1 Gadgets Store in the UK!</h1>
        <header class="header">
		 <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Mobile Buzz!</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">GBP</a>
                            <ul class="dropdown-box">
                                <li><a href="#USD">USD</a></li>
                                <li><a href="#EUR">EUR</a></li>
                                <li><a href="#GBP">GBP</a></li>
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <div class="dropdown">
                            <a href="#language"><img src="images/flags/en2.png" alt="UK Flag" class="dropdown-image">ENG</a>
                            <ul class="dropdown-box">
                                <li>
                                    <a href="#USD">
                                        <img src="images/flags/en2.png" alt="UK Flag" class="dropdown-image">ENG
                                    </a>
                                </li>
                                <li>
                                    <a href="#EUR">
                                        <img src="images/flags/fr.png" alt="France Flag" class="dropdown-image">FR
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <div class="dropdown dropdown-expanded d-lg-show">
                            <a href="#dropdown">Links</a>
                            <ul class="dropdown-box">
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('terms')}}">Terms</a></li>
                                <li><a href="{{url('delivery')}}">Delivery</a></li>
                                <li><a href="{{url('returns')}}">Returns</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                <li><a href="{{url('privacy')}}">Privacy</a></li>
                            </ul>
                        </div>
                        <!-- End DropDownExpanded Menu -->
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle has-center">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle" style="margin-right: 15px;">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <!-- End Mobile Menu Toggle -->
                       
                        <span class="divider d-lg-block"></span>
                        <!-- End Divider --
                        <div class="dropdown currency-dropdown">
                            <a href="#currency">GBP</a>
                            <ul class="dropdown-box">
                                <li><a href="#USD">USD</a></li>
                                <li><a href="#EUR">EUR</a></li>
                                <li><a href="#GBP">GBP</a></li>
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <div class="dropdown language-dropdown">
                            <a href="#language"><img src="images/flags/en2.png" alt="UK Flag" class="dropdown-image">ENG</a>
                            <ul class="dropdown-box">
                                <li>
                                    <a href="#USD">
                                        <img src="images/flags/en2.png" alt="UK Flag" class="dropdown-image">ENG
                                    </a>
                                </li>
                                <li>
                                    <a href="#EUR">
                                        <img src="images/flags/fr.png" alt="France Flag" class="dropdown-image">FR
								</a>
                                </li>
                            </ul>
                        </div>
						<?php
						 $tel = "#"; $call = "(123) 456 908";
						 if(isset($pe['phone']) && $pe['phone'] != null)
						 {
							 $tel = $pe['phone']; $call = $tel;
						 }
						?>
                        <!-- End DropDown Menu -->
						 <a href="tel:{{$tel}}" class="call"><span class="text-uppercase font-weight-semi-bold ls-l"></span><strong class="text-primary">{{$call}}</strong></a>
                        <!-- End Call -->
                    </div>
                    <div class="header-center">
                        <a href="{{url('/')}}" class="logo pt-4 pb-4 mr-0">
                            <span><img src="images/icons/favicon.png" alt="logo" width="48" height="48">
							MOBILE BUZZ
							</span>
                        </a>
                        <!-- End Logo -->
                    </div>
                    <div class="header-right">
					@if($user == null)
                        <a class="login" href="{{url('login')}}">
                            <i class="d-icon-user"></i>
                            <span>Login</span>
                        </a>
						<!-- End Login -->
					@else
					    <div class="dropdown cart-dropdown">
						 <a href="#" class="cart-toggle">
                                <span class="cart-label">
                                    <span class="cart-name no-after">Hello, {{$user->fname}}</span>
                                </span>
                            </a>
                         <div class="dropdown-box">
						    <a href="{{url('dashboard')}}" class="cart-toggle btn btn-dark mb-3">Dashboard</a>
						    <a href="{{url('bye')}}" class="cart-toggle btn btn-danger">Logout</a>
						 </div>
						</div>
						<?php
			             $cc = (isset($cart)) ? count($cart) : 0;
						 $subtotal = 0;
		                ?>
                        <span class="divider d-lg-block"></span>
                        <div class="dropdown cart-dropdown">
						<?php
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									  $subtotal += ($itemAmount * $qty);
				                 ?>
								 
						<?php
								   }
						?>
                            <a href="#" class="cart-toggle">
                                <span class="cart-label">
                                    <span class="cart-name">My Cart</span>
                                    <span class="cart-price">&#0163;{{number_format($subtotal,2)}}</span>
                                </span>
                                <i class="minicart-icon">
                                    <span class="cart-count">{{$cc}}</span>
                                </i>
                            </a>
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="product product-cart-header">
                                    <span class="product-cart-counts">{{$cc}} items</span>
                                    <span><a href="{{url('cart')}}">View cart</a></span>
                                </div>
                                <div class="products scrollable">
								 <?php
								   $subtotal = 0;
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									 $subtotal += ($itemAmount * $qty);
									 $imgs = $item['imggs'];
									 $uu = url('product')."?xf=".$item['id'];
				                 ?>
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="{{$uu}}" class="product-name">{{$item['name']}}</a>
                                            <div class="price-box">
                                                <span class="product-quantity">{{$qty}}</span>
                                                <span class="product-price">&#0163;{{number_format($itemAmount,2)}}</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{$imgs[0]}}" alt="{{$item['name']}}" width="90" height="90">
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                    </div>
									 <?php
			                          }
			                         ?>
                                    <!-- End of Cart Product -->
                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">&#0163;{{number_format($subtotal,2)}}</span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="{{url('checkout')}}" class="btn btn-dark"><span>Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
						@endif
                    </div>
                </div>

            </div>
            <!-- End Header Middle -->
        </header>
        <!-- End Header -->
		@endif
        <main class="main mt-5">
		 @if(isset($ph) && $ph)
             @include('page-header',['title' => $title,'img' => asset('images/page-header.jpg')])
		 @endif
            <div class="page-content{{$pcClass}}">
			
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
        </main>
        <!-- End Main -->
        <footer class="footer">
            <div class="container">
                <!-- End FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                        <figure class="payment">
                            <img src="images/payment.png" alt="payment" width="159" height="29">
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">Mobile Buzz &copy; {{date("Y")}}. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="javascript:void(0)" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="javascript:void(0)" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="javascript:void(0)" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
        </footer>
        <!-- End Footer -->

		
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom" style="">
        <a href="{{url('/')}}" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="{{url('categories')}}" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="{{url('cart')}}" class="sticky-link">
            <i class="d-icon-bag"></i>
            <span>Cart({{count($cart)}})</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required="">
                <a class="btn btn-search" href="javascript:void(0)">
                    <i class="d-icon-search"></i>
                </a>
            </form>
        </div>
        <a href="{{$xu}}" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>{{$xt}}</span>
        </a>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper mb-6">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required="">
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li class="active">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{url('terms')}}">Terms</a></li>
                <li><a href="{{url('faq')}}">FAQ</a></li>
                <li><a href="{{url('returns')}}">Returns</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
                <li><a href="{{url('privacy')}}">Privacy</a></li>
            </ul>
        </div>
    </div>
        <!-- Plugins JS File -->
  
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/sticky/sticky.min.js"></script>
	
    <!-- Main JS File -->
    <script src="{{asset('js/main.js').'?ver='.rand(23,999)}}"></script>
</body>
</html>
