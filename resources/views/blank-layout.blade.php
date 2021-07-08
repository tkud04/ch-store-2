<html lang="en" class="wf-opensans-n4-active wf-opensans-n6-active wf-opensans-n7-active wf-poppins-n4-active wf-poppins-n6-active wf-poppins-n7-active wf-poppins-n9-active wf-active" style=""><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>{{$title}} | Mobile Buzz - Gadgets, Phones and Accessories in the United Kingdom</title>
	
	<meta name="keywords" content="iphone, android">
    <meta name="description" content="Mobile Buzz - Gadgets, Phones and Accessories in the United Kingdom">
     @yield('metas')
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo_transparent.png">
	
	 <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/demo1.min.css">
    <!--<link rel="stylesheet" type="text/css" href="{{asset('css/style.min.css')}}">-->
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

<body>
  <div>
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
</body>
</html>