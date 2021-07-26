<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 
use App\User;

class LoginController extends Controller {

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
	public function getRegister(Request $request)
    {
		 $user = null;
		$cart = [];
		if(Auth::check())
		{
			return redirect()->intended('dashboard');
		}
		$req = $request->all();
		$rdr = isset($req['rdr']) ? $req['rdr'] : "";
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
		#dd($info);
		return view("register",compact(['user','rdr','cart','c','signals','plugins']));	
    }
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	 
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getLogin(Request $request)
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			return redirect()->intended('dashboard');
		}
		
		$req = $request->all();
		$rdr = isset($req['rdr']) ? $req['rdr'] : "";
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
		#dd($info);
		return view("login",compact(['user','rdr','cart','c','signals','plugins']));	
    }

  
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postLogin(Request $request)
    {
        $req = $request->all();
        #dd($req);
        $rdr = isset($req['rdr']) ? $this->helpers->getRedirect($req['rdr']) : "dashboard";
		
        $validator = Validator::make($req, [
                             'pass' => 'required|min:6',
                             'id' => 'required',
		             'lhp' => 'required|not_in:none'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
	    if($req['lhp'] == "yes")
	    {
         	$remember = true; 
             
         	//authenticate this login
               if(Auth::attempt(['email' => $req['id'],'password' => $req['pass'],'status'=> "enabled"],$remember) || Auth::attempt(['phone' => $req['id'],'password' => $req['pass'],'status'=> "enabled"],$remember))
               {
            	//Login successful               
               $user = Auth::user();          
                #dd($user); 
				
             #  if($this->helpers->isAdmin($user)){return redirect()->intended('/');}
               #else{
				   #dd($rdr);
                  return redirect()->intended($rdr);
              # }
               }
			
			else
			{
				session()->flash("login-status-error","ok");
				return redirect()->back();
			}
	    }
            elseif($req['lhp'] == "no")
	    {
		    $isNew = !$this->helpers->isDuplicateUser(['email' => $req['id'], 'phone' => ""]);
			             
             #dd($isNew);            

			if($isNew)
			{
				$req['role'] = "user";    
				$req['email'] = $req['id'];    
                $req['status'] = "enabled";           
                $req['verified'] = "yes";           
            
				$user =  $this->helpers->createUser($req); 
			    Auth::login($user);
			    $req['user_id'] = $user->id;
			    //$shippingDetails =  $this->helpers->createShippingDetails($req); 
			    
				//after creating the user, send back to the registration view with a success message
                #$this->helpers->sendEmail($user->email,'Welcome To Disenado!',['name' => $user->fname, 'id' => $user->id],'emails.welcome','view');
                session()->flash("signup-status", "ok");
			     return redirect()->intended($rdr);
			}
			else
			{
              session()->flash("duplicate-user-status-error", "ok");
			  return redirect()->back();
			}
	    }
         }        
    }


    
    
	
    public function postRegister(Request $request)
    {
        $req = $request->all();
       #dd($req);   
		$rdr = isset($req['rdr']) ? $this->helpers->getRedirect($req['rdr']) : "dashboard";
		
        $validator = Validator::make($req, [
                             'pass' => 'required|min:6|confirmed',
                             'email' => 'required|email',                            
                             'fname' => 'required',
                             'lname' => 'required'
							 //'terms' => "required"
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             //dd($messages);
             
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else
         {
			 $isNew = !$this->helpers->isDuplicateUser(['email' => $req['email'], 'phone' => $req['phone']]);
			             
             #dd($isNew);            

			if($isNew)
			{
				$req['role'] = "user";    
                $req['status'] = "enabled";           
                $req['verified'] = "yes";           
            
				$user =  $this->helpers->createUser($req); 
			    Auth::login($user);
			    $req['user_id'] = $user->id;
			    //$shippingDetails =  $this->helpers->createShippingDetails($req); 
			    
				//after creating the user, send back to the registration view with a success message
                #$this->helpers->sendEmail($user->email,'Welcome To Disenado!',['name' => $user->fname, 'id' => $user->id],'emails.welcome','view');
                session()->flash("signup-status", "ok");
			     return redirect()->intended($rdr);
			}
			else
			{
              session()->flash("duplicate-user-status-error", "ok");
			  return redirect()->back();
			}
             
          }
    }

   
	public function getForgotUsername()
    {
		$layoutAd = $this->helpers->getAds();
		$plugins = $this->helpers->getPlugins();
         return view('forgot_username',compact(['layoutAd','plugins']));
    }
    
    /**
     * Send username to the given user.
     * @param  \Illuminate\Http\Request  $request
     */
    public function postForgotUsername(Request $request)
    {
    	$req = $request->all(); 
        $validator = Validator::make($req, [
                             'email' => 'required|email'
                  ]);
                  
        if($validator->fails())
         {
             $messages = $validator->messages();
             //dd($messages);
             
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else{
         	$ret = $req['email'];

                $user = User::where('email',$ret)->first();

                if(is_null($user))
                {
                        return redirect()->back()->withErrors("This user doesn't exist!","errors"); 
                }
                
                #$this->helpers->sendEmail($user->email,'Your Username',['username' => $user->username],'emails.username','view');                                                         
            session()->flash("username-status","success");           
            return redirect()->intended('forgot-username');

      }
                  
    }    
    
    
    public function getForgotPassword()
    {
    	$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
			return redirect()->intended('/');
		}
		$rdr = isset($req['rdr']) ? $req['rdr'] : "";
		$cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
         return view('forgot-password', compact(['rdr','user','cart','c','signals','plugins']));
    }
    
    /**
     * Send username to the given user.
     * @param  \Illuminate\Http\Request  $request
     */
    public function postForgotPassword(Request $request)
    {
    	$req = $request->all(); 
        $validator = Validator::make($req, [
                             'id' => 'required'
                  ]);
                  
        if($validator->fails())
         {
             $messages = $validator->messages();
             //dd($messages);
             
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else
		 {
         	$rex = $req['id'];

                $user = User::where('email',$rex)->first();

                if(is_null($user))
                {
					session()->flash("fp-status-error","success");   
                }
                else
				{
                  //get the reset code 
                  $code = $this->helpers->getPasswordResetCode($user);
              
			      $ret = $this->helpers->getCurrentSender();
		          $ret['data'] = ['code' => $code];
    		      $ret['subject'] = "Reset your password";	
		       
			      try
		          {
			       $ret['em'] = $rex;
		            $this->helpers->sendEmailSMTP($ret,"emails.fp");
			        $s = ['status' => "ok"];
		          }
		  
		          catch(Throwable $e)
		          {
			        #dd($e);
			        $s = ['status' => "error",'message' => "server error"];
		          }
                                                   
                  session()->flash("fp-status","ok");     
				}
				 return redirect()->back(); 
          }
                  
    }    
    
  
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPasswordReset(Request $request)
    {
       $user = null;
       $req = $request->all();
       $cart = $this->helpers->getCart($user);
		$c = $this->helpers->getCategories();
		$signals = $this->helpers->signals;
		$plugins = $this->helpers->getPlugins();
		
		if(Auth::check())
		{
			$user = Auth::user();
			$return = 'dashboard';
			return redirect()->intended($return);
		} 
       else
        {
			if(isset($req['code']))
            {
            	$x = $this->helpers->verifyPasswordResetCode($req['code']);
                if($x == null)   
                { 
			       session()->flash("reset-status","success");  
                	return redirect()->intended("login");
                }
               return view("reset",compact(['x','user','cart','c','signals','plugins']));
            }
            
            else
            {
            	return redirect()->intended("/");
            }
         	
          }
    }
    
    
    /**
     * Send username to the given user.
     * @param  \Illuminate\Http\Request  $request
     */
    public function postPasswordReset(Request $request)
    {
    	$req = $request->all(); 
        $validator = Validator::make($req, [
                             'pass' => 'required|min:6|confirmed',
                             'acsrf' => 'required'
                  ]);
                  
        if($validator->fails())
         {
             $messages = $validator->messages();
             //dd($messages);
             
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else{
         	$id = $req['acsrf'];
             $ret = $req['pass'];

            $user = User::where('id',$id)->first();
            $user->update(['password' => bcrypt($ret)]);
                
            session()->flash("reset-status","success");  
            $v = 'login';         
            return redirect()->intended($v);

      }
                  
    }    

   
    
    public function getLogout()
    {
        if(Auth::check())
        {  
           Auth::logout();       	
        }
        
        return redirect()->intended('/');
    }

}
