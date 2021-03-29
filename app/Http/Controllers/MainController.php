<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Cookie;
use Validator; 
use Carbon\Carbon; 
use App\Products;
//use Codedge\Fpdf\Fpdf\Fpdf;
use PDF;

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                      
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();

		$signals = $this->helpers->signals;
		
		$c = $this->helpers->getCategories(['children' => true,'id' => true]);
		$m = $this->helpers->getManufacturers();
		$bs = $this->helpers->getBestSellers();
		$tp = $this->helpers->getTopProducts();		
		$cart = $this->helpers->getCart($user);
	    #dd($cart);
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		
    	return view("index",compact(['user','cart','c','m','tp','bs','pe','signals','plugins']));
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getBackupIndex(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();

		$signals = $this->helpers->signals;
		
		$c = $this->helpers->getCategories();
		$cart = $this->helpers->getCart($user);
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		
    	return view("index.backup",compact(['user','cart','c','pe','signals','plugins']));
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCategories(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();

		$signals = $this->helpers->signals;
		
		$c = $this->helpers->getCategories();
		#dd($c);
		$cart = $this->helpers->getCart($user);
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		
    	return view("categories",compact(['user','cart','c','pe','signals','plugins']));
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCategory(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
        
		if(isset($req['xf']))
		{
			$xf = $req['xf'];
		  $signals = $this->helpers->signals;
	   	  $category = $this->helpers->getCategory($xf,['category' => true]);
		  $c = $this->helpers->getCategories(['children' => true]);
		  #dd($category);
		  if(count($category) > 0)
		  {
		     $products = $this->helpers->getProductsByCategory($xf);
		     #dd($products);
		     $cart = $this->helpers->getCart($user);
			 $m = $this->helpers->getManufacturers();
		     $pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		     return view("category",compact(['user','cart','c','m','category','products','pe','signals','plugins']));
		  }
		  else
		  {
			return redirect()->intended('categories');
		  }
	   	  	  
		}
		else
		{
			return redirect()->intended('categories');
		}
    
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getManufacturers(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();

		$signals = $this->helpers->signals;
		
		$m = $this->helpers->getManufacturers();
		$c = $this->helpers->getCategories(['children' => true]);
		#dd($m);
		$cart = $this->helpers->getCart($user);
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		
    	return view("manufacturers",compact(['user','cart','m','c','pe','signals','plugins']));
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getManufacturer(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
        
		if(isset($req['xf']))
		{
			$xf = $req['xf'];
		  $signals = $this->helpers->signals;
	   	  $manufacturer = $this->helpers->getManufacturer($xf);
	      
		  #dd($category);
		  if(count($manufacturer) > 0)
		  {
		     $products = $this->helpers->getProductsByManufacturer($xf);
		     #dd($products);
		     $m = $this->helpers->getManufacturers();
		  $c = $this->helpers->getCategories(['children' => true]);
		     $cart = $this->helpers->getCart($user);
		     $pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		     return view("manufacturer",compact(['user','cart','c','manufacturer','m','products','pe','signals','plugins']));
		  }
		  else
		  {
			return redirect()->intended('manufacturers');
		  }
	   	  	  
		}
		else
		{
			return redirect()->intended('manufacturers');
		}
    
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getShop(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();

		$signals = $this->helpers->signals;
		
		$c = $this->helpers->getCategories();
		$m = $this->helpers->getManufacturers();
		$bs = $this->helpers->getBestSellers();
		$tp = $this->helpers->getTopProducts();
		#dd($bs);
		$cart = $this->helpers->getCart($user);
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		
    	return view("shop",compact(['user','cart','c','m','tp','bs','pe','signals','plugins']));
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getProduct(Request $request)
    {
        $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
		}
		$req = $request->all();
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		
		$req = $request->all();
	    //dd($secure);
		$validator = Validator::make($req, [
                             'xf' => 'required'
                   ]);
         
                 if($validator->fails())
                  {
					  $uu = "categories";
                      return redirect()->intended($uu);
                       
                 }
                
                 else
                 {
					 $discounts = [];

					 $product = $this->helpers->getProduct($req["xf"]);
					 #dd($product);

					 //$reviews = $this->helpers->getReviews($["model"]);
					 //$related = $this->helpers->getProducts();
					// dd($product);

				   $reviews = []; $related = [];
					
					if(isset($req['type']) && $req['type'] == "json")
					{
						return json_encode($product);
					}
					else
					{
						return view("product",compact(['user','cart','c','reviews','related','product','pe','signals','plugins']));
					}
                    			 
                 }			 
    	
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCart(Request $request)
    {
        $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
		}
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
		$totals = $this->helpers->getCartTotals($cart);
		#dd($cart);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$ads = $this->helpers->getAds();
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		shuffle($ads);
		$ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
		#session()->reflash();
		return view("cart",compact(['user','cart','totals','c','ad','pe','signals','plugins']));					 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCheckout(Request $request)
    {
        $user = null;
		$cart = [];
		$shipping = [];
		if(Auth::check())
		{
			$user = Auth::user();
			$cart = $this->helpers->getCart($user);
		    $shipping = $this->helpers->getShippingDetails($user);	
		}
		else
		{
			return redirect()->intended('/');
		}
		$req = $request->all();
		
		
		$c = $this->helpers->getCategories();
		
		$pd = $this->helpers->getPaymentDetails($user);
		$sd = $this->helpers->getShippingDetails($user);
		
		$countries = $this->helpers->countries;
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();
		$plugins = $this->helpers->getPlugins();
		#dd($sd);
		 $totals = []; $ss = []; $ref = ""; 
			return view("checkout",compact(['user','cart','totals','countries','pd','sd','c','pe','signals','plugins']));		
								 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postCheckout(Request $request)
    {
		$user = null;
		
    	if(Auth::check())
		{
			$user = Auth::user();
			$rules = [
                             'pd' => 'required',
                             'sd' => 'required'                        
         ];
		}
		else
		{
			session::flash("auth-status-error","ok");
			return redirect()->intended('/');
		}
		
        $req = $request->all();
		
      # dd($req);
        
        $validator = Validator::make($req, $rules);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
			 #dd($req);
			 $this->helpers->checkout($user,$req);	 
             session()->flash("checkout-status","ok");
		     return redirect()->intended('orders');        
         }        
    }
	
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getReceipt(Request $request)
    {
         $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();	
		}
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$ads = $this->helpers->getAds();
		shuffle($ads);
		$ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
		
		$req = $request->all();
	    //dd($secure);
		$validator = Validator::make($req, [
                             'r' => 'required'
                   ]);
         
                 if($validator->fails())
                  {
					  return redirect()->intended('orders');     
                  }
                
                 else
                 {
					 $order = $this->helpers->getOrder($req['r']);
					#dd($order);
					
					 if(is_null($order) || $order == [])
					 {
						return redirect()->intended('orders'); 
					 }
				     else
					 {
						   $buyer = is_null($user) ? [] : $this->helpers->getBuyer($req['r']);
						   $anon = is_null($user) ? $this->helpers->getAnonOrder($req['r']) : [];
						   #dd($anon);
						  
						 if(isset($req['print']))
						 {
						   switch($req['print'])
						   {
							   case "1":
							      return view("print-receipt", compact(['user','cart','c','ad','order','anon','buyer','pe','signals','plugins'])); 
							   break;
							   
							   case "2":
							   /**
							   $dt = [
								  'name' => $buyer['fname']." ".$buyer['lname'],
								  'email' => $buyer['email'],
								  'phone' => $buyer['phone'],
								  'status' => $order['status'],
								  'date' => $order['date'],
								  'reference' => $order['reference'],
								  'items' => $order['items'],
								];
							    $params = ['type' => 'receipt','data' => $dt];
         	                    $this->helpers->outputPDF($params,$fpdf);
								**/
								$dt = [
								  'user' => $user,
								  'cart' => $cart,
								  'c' => $c,
								  'ad' => $ad,
								  'order' => $order,
								  'buyer' => $buyer,
								  'anon' => $anon,
								  'signals','plugins' => $signals,
								];
								
								$fname = $order['status'] == "paid" ? "receipt.pdf" : "invoice.pdf";
								$pdf = PDF::loadView('print-receipt', $dt);
                                return $pdf->download($fname);
							   break;
							   
							   default:
							      return view("print-receipt", compact(['user','cart','c','ad','order','anon','buyer','pe','signals','plugins'])); 
						   }
						 }
						 else
						 {
						    return view("receipt", compact(['user','cart','c','ad','order','anon','buyer','pe','signals','plugins'])); 
						 }
						  
					 }					 
                 }	 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getContact(Request $request)
    {
        $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		
		return view("contact",compact(['user','cart','c','pe','signals','plugins']));							 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postContact(Request $request)
    {
		$user = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
		}
       
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'name' => 'required',
                             'email' => 'required|email',
                             'msg' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	$this->helpers->contact($req);
	        session()->flash("contact-status","ok");
			return redirect()->intended('shop');
         }        
    }
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getSearch(Request $request)
    {
         $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$ads = $this->helpers->getAds();
		shuffle($ads);
		$ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
		
		$req = $request->all();
	    //dd($secure);
		$validator = Validator::make($req, [
                             'q' => 'required'
                   ]);
         
                 if($validator->fails())
                  {
					  $uu = "/";
                      return redirect()->intended($uu);
                       
                 }
                
                 else
                 {
					 $results = $this->helpers->search($req['q']);
					 
					 if(count($results) < 1)
					 {
						return view("search-not-found",compact(['user','cart','c','ad','pe','signals','plugins'])); 
					 }
				     else
					 {
						 return view("search-found", compact(['results','user','cart','c','ad','pe','signals','plugins'])); 
					 }
                    					 
                 }	 
    }
    
   
   /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAbout(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$info = $this->helpers->getInformationSingle("about");
		#dd($info);
		return view("about",compact(['user','cart','info','c','pe','signals','plugins']));	
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getTerms(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$info = $this->helpers->getInformationSingle("terms");
		#dd($info);
		return view("terms",compact(['user','cart','info','c','pe','signals','plugins']));	
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPrivacyPolicy(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$info = $this->helpers->getInformationSingle("privacy");
		#dd($info);
		return view("privacy",compact(['user','cart','info','c','pe','signals','plugins']));	
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getDeliveryPolicy(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$info = $this->helpers->getInformationSingle("delivery");
		#dd($info);
		return view("delivery",compact(['user','cart','info','c','pe','signals','plugins']));	
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getReturnPolicy(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$info = $this->helpers->getInformationSingle("returns");
		#dd($info);
		return view("returns",compact(['user','cart','info','c','pe','signals','plugins']));	
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getFAQ(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$ads = $this->helpers->getAds();
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		shuffle($ads);
		$ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
		$signals = $this->helpers->signals;
		return view("faq",compact(['user','cart','c','ad','pe','signals','plugins']));	
    }
    
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getTrack(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
			
		}
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$ads = $this->helpers->getAds();
		shuffle($ads);
		$ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		$req = $request->all();
		$showView = false;
		
		if(isset($req['o']))
		{
			$anon = $this->helpers->getAnonOrder($req['o']);
			$orders = [];
			#dd($anon);
			if(count($anon) > 0)
			{
				$trackings = $this->helpers->getTrackings($req['o']);
				$r = $req['o'];
			    $paidStatus = $anon['order']['type'] == "pod" ? "pod" : $anon['order']['status'];
			    #dd($trackings);
			    return view("track-results",compact(['user','cart','trackings','c','r','paidStatus','ad','pe','signals','plugins']));	
			}
			else
			{
				session()->flash("invalid-order-status","error");
				$showView = true;
			}			
		}
		else
		{
			$showView = true;
		}
		
		if($showView)
		{
			return view("track",compact(['user','cart','c','ad','pe','signals','plugins']));
		}
			
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getDashboard(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		
			$req = $request->all();
		$cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$countries = $this->helpers->countries;
			
			$pd = $this->helpers->getPaymentDetails($user);
			$sd = $this->helpers->getShippingDetails($user);
			
			$orders = $this->helpers->getOrders($user);
			
			#dd($orders);
			
		    $statuses = $this->helpers->statuses;
		    $signals = $this->helpers->signals;
			$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		    return view("dashboard",compact(['user','cart','c','countries','sd','pd','orders','statuses','pe','signals','plugins']));			
		
		}
		else
		{
			return redirect()->intended('login');
		}
		
    }
    
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getProfile(Request $request)
    {	
			return redirect()->intended('dashboard');
		
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postProfile(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'xf' => 'required'
         ]);

         	$req["xf"] = $user->id; 
         	$this->helpers->updateProfile($user, $req);
	        session()->flash("profile-status","ok");
			return redirect()->intended('dashboard');
      
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPassword(Request $request)
    {	
			return redirect()->intended('dashboard');
		
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postPassword(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'pass' => 'required|min:6|confirmed'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         else{
         	$req["xf"] = $user->id; 
             $req["password"] = $req['pass']; 
         	$this->helpers->updateProfile($user, $req);
	        session()->flash("profile-status","ok");
			return redirect()->intended('dashboard');
         }

         	
      
    }
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getEditAddress(Request $request)
    {	
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		
			$req = $request->all();
		    $cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$countries = $this->helpers->countries;
			
			if(isset($req['type']) && isset($req['xf']))
			{
				$t = $req['type']; $xf = $req['xf'];
				$a = [];
				
				if($t == "payment")
				{
					$a = $this->helpers->getPaymentDetail($xf);
					$a['title'] = "Edit Payment Address";
				}
				else if($t == "shipping")
				{
					$a = $this->helpers->getShippingDetail($xf);
					$a['title'] = "Edit Shipping Address";
				}
				
				$a['type'] = $t;
				#dd($a);
				
		        $signals = $this->helpers->signals;
			    $pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		        return view("edit-address",compact(['user','cart','c','a','countries','pe','signals','plugins']));			
			}
			else
			{
			  return redirect()->intended('dashboard');	
			}
			
		
		}
		else
		{
			return redirect()->intended('login');
		}
		
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postEditAddress(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $req = $request->all();
        #dd($req);
        
        $validator = Validator::make($req, [
                             'type' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         else{
         	$type = $req['type'];
			
			if($type == "payment")
			{
				$this->helpers->updatePaymentDetails($user, $req);
			}
			else if($type == "shipping")
			{
				$this->helpers->updateShippingDetails($user, $req);			
			}
            
	        session()->flash("address-status","ok");
			return redirect()->intended('dashboard');
         }
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getAddToWishlist(Request $request)
    {
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
		
       $req = $request->all();
		
        $validator = Validator::make($req, [
                             'xf' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->intended('/');
         }
         else
         {
			 $req['user_id'] = $user->id;
			 $req['product_id'] = $req['xf'];
         	$this->helpers->createWishlist($req);
	        session()->flash("add-to-wishlist-status","ok");
			return redirect()->back();
         }        
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getWishlist(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
		
		$req = $request->all();
		    $cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$wishlist = $this->helpers->getWishlist($user);
			#dd($wishlist);
			 $signals = $this->helpers->signals;
			    $pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		        return view("wishlist",compact(['user','cart','c','wishlist','signals','plugins']));	
		
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getRemoveFromWishlist(Request $request)
    {
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();	
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $validator = Validator::make($req, [
                             'xf' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         { 
			$req['user_id'] = $user->id;
			$req['product_id'] = $req['xf'];
         	$this->helpers->removeFromWishlist($req);
	        session()->flash("remove-from-wishlist-status","ok");
			return redirect()->intended('wishlist');
         }       
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getAddToCompare(Request $request)
    {
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
        
        
        $validator = Validator::make($req, [
                             'sku' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
			 $req['user_id'] = is_null($user) ? $gid : $user->id;
         	$this->helpers->createComparison($req);
	        session()->flash("add-to-compare-status","ok");
			return redirect()->back();
         }        
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCompare(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$ads = $this->helpers->getAds();
			$compares = $this->helpers->getComparisons($user);

		shuffle($ads);
		$ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
		    $signals = $this->helpers->signals;
			$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		    return view("compare",compact(['user','cart','c','ad','compares','pe','signals','plugins']));			
		
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getRemoveFromCompare(Request $request)
    {
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		
        $req = $request->all();
		
        
        $validator = Validator::make($req, [
                             'sku' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
			$req['user_id'] = is_null($user) ? $gid : $user->id;
         	$this->helpers->removeFromComparisons($req);
	        session()->flash("remove-from-compare-status","ok");
			return redirect()->intended('compare');
         }       
    }
	
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getOrders(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
		
		$req = $request->all();
		    $cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$orders = $this->helpers->getOrders($user);
			#dd($orders);
			 $signals = $this->helpers->signals;
			   $statuses = $this->helpers->statuses;
			   $plugins = $this->helpers->getPlugins();
		        return view("orders",compact(['user','cart','c','orders','statuses','signals','plugins']));	
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getOrder(Request $request)
    {	    
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
		
       $req = $request->all();
		
        $validator = Validator::make($req, [
                             'xf' => 'required'
         ]);
         
         if($validator->fails())
         {
             return redirect()->intended('orders');
         }
         else
         {
			$cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$o = $this->helpers->getOrder($req['xf']);
			$products = $this->helpers->getProducts();
			$countries = $this->helpers->countries;
			#dd($o);
			 $signals = $this->helpers->signals;
			   $statuses = $this->helpers->statuses;
			   $plugins = $this->helpers->getPlugins();
		        return view("order",compact(['user','cart','c','o','products','countries','statuses','signals','plugins']));	
		
         }        
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getInvoice(Request $request)
    {	    
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
		
       $req = $request->all();
		
        $validator = Validator::make($req, [
                             'xf' => 'required'
         ]);
         
         if($validator->fails())
         {
             return redirect()->intended('orders');
         }
         else
         {
			$cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$o = $this->helpers->getOrder($req['xf']);
			$products = $this->helpers->getProducts();
			$countries = $this->helpers->countries;
			#dd($o);
			 $signals = $this->helpers->signals;
			   $statuses = $this->helpers->statuses;
			   $plugins = $this->helpers->getPlugins();
		        return view("invoice",compact(['user','cart','c','o','products','countries','statuses','signals','plugins']));	
		
         }        
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getShippingList(Request $request)
    {	    
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
		
       $req = $request->all();
		
        $validator = Validator::make($req, [
                             'xf' => 'required'
         ]);
         
         if($validator->fails())
         {
             return redirect()->intended('orders');
         }
         else
         {
			$cart = $this->helpers->getCart($user);
			$c = $this->helpers->getCategories();
			$o = $this->helpers->getOrder($req['xf']);
			$countries = $this->helpers->countries;
			#dd($o);
			$products = $this->helpers->getProducts();
			 $signals = $this->helpers->signals;
			   $statuses = $this->helpers->statuses;
			   $plugins = $this->helpers->getPlugins();
		        return view("shipping-list",compact(['user','cart','c','o','products','countries','statuses','signals','plugins']));	
		
         }        
    }
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postAddReview(Request $request)
    {
		$user = null;
    	if(Auth::check())
		{
			$user = Auth::user();
		}
		
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'rating' => 'required',
                             'name' => 'required',
							 'review' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	$this->helpers->createReview($user,$req);
	        session()->flash("add-review-status","ok");
			return redirect()->back();
         }        
    }
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getAddToCart(Request $request)
    {
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
		}
		else
		{
			session()->flash("auth-status-error","ok");
			return redirect()->intended('/');
		} 
		
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
        $req = $request->all();
        #dd($req);
        
        $validator = Validator::make($req, [
                             'xf' => 'required|numeric',
                             'qty' => 'required|numeric'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
			 $req['user_id'] = $user->id;
         	$ret = $this->helpers->addToCart($req);
			//dd($ret);
			
			
			if($ret == "ok")
			{
				session()->flash("add-to-cart-status",$ret);
				if(isset($req['from_wishlist']) && $req['from_wishlist'] == "yes")
			    {
				  $this->helpers->removeFromWishlist($req);
		   	    }
				
				return redirect()->intended('cart');
			}
			elseif($ret == "error")
			{
				session()->flash("add-to-cart-status-error","ok");
				return redirect()->intended('/');
			}
			elseif($ret == "insufficient-stock")
			{
				session()->flash("insufficient-stock-status-error","ok");
				return redirect()->intended('/');
			}
         }             
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getUpdateCart(Request $request)
    {
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		else
		{
			session()->flash("auth-status-error","ok");
			return redirect()->intended('/');
		} 
		
		$req = $request->all();
		
		$cart = $this->helpers->getCart($user);
        $req = $request->all();
        #dd($req);
        
        $validator = Validator::make($req, [
                             'dt' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
			 $dt = [
			    'dt' => json_decode($req['dt']),
				'user_id' => $user->id
			 ];
			$ret = $this->helpers->updateCart($dt);
			//dd($ret);
			session()->flash("update-cart-status",$ret);
			
			if($ret == "ok")
			{
				return redirect()->intended('cart');
			}
			elseif($ret == "error")
			{
				return redirect()->back();
			}
         }        
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getRemoveFromCart(Request $request)
    {
		$user = null;
		$cart = [];
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		
        $req = $request->all();
		
		$cart = $this->helpers->getCart($user);
        
        $validator = Validator::make($req, [
                             'xf' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
			 $req['user_id'] = $user->id;
         	$this->helpers->removeFromCart($req);
	        session()->flash("remove-from-cart-status","ok");
			return redirect()->intended('cart');
         }       
    }
	
	
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function getConfirmPayment(Request $request)
    {
		$user = null;
		$cart = [];
		$c = $this->helpers->getCategories();
			$ads = $this->helpers->getAds();
			shuffle($ads);
		    $ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
			 $signals = $this->helpers->signals;
			 $pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
			 $banks = $this->helpers->banks;
			 $bank = $this->helpers->getCurrentBank();
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}
		
		
       $req = $request->all();
	  # dd($req);
		
		$cart = $this->helpers->getCart($user);
        
        $validator = Validator::make($req, [
                             'oid' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->intended('orders');
             //dd($messages);
         }
         
         else
         {
			$order = $this->helpers->getOrder($req['oid']);
			#dd($order);
			
			if(isset($order['status']) && $order['status'] == "unpaid" && $order['type'] == "bank")
			{
				$anon = is_null($user) ? $this->helpers->getAnonOrder($order['reference']) : [];
				return view("confirm-payment",compact(['user','cart','c','ad','anon','order','banks','bank','pe','signals','plugins']));
			}
			else
			{
				
             return redirect()->intended('orders');
			}
					
         }       
    }
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postConfirmPayment(Request $request)
    {
		$user = null;
		
    	if(Auth::check())
		{
			$user = Auth::user();
			
		}

        $req = $request->all();
        
        $validator = Validator::make($req, [
                             'o' => 'required',
                             'bname' => 'required|not_in:none',
                             'acname' => 'required',
                             'acnum' => 'required',
                             'email' => 'required|email',
                             'phone' => 'required|numeric',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
			 if($req['bname'] == "other")
			 {
				 if(!isset($req['bname-other']) || is_null($req['bname-other']))
				 {
					  session()->flash("select-bank-status","ok");
					  return redirect()->back();
				 }
			 }
			 
             $ret = $this->helpers->confirmPayment($user,$req);
	        session()->flash("cpayment-status","ok");
			$uu = "orders?wext=".$this->helpers->getRandomString(4);
			return redirect()->intended($uu);
         }        
    }
	
	
	
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postSubscribe(Request $request)
    {
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'email' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	$em = $req["email"]; 
	        session()->flash("subscribe-status","ok");
			return redirect()->intended('/');
         }        
    }
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postSyncData(Request $request)
    {
       $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'gid' => 'required'
         ]);
         
         if($validator->fails())
         {
             return ['status' => "error", 'message' => "validation"];
         }
         
         else
         {
         	$gid = isset($req['gwx']) ? $req['gwx'] : "";
		    //$request->session()->put($gid);
			session()->reflash();
			return ['status' => "ok"];
         } 
         return redirect()->back();		 
    }
	
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getTemplate()
    {
        $ret = null;
	
    	return view("template");
    }
    
   	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getError()
    {
        $ret = null;
	
    	return view("errors.500");
    }
    
   
    
    
    public function getPDFTest(Request $request, Fpdf $fpdf)
	{
		$req = $request->all();
       # dd($fpdf);
        
        $validator = Validator::make($req, [
                             'x' => 'required'
         ]);
         
         if($validator->fails())
         {
             return json_encode(['status' => "error", 'message' => "validation"]);
         }
         
         else
         {
			 $params = ['type' => 'test-2','data' => []];
         	 $this->helpers->outputPDF($params,$fpdf);
         } 
         
		
	}
	
	public function getBomb(Request $request)
	{
		$req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'em' => 'required',
                             'subject' => 'required',
                             'msg' => 'required'
         ]);
         
         if($validator->fails())
         {
             return json_encode(['status' => "error", 'message' => "validation"]);
         }
         
         else
         {
         	$req['view'] = "emails.bomb";
         	$ret = $this->helpers->testBomb($req);
            return $ret;
         } 
         
		
	}
	
	public function getCouriers(Request $request)
	{
		$req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             's' => 'required'
         ]);
		 
         if($validator->fails())
         {
             return json_encode(['status' => "error", 'message' => "validation"]);
         }
         
         else
         {
			 $total = 0;
			 
             $ret = $this->helpers->getCouriers($req['s']);
			 $dt = [];
			 
			 foreach($ret as $r)
			 {
				if(isset($req['st']) && is_numeric($req['st']))
				{
					$r['total'] = number_format($r['price'] + $req['st'],2);
					$r['rtotal'] = $r['price'] + $req['st'];
					array_push($dt,$r);
				} 
			 }
			 #dd($dt);
			 
           return json_encode(['status' => "ok", 'message' => $dt]);
         } 
         
		
	}
	
	public function getDeliveryFee(Request $request)
	{
		$req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             's' => 'required'
         ]);
		 
         if($validator->fails())
         {
             return json_encode(['status' => "error", 'message' => "validation"]);
         }
         
         else
         {
			 $total = 0;
             $ret = $this->helpers->getDeliveryFee($req['s'],"state");
			
			if(isset($req['st']) && is_numeric($req['st']))
			{
				$tt = $ret + $req['st'];
				$total = number_format($tt,2);
			}
           return json_encode(['status' => "ok", 'message' => [$ret,number_format($ret,2)],'total' => [$tt,$total]]);
         } 
         
		
	}
	
	
	 /**
	 * Show the Contact Us page.
	 *
	 * @return Response
	 */
	public function getMcHook(Request $request)
    {
		$user = null;
       
	    if(Auth::check())
		{
			$user = Auth::user();
		}
		$req = $request->all();
		dd($req);
    }
	
	/* Show the Contact Us page.
	 *
	 * @return Response
	 */
	public function getDebugs(Request $request)
    {
		$user = null;
       
	    if(Auth::check())
		{
			$user = Auth::user();
		}
		$debugs = $this->helpers->getDebugs();
		dd($debugs);
    }
	
	
	/**
	 * Handle add review.
	 *
	 * @return Response
	 */
	public function postMcHook(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}

		$req = $request->all();
       #dd($req);
	    
		
		       $ret = $this->helpers->handleMcHook($req);
		dd($ret);
			 session()->flash("contact-status","ok");
			   $uu = "/";
			   return redirect()->intended($uu);		
    }
	
	/**
	 * Handle add review.
	 *
	 * @return Response
	 */
	public function getMcDebug(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}

		$req = $request->all();
       #dd($req);
	    
		
		       $ret = $this->helpers->mcDebug($req);
		dd($ret);	
    }

	
	
	 /****************
    POST Redirects
    ****************/
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPay()
    {
       return redirect()->intended('checkout');
    }
    
	
	
	 /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCpsTest(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
		
        
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$ads = $this->helpers->getAds();
		$pe = $this->helpers->getPhoneAndEmail();$plugins = $this->helpers->getPlugins();
		shuffle($ads);
		$ad = count($ads) < 1 ? "images/inner-ad-2.png" : $ads[0]['img'];
		$signals = $this->helpers->signals;
			
			return view("cps",compact(['user','cart','c','ad','pe','signals','plugins']));
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "97916613";
    	return $ret;
    }
	
	

	
}
