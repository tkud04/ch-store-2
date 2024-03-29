<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Carts;
use App\Manufacturers;
use App\Categories;
use App\CategoryData;
use App\Products;
use App\Discounts;
use App\ProductData;
use App\ProductImages;
use App\Reviews;
use App\Information;
use App\PaymentDetails;
use App\ShippingDetails;
use App\Ads;
use App\Banners;
use App\Orders;
use App\OrderItems;
use App\OrderHistory;
use App\Wishlists;
use App\Senders;
use App\Settings;
use App\Plugins;
use App\Couriers;
use App\Comparisons;
use App\Debugs;
use App\Suds;
use Vitalybaev\GoogleMerchant\Feed;
use Vitalybaev\GoogleMerchant\Product;
use Vitalybaev\GoogleMerchant\Product\Shipping;
use Vitalybaev\GoogleMerchant\Product\Availability\Availability;
use \Swift_Mailer;
use \Swift_SmtpTransport;
use \Cloudinary\Api;
use \Cloudinary\Api\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Codedge\Fpdf\Fpdf\Fpdf;


class Helper implements HelperContract
{

 public $signals = ['okays'=> ["login-status" => "Welcome back!",            
                     "signup-status" => "Welcome to your new account. Enjoy your shopping!",
                     "fp-status" => "A password reset link has been sent to your email address",
                     "reset-status" => "Password reset successful",
                     "profile-status" => "Profile updated!",
                     "address-status" => "Address updated!",
					 "cpayment-status" => "Your request has been received, you will be notified via email shortly if your payment has been cleared.",
                     "update-status" => "Account updated!",
                     "config-status" => "Config added/updated!",
                     "contact-status" => "Message sent! Our customer service representatives will get back to you shortly.",
                     "add-review-status" => "Thanks for your feedback! It will be visible after review by admins",
                     "add-to-cart-status" => "Added to cart!",
                     "update-cart-status" => "Cart updated!",
                     "remove-from-cart-status" => "Removed from cart!",
                     "subscribe-status" => "Subscribed!",
                     "pay-card-status" => "Payment successful! Your order is being processed.",
                     "pay-bank-status" => "Payment successful! Your order is being processed.",
                     "add-to-wishlist-status" => "Added to wishlist!",
                     "add-to-compare-status" => "Added to compare list!",
					 "remove-from-wishlist-status" => "Removed from wishlist!",
					 "remove-from-compare-status" => "Removed from compare list!",
					 "select-bank-status" => "Please select your bank",					 
					 "no-cart-status" => "Your cart is empty.",
					 "invalid-order-status" => "We couldn't find your order.",
					 
					 //ERRORS
					 "login-status-error" => "Wrong username or password, please try again.",
					 "signup-status-error" => "There was a problem creating your account, please try again.",
					 "fp-status-error" => "No account exists with that email.",
					 "reset-status-error" => "The code is invalid or has expired.",
					 "duplicate-user-status-error" => "An account with this email or phone number already exists.",
					 "profile-status-error" => "There was a problem updating your profile, please try again.",
					 "address-status-error" => "There was a problem updating address, please try again.",
					 "update-status-error" => "There was a problem updating the account, please try again.",
					 "contact-status-error" => "There was a problem sending your message, please try again.",
					 "add-review-status-error" => "There was a problem sending your review, please try again.",
					 "auth-status-error" => "You must be signed in to do that.",
					 "insufficient-stock-status-error" => "Stock not sufficient.",
					 "add-to-cart-status-error" => "There was a problem adding to cart!",
					 "update-cart-status-error" => "Stock not sufficient.",
					 "remove-from-cart-status-error" => "There was a problem removing this product from your cart, please try again.",
					 "subscribe-status-error" => "There was a problem subscribing, please try again.",
					 "pay-card-status-error" => "There was a problem making payment, please try again.",
					 "pay-bank-status-error" => "There was a problem making payment, please try again.",
					 "add-to-compare-status-error" => "There was a problem adding to compare list.",
					 "add-to-wishlist-status-error" => "There was a problem adding to wishlist.",
					 "remove-from-wishlist-status-error" => "There was a problem removing item from wishlist.",
					 "remove-from-compare-status-error" => "There was a problem removing item from compare list.",
					 "track-order-status-error" => "Invalid reference number, please try again.",
					 "no-cart-status-error" => "Your cart is empty.",
					 "invalid-order-status-error" => "We could not find your order.",
                     ]
                   ];


  public $countries = [
'afghanistan' => "Afghanistan",
'albania' => "Albania",
'algeria' => "Algeria",
'andorra' => "Andorra",
'angola' => "Angola",
'antigua-barbuda' => "Antigua and Barbuda",
'argentina' => "Argentina",
'armenia' => "Armenia",
'australia' => "Australia",
'austria' => "Austria",
'azerbaijan' => "Azerbaijan",
'bahamas' => "The Bahamas",
'bahrain' => "Bahrain",
'bangladesh' => "Bangladesh",
'barbados' => "Barbados",
'belarus' => "Belarus",
'belgium' => "Belgium",
'belize' => "Belize",
'benin' => "Benin",
'bhutan' => "Bhutan",
'bolivia' => "Bolivia",
'bosnia' => "Bosnia and Herzegovina",
'botswana' => "Botswana",
'brazil' => "Brazil",
'brunei' => "Brunei",
'bulgaria' => "Bulgaria",
'burkina-faso' => "Burkina Faso",
'burundi' => "Burundi",
'cambodia' => "Cambodia",
'cameroon' => "Cameroon",
'canada' => "Canada",
'cape-verde' => "Cape Verde",
'caf' => "Central African Republic",
'chad' => "Chad",
'chile' => "Chile",
'china' => "China",
'colombia' => "Colombia",
'comoros' => "Comoros",
'congo-1' => "Congo, Republic of the",
'congo-2' => "Congo, Democratic Republic of the",
'costa-rica' => "Costa Rica",
'cote-divoire' => "Cote DIvoire",
'croatia' => "Croatia",
'cuba' => "Cuba",
'cyprus' => "Cyprus",
'czech' => "Czech Republic",
'denmark' => "Denmark",
'djibouti' => "Djibouti",
'dominica' => "Dominica",
'dominica-2' => "Dominican Republic",
'timor' => "East Timor (Timor-Leste)",
'ecuador' => "Ecuador",
'egypt' => "Egypt",
'el-salvador' => "El Salvador",
'eq-guinea' => "Equatorial Guinea",
'eritrea' => "Eritrea",
'estonia' => "Estonia",
'ethiopia' => "Ethiopia",
'fiji' => "Fiji",
'finland' => "Finland",
'france' => "France",
'gabon' => "Gabon",
'gambia' => "The Gambia",
'georgia' => "Georgia",
'germany' => "Germany",
'ghana' => "Ghana",
'greece' => "Greece",
'grenada' => "Grenada",
'guatemala' => "Guatemala",
'guinea' => "Guinea",
'guinea-bissau' => "Guinea-Bissau",
'guyana' => "Guyana",
'haiti' => "Haiti",
'honduras' => "Honduras",
'hungary' => "Hungary",
'iceland' => "Iceland",
'india' => "India",
'indonesia' => "Indonesia",
'iran' => "Iran",
'iraq' => "Iraq",
'ireland' => "Ireland",
'israel' => "Israel",
'italy' => "Italy",
'jamaica' => "Jamaica",
'japan' => "Japan",
'jordan' => "Jordan",
'kazakhstan' => "Kazakhstan",
'kenya' => "Kenya",
'kiribati' => "Kiribati",
'nk' => "Korea, North",
'sk' => "Korea, South",
'kosovo' => "Kosovo",
'kuwait' => "Kuwait",
'kyrgyzstan' => "Kyrgyzstan",
'laos' => "Laos",
'latvia' => "Latvia",																																																																																							
'lebanon' => "Lebanon",
'lesotho' => "Lesotho",
'liberia' => "Liberia",
'libya' => "Libya",
'liechtenstein' => "Liechtenstein",
'lithuania' => "Lithuania",
'luxembourg' => "Luxembourg",
'macedonia' => "Macedonia",
'madagascar' => "Madagascar",
'malawi' => "Malawi",
'malaysia' => "Malaysia",
'maldives' => "Maldives",
'mali' => "Mali",
'malta' => "Malta",
'marshall' => "Marshall Islands",
'mauritania' => "Mauritania",
'mauritius' => "Mauritius",
'mexico' => "Mexico",
'micronesia' => "Micronesia, Federated States of",
'moldova' => "Moldova",
'monaco' => "Monaco",
'mongolia' => "Mongolia",
'montenegro' => "Montenegro",
'morocco' => "Morocco",
'mozambique' => "Mozambique",
'myanmar' => "Myanmar (Burma)",
'namibia' => "Namibia",
'nauru' => "Nauru",
'nepal' => "Nepal",
'netherlands' => "Netherlands",
'nz' => "New Zealand",
'nicaragua' => "Nicaragua",
'niger' => "Niger",
'nigeria' => "Nigeria",
'norway' => "Norway",
'oman' => "Oman",
'pakistan' => "Pakistan",
'palau' => "Palau",
'panama' => "Panama",
'png' => "Papua New Guinea",
'paraguay' => "Paraguay",
'peru' => "Peru",
'philippines' => "Philippines",
'poland' => "Poland",
'portugal' => "Portugal",
'qatar' => "Qatar",
'romania' => "Romania",
'russia' => "Russia",
'rwanda' => "Rwanda",
'st-kitts' => "Saint Kitts and Nevis",
'st-lucia' => "Saint Lucia",
'svg' => "Saint Vincent and the Grenadines",
'samoa' => "Samoa",
'san-marino' => "San Marino",
'sao-tome-principe' => "Sao Tome and Principe",
'saudi -arabia' => "Saudi Arabia",
'senegal' => "Senegal",
'serbia' => "Serbia",
'seychelles' => "Seychelles",
'sierra-leone' => "Sierra Leone",
'singapore' => "Singapore",
'slovakia' => "Slovakia",
'slovenia' => "Slovenia",
'solomon-island' => "Solomon Islands",
'somalia' => "Somalia",
'sa' => "South Africa",
'ss' => "South Sudan",
'spain' => "Spain",
'sri-lanka' => "Sri Lanka",
'sudan' => "Sudan",
'suriname' => "Suriname",
'swaziland' => "Swaziland",
'sweden' => "Sweden",
'switzerland' => "Switzerland",
'syria' => "Syria",
'taiwan' => "Taiwan",
'tajikistan' => "Tajikistan",
'tanzania' => "Tanzania",
'thailand' => "Thailand",
'togo' => "Togo",
'tonga' => "Tonga",
'trinidad-tobago' => "Trinidad and Tobago",
'tunisia' => "Tunisia",
'turkey' => "Turkey",
'turkmenistan' => "Turkmenistan",
'tuvalu' => "Tuvalu",
'uganda' => "Uganda",
'ukraine' => "Ukraine",
'uae' => "United Arab Emirates",
'uk' => "United Kingdom",
'usa' => "United States of America",
'uruguay' => "Uruguay",
'uzbekistan' => "Uzbekistan",
'vanuatu' => "Vanuatu",
'vatican' => "Vatican City",
'venezuela' => "Venezuela",
'vietnam' => "Vietnam",
'yemen' => "Yemen",
'zambia' => "Zambia",
'zimbabwe' => "Zimbabwe"
];

 public $statuses = [
												     'cancelled' => "Cancelled",
												     'canceled-reversal' => "Cancelled Reversal",
												     'chargeback' => "Chargeback",
												     'completed' => "Completed",
												     'denied' => "Denied",
												     'expired' => "Expired",
												     'failed' => "Failed",
												     'pending' => "Pending",
												     'processed' => "Processed",
												     'processing' => "Processing",
												     'refunded' => "Refunded",
												     'reversed' => "Reversed",
												     'shipped' => "Shipped",
												     'voided' => "Voided",
												   ];

public $sender = [
			   'ss' => "smtp.gmail.com",
			   'sp' => "587",
			   'se' => "uwantbrendacolson@gmail.com",
			   'sec' => "tls",
			   'sa' => "yes",
			   'su' => "uwantbrendacolson@gmail.com",
			   'spp' => "kudayisi",
			   'sn' => "MobileBuzz",
			   ];

public $information_types = [
											    'about' => "About Us",
											    'delivery' => "Delivery and Warranty",
											    'privacy' => "Privacy Policy",
											    'terms' => "Terms and Conditions",
											    'sitemap' => "Sitemap",
											  ];

  public $adminEmail = "wendy_scmhk@mail.com";
  public $suEmail = "dunphydavid83@gmail.com";
  public $su1 = "uwantbrendacolson@gmail.com";
  public $su2 = "philipschwarz345@gmail.com";
   
  public $sandboxPaypal = [
               'AS8O-aZcgCZbkCu4Mbci65Nu_b9lbHXMkdtrfUm6p5IlV6fFp9kVaDSw01O4AcjEGrdEyL-pHUrJ4nCQ',
               'EO5v5m1SVrydFiLIMngqyECS0sR8GRmUW1bfaCuBuW8d_LPy0T21mqHfW6zkzbx2b99xEElTyOV7YN94'
            ];
  public $livePaypal = [
    'AQshRPPKqh-naVCdRXDBvRqwSRYAMn7vPcuyf5t6JXk0hYL42_wG3kBUs-V1yGFhS_edDMRXVcRweMpz',
    'EBwXQ81N3dbzwHejdkpSVwXatyzt9UOcXfhJE2IzVC6Z3Gb1JDaOdU2cKyjiYusBbYZWIt3CuPTXa20D'
  ];
  
  public $faqs = [
  'product' => [
   'I have pre-ordered a PS5 - when will I receive it?' => "<p>We are receiving small quantities of PS5 consoles each month - unfortunately a lot less than we need to fulfil all orders taken. Once our pre-orders have been fulfilled we will look to offer more PS5 consoles to new customers.<p><p>If you have already ordered a PS5 from us already please bear with us as we are doing our best to get more stock to fulfil your order.</p><p>If you are waiting to order a PS5 please keep an eye on our social and website for updates</p>",
   'When will you receive more PS5 stock?' => "<p>We are receiving small quantities of PS5 consoles each month - unfortunately a lot less than we need to fulfil all orders taken.</p><p>We are fulfilling all pre-orders before we will release any new stock for new orders. If you are waiting to order a PS5 please keep an eye on our social and website for updates. As soon as pre-orders are fulfilled we will release more information on how new orders can be placed. Currently we do not have a timescale for when this may be.</p>",
   'Can I pre-order a product?' => "<p>If we are accepting pre orders we will give you the option to pre-order on the product page. If it does not give this option this means that we are not accepting pre orders. You may use the notify button to be informed when the product comes into stock.</p>",
   'If a product says coming soon when is it due?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   'Do you install Appliances and TVs?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   'When will you receive more PS5 stock?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   'How does the xbox series x/s ballot work?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   ],
   'ordering' => [
     'When will my order be delivered?' => "<p>As we deliver from different warehouses and offer multiple options on delivery please see the basket page before ordering for an idea of when your order will arrive. You have the option to select a day with most orders or an estimate will be given. We also send tracking details for the majority orders once they have shipped.</p>",
     'How can I cancel or amend my order?' => "<p>If you change your mind and would like to cancel an existing order then in most cases you can contact support via email or by clicking the green button at the bottom right of your screen.</p>",
     'I have been informed there is a problem with my order, what can I do?' => "<p>In the unlikely event that there’s a problem with your order, you’ll receive an email with the next steps to follow. We aim to rectify any issues as soon as possible and will keep you informed of any updates.</p>",
     'Can I place an order over the phone?' => "<p>Unfortunately we are unable to take orders over the telephone however, we are happy to help with any general or technical enquiries you may have before placing your order.</p>",
     'What time do you process orders until?' => "<p>Orders are processed and reviewed throughout the day and up to midnight. Depending on your chosen delivery date through the checkout process we will dispatch / process accordingly and if there any problems we will be in touch as soon as possible.</p>",
   ],
   'billing' => [
     'Which payment methods do you accept?' => "<p>We offer a number of payment options including MasterCard, Visa,  Maestro and PayPal. If your order is over £999, you may also be eligible for finance options.</p><p>Please see our checkout for the options that are applicable for your order as this can vary depending on the products in your basket.</p>",
     'What happens if my payment fails?' => "<p>If your payment fails, and payment is attempted multiple times, we will only receive one payment. Any failed attempts will clear from your account in 48 hours.</p>",
     'How long do refunds take?' => "<p>Please allow up to 5 working days for your payment to be refunded (excludes weekends and bank holidays).</p>",
     'Is there a charge for using certain cards or PayPal?' => "<p>There are no charges for using UK debit/credit cards or Paypal. However, corporate cards have a surcharge of 1%. In order to bring you the lowest prices, our profit margins are very low.</p><p>Due to this, we are unable to absorb the surcharges incurred when using a corporate card.</p>",
     'When do you take payment for the order?' => "<p>We take payment immediately once you have placed your order and your payment details have been authorised.</p>",
   ],
   'delivery' => [
     'I did not receive a tracking number - how do I get one?' => "<p>We ship from multiple locations using various delivery companies - some companies unfortunately do not provide us with a tracking number.</p><p>If a tracking number is available you will see it in your account or it will be emailed to you after dispatch.</p>",
     'What do I do if there are items missing from my delivery?' => "<p>In the unlikely event that there’s items missing from your delivery contact us within 48 hours.</p>",
     'Can I change my delivery address?' => "<p>We are sorry but for security reasons we cannot change the delivery address once your order has been dispatched so please make sure the delivery and billing address are correct before placing your order.</p>",
     'Can I collect my order?' => "<p>Due to COVID-19 we will no longer be offering collection from our warehouse. We have also made the difficult decision to close our showroom permanently.</p><p>Please also note that due to COVID-19 we are not currently offering the DPD Pickup service - once it is safe to do so this service will be available at checkout.</p>",
     'Do you charge for delivery to Non-UK Mainland/ROI?' => "<p>The charge for delivery to Non-UK Mainland/Northern Ireland/Ireland/North Scotland/Isle of Man is £14.95. For more information please see the delivery options and prices during the checkout process.</p>",
   ],
   'returns' => [
     'My item arrived damaged - what do I do?' => "<p>If your item arrives damaged please report this to us within 7 days of receipt along with images clearly showing the damage. This is because we only have a short window to put a claim in with our couriers. Over that time the claim is automatically rejected.</p>",
     'How do I track the progress of my return?' => "<p>You can see the status of your return in the my account section of our website. If you require further details please use the following form to contact our support team.</p>",
     'How long does the returns process take?' => "<p>Please allow up to 5 working days for testing, once tested then we will process either a repair, refund or replacement. Repair can take 30 working days with manufacturer.</p><p>PLEASE NOTE: Due to COVID 19 this process may be taking longer than usual so please bear with us.</p>",
     'What if something happens to my TV/Monitor in transit to you?' => "<p>Please provide images when setting up your return - we need images for every TV and monitor return with screens turned on.</p><p>This proves the state of the product before it was dispatched to us and will protect you and us should the unforeseeable happen during transit.</p>",
     'How long will it take for a refund to be in my account?' => "<p>Please allow up to 5 working days for your payment to be refunded (excludes weekends and bank holidays).</p>",
   ],
   'other' => [
     'Do you offer a price match service?' => "<p>We have a dedicated team of experts who check pricing against our competitors on a daily basis. However, if you do find any of our products cheaper elsewhere we will do our best to price match it.</p><p>We promise to try our best to match all prices in the UK including cashback, discount and offer codes. View more information and make your request here.</p>",
     'How do I stop receiving marketing emails?' => "<p>We add an unsubscribe link to every marketing email we send out which you can use to remove yourself from our mailing list.</p>",
     'What do I do if I am having an issue with the website?' => "<p>If you have any issues using our website or would simply like to let us know how you think it could be improved please feel free to get in touch with our support team.</p>",
     'How do I make a complaint?' => "<p>We really hope that you are happy with your purchase and the service you have received from us. However if you would like to make a formal complaint please send us an email to <a href='javascript:void(0)'>sales@mobilebuzzonline.co.uk</a></p>",
     'Do you work with streamers & influencers?' => "<p>If you are a top or up and coming influencer and you are interested in working with MobileBuzz please feel free to get in touch with our team.</p>",
   ],
 ];

     #{'msg':msg,'em':em,'subject':subject,'link':link,'sn':senderName,'se':senderEmail,'ss':SMTPServer,'sp':SMTPPort,'su':SMTPUser,'spp':SMTPPass,'sa':SMTPAuth};
           function sendEmailSMTP($data,$view,$type="view")
           {
           	    // Setup a new SmtpTransport instance for new SMTP
                $transport = "";
if($data['sec'] != "none") $transport = new Swift_SmtpTransport($data['ss'], $data['sp'], $data['sec']);

else $transport = new Swift_SmtpTransport($data['ss'], $data['sp']);

   if($data['sa'] != "no"){
                  $transport->setUsername($data['su']);
                  $transport->setPassword($data['spp']);
     }
// Assign a new SmtpTransport to SwiftMailer
$smtp = new Swift_Mailer($transport);

// Assign it to the Laravel Mailer
Mail::setSwiftMailer($smtp);

$se = $data['se'];
$sn = $data['sn'];
$to = $data['em'];
$from = isset($data['from']) ? $data['from'] : "";
$subject = $data['subject'];
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($from,$to,$subject,$se,$sn){
                           $message->from($se,$sn);
                           $message->to($to);
                          if($from != "") $message->setReplyTo($from);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
						  $message->getSwiftMessage()
						  ->getHeaders()
						  ->addTextHeader('x-mailgun-native-send', 'true');
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject,$se,$sn){
                            $message->from($se,$sn);
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }

           function bomb($data) 
           {
             $url = $data['url'];
               
			       $client = new Client([
                 // Base URI is used with relative requests
                 'base_uri' => 'http://httpbin.org',
                 // You can set any number of default request options.
                 //'timeout'  => 2.0,
				 'headers' => isset($data['headers']) && count($data['headers']) > 0 ? $data['headers'] : []
                 ]);
                  
				 
				 $dt = [
				    
				 ];
				 
				 if(isset($data['auth']))
				 {
					 $dt['auth'] = $data['auth'];
				 }
				 if(isset($data['data']))
				 {
					if(isset($data['type']) && $data['type'] == "raw")
					{
					  $dt['body'] = $data['data'];
					}
					else
					{
					  $dt['multipart'] = [];
					  foreach($data['data'] as $k => $v)
				      {
					    $temp = [
					      'name' => $k,
						  'contents' => $v
					     ];
						 
					     array_push($dt['multipart'],$temp);
				      }
					}
				   
				 }
				 
				 try
				 {
					$res = $client->request(strtoupper($data['method']),$url,$dt);
					$ret = $res->getBody()->getContents(); 
			       //dd($ret);

				 }
				 catch(RequestException $e)
				 {
					dd($e);
					# $mm = (is_null($e->getResponse())) ? null: Psr7\str($e->getResponse());
					 $mm = (is_null($e->getResponse())) ? null: $e->getResponse();
					 $ret = json_encode(["status" => "error","message" => $mm]);
				 }
			     $rett = json_decode($ret);
           return $ret; 
           }
		   
		   function text($data) 
           {
           	//form query string
              // $qs = "sn=".$data['sn']."&sa=".$data['sa']."&subject=".$data['subject'];

               $lead = $data['to'];
			   
			   if($lead == null || $lead == "")
			   {
				    $ret = json_encode(["status" => "error","message" => "Invalid number"]);
			   }
			   else
			    { 
                  
			       $url = "https://smartsmssolutions.com/api/?";
			       $url .= "message=".urlencode($data['msg'])."&to=".$data['to'];
			       $url .= "&sender=Etuk+NG&type=0&routing=3&token=".env('SMARTSMS_API_X_KEY', '');
			      #dd($url);
				  
                  $dt = [
				       'headers' => [
					     'Content-Type' => "text/html"
					   ],
                       'method' => "get",
                       'url' => $url
                  ];
				
				 $ret = $this->bomb($dt);
				 #dd($ret);
				 $smsData = explode("||",$ret);
				 if(count($smsData) == 2)
				 {
					 $status = $smsData[0];
					 $dt = $smsData[1];
					 
					 if($status == "1000")
					 {
						$rett = json_decode($dt);
			            if($rett->code == "1000")
			            {
					      $ret = json_encode(["status" => "ok","message" => "Message sent!"]); 			
			             }
				         else
			             {
			         	   $ret = json_encode(["status" => "error","message" => "Error sending message."]); 
			             } 
					 }
					 else
					 {
						 $ret = json_encode(["status" => "error","message" => "Error sending message."]); 
					 }
				 }
				 else
				 {
					$ret = json_encode(["status" => "error","message" => "Malformed response from SMS API"]); 
				 }
			     
			    }
				
              return $ret; 
           }
		   
		   function isConfirmed($x)
		   {
			   return (isset($x) && $x != null);
		   }
		   
           function createUser($data)
           {
			   $avatar = isset($data['avatar']) ? $data['avatar'] : "";
			   $avatarType = isset($data['avatar_type']) ? $data['avatar_type'] : "cloudinary";
			   $pass = (isset($data['pass']) && $data['pass'] != "") ? bcrypt($data['pass']) : "";
			   
           	   $ret = User::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'], 
                                                      'email' => $data['email'], 
                                                      'phone' => "", 
                                                      'role' => $data['role'], 
                                                      'mode' => "", 
                                                      'mode_type' => "", 
                                                      'avatar' => $avatar, 
                                                      'avatar_type' => "", 
                                                      'currency' => "gbp", 
                                                      'host_upgraded' => "", 
                                                      'status' => $data['status'], 
                                                      'verified' => $data['verified'], 
                                                      'password' => $pass, 
                                                      ]);
                                                      
                return $ret;
           }
		   
		   	function getSetting($id)
	{
		$temp = [];
		$s = Settings::where('id',$id)
		             ->orWhere('name',$id)->first();
 
              if($s != null)
               {
				      $temp['name'] = $s->name; 
                       $temp['value'] = $s->value;                  
                       $temp['id'] = $s->id; 
                       $temp['date'] = $s->created_at->format("jS F, Y"); 
                       $temp['updated'] = $s->updated_at->format("jS F, Y"); 
                   
               }      
       return $temp;            	   
   }
   
		   
		   
		   function getCart($user)
           {
           	$ret = [];
			$uu = "";		
     
              if($user != null)
			  {
			    $cart = Carts::where('user_id',$user->id)->get();
			    #dd($uu);
                if($cart != null)
                 {
               	   foreach($cart as $c) 
                    {
                    	$temp = [];
               	        $temp['id'] = $c->id; 
               	        $temp['user_id'] = $c->user_id; 
                        $temp['product'] = $this->getProduct($c->product_id); 
                        $temp['qty'] = $c->qty; 
						
						if(count($temp['product']) > 0)
						{
							array_push($ret, $temp);
						}
                         
                    }
                 }
			  }				 
                return $ret;
           }
           function clearCart($user)
           {
			  if(is_null($user))
			  {
				  $uu = isset($_COOKIE['gid']) ? $_COOKIE['gid'] : "";;
			  }
              else
			  {
				$uu = $user->id;  
			  }
			   
           	$ret = [];
               $cart = Carts::where('user_id',$uu)->get();
 
              if($cart != null)
               {
               	foreach($cart as $c) 
                    {
                    	$c->delete(); 
                   }
               }                                 
           }
		   
		   
		   function getUser($id)
           {
           	$ret = [];
               $u = User::where('email',$id)
			            ->orWhere('id',$id)->first();
 
              if($u != null)
               {
                   	$temp['fname'] = $u->fname; 
                       $temp['lname'] = $u->lname; 
                       //$temp['wallet'] = $this->getWallet($u);
                       $temp['phone'] = $u->phone; 
                       $temp['email'] = $u->email; 
                       $temp['role'] = $u->role; 
                       $temp['status'] = $u->status; 
                       $temp['verified'] = $u->verified; 
                       $temp['id'] = $u->id; 
                       $temp['date'] = $u->created_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
		   
		   function getShippingDetails($user)
           {
           	$ret = [];
              if($user == null)
			  {
				   $sds = ShippingDetails::where('id',">","0")->get();
				   
				   $sds = $sds->sortByDesc('created_at');				   
 
                  if($sds != null)
                   {
				      foreach($sds as $a)
				      {
					     $aa = $this->getShippingDetail($a->id);
					     array_push($ret,$aa); 
				      }
                   }  
			  }
			  else
			  {
				 $sds = ShippingDetails::where('user_id',$user->id)->get();
								   
				  $sds = $sds->sortByDesc('created_at');				   
 
                  if($sds != null)
                   {
				      foreach($sds as $a)
				      {
					     $aa = $this->getShippingDetail($a->id);
					     array_push($ret,$aa); 
				      }
                   }  
			  }
			                           
                                                      
                return $ret;
           }


    function getShippingDetail($id,$optionalParams=[])
           {
			   $u = isset($optionalParams['user']) ? $optionalParams['user'] : false;
           	  
			  $ret = [];
              $sd = ShippingDetails::where('id',$id)->first();
 
              if($sd != null)
               {
				  $temp = [];
				  $temp['id'] = $sd->id;
				  $temp['user_id'] = $sd->user_id;
				  if($u) $temp['u'] = $this->getUser($sd->user_id);
				  $temp['fname'] = $sd->fname;
				  $temp['lname'] = $sd->lname;
				  $temp['company'] = $sd->company;
				  $temp['address_1'] = $sd->address_1;
				  $temp['address_2'] = $sd->address_2;
				  $temp['city'] = $sd->city;
				  $temp['region'] = $sd->region;
				  $temp['zip'] = $sd->zip;
				  $temp['country'] = $sd->country;
				  $temp['date'] = $sd->created_at->format("jS F, Y h:i A");
				  $ret = $temp;
               }                               
                return $ret;
           }
		   
		   
		   function updateProfile($user, $data)
           {  
              $ret = 'error'; 
         
              if(isset($data['xf']))
               {
               	$u = User::where('id', $data['xf'])->first();
                   
                        if($u != null && $user == $u)
                        {
							$ret = [];
							if(isset($data['fname'])) $ret['fname'] =  $data['fname'];
							if(isset($data['lname'])) $ret['lname'] =  $data['lname'];
							if(isset($data['email'])) $ret['email'] =  $data['email'];
							if(isset($data['phone'])) $ret['phone'] =  $data['phone'];
							if(isset($data['status'])) $ret['status'] =  $data['status'];
							if(isset($data['password'])) $ret['password'] =  bcrypt($data['password']);
							
                        	$u->update($ret);
										   
							#$this->updateShippingDetails($user,$data);
                                           
                                           $ret = "ok";
                        }                                    
               }                                 
                  return $ret;                               
           }

           function updateShippingDetails($user, $data)
           {		

				$ss = ShippingDetails::where('user_id', $user->id)->first();
				
				if(!is_null($ss))
				{
					$ret = [];
					if($this->isConfirmed($data['fname'])) $ret['fname'] =  $data['fname'];
					if($this->isConfirmed($data['lname'])) $ret['lname'] =  $data['lname'];
					if($this->isConfirmed($data['address_1'])) $ret['address_1'] =  $data['address_1'];
					if($this->isConfirmed($data['address_2'])) $ret['address_2'] =  $data['address_2'];
					if($this->isConfirmed($data['city'])) $ret['city'] =  $data['city'];
					if($this->isConfirmed($data['region'])) $ret['region'] =  $data['region'];
					if($this->isConfirmed($data['zip'])) $ret['zip'] =  $data['zip'];
					if($this->isConfirmed($data['country'])) $ret['country'] =  $data['country'];
					
					$ss->update($ret);
				}
					
           }		   
		   
		   function getProductsByCategory($c)
           {
           	$ret = [];
			  $cc = Categories::where('category',$c)
			                  ->orWhere('id',$c)->first();
              
			  if($cc != null)
			  {
				  #dd($cc);
				  $ids = [$cc->id];
				  $children = Categories::where('parent_id',$cc->id)->get();
				  
				  if($children != null)
				  {
					  foreach($children as $child)
					  {
						  array_push($ids,$child->id);
					  }
				  }
			    $pds = ProductData::whereIn('category',$ids)->get();
                $pds = $pds->sortByDesc('created_at');
			  
			    #dd($pds);
                if($pds != null)
                 {
				    foreach($pds as $p)
				    {
					    $pp = $this->getProduct($p->product_id);
					    if(count($pp) > 0)  array_push($ret,$pp);
				    }
                 }
			  }				 
                                                      
                return $ret;
           }

		   function getProductsByManufacturer($m)
           {
           	$ret = [];
			  $mm = Manufacturers::where('id',$m)->first();
              
			  if($mm != null)
			  {
			    $pds = ProductData::where('manufacturer',$mm->id)->get();
                $pds = $pds->sortByDesc('created_at');
			  
			    #dd($pds);
                if($pds != null)
                 {
				    foreach($pds as $p)
				    {
					    $pp = $this->getProduct($p->product_id);
					    if(count($pp) > 0)  array_push($ret,$pp);
				    }
                 }
			  }				 
                                                      
                return $ret;
           }
		   
		   function getProducts()
           {
           	$ret = [];
              $products = Products::where('id','>',"0")
                                            ->where('status',"enabled")->get();
              $products = $products->sortByDesc('created_at');
			  
              if($products != null)
               {
				  foreach($products as $p)
				  {
					  $pp = $this->getProduct($p->id);
					 if(count($pp) > 0)  array_push($ret,$pp);
				  }
               }                         
                                                      
                return $ret;
           }
		   
		   function getProduct($id,$imgId=false)
           {
			  if($imgId == "debug") dd($id);
           	$ret = [];
              $product = Products::where('id',$id)                           
			                 ->orWhere('model',$id)->first();
       
              if($product != null && $product->status == "enabled")
               {
				   #dd($product);
				  $temp = [];
				  $temp['id'] = $product->id;
				  $temp['name'] = $product->name;
				  $temp['sku'] = $product->sku;
				  $temp['model'] = $product->model;
				  $temp['upc'] = $product->upc;
				  $temp['ean'] = $product->ean;
				  $temp['jan'] = $product->jan;
				  $temp['isbn'] = $product->isbn;
				  $temp['mpn'] = $product->mpn;
				  $temp['qty'] = $product->qty;
				  $temp['seo_keywords'] = $product->seo_keywords;
				  $temp['status'] = $product->status;
				  $temp['data'] = $this->getProductData($product->id);
				  #$temp['discounts'] = $this->getDiscounts($product->sku);
				  $imgs = $this->getImages($product->id);
				  if($imgId) $temp['imgs'] = $imgs;
				  $temp['imggs'] = $this->getCloudinaryImages($imgs);
				  $temp['date'] = $product->created_at->format("jS F,Y h:i A"); 
				  $ret = $temp;
               }                         
                                                      
                return $ret;
           }

		   function getProductData($xf)
           {
           	$ret = [];
              $pd = ProductData::where('product_id',$xf)->first();
 
              if($pd != null)
               {
				  $temp = [];
				  $temp['id'] = $pd->id;
				  $temp['product_id'] = $pd->product_id;
				  $temp['amount'] = $pd->amount;
				  $temp['description'] = $pd->description;
				  $temp['meta_title'] = $pd->meta_title;
				  $temp['meta_description'] = $pd->meta_description;
				  $temp['meta_keywords'] = $pd->meta_keywords;
				  $temp['location'] = $pd->location;
				  $temp['min_qty'] = $pd->min_qty;
				  $temp['tax_class'] = $pd->tax_class;
				  $temp['shipping'] = $pd->shipping;
				  $temp['date_available'] = $pd->date_available;
				  $temp['da'] = Carbon::parse($pd['date_available']);
				  $temp['length'] = $pd->length;
				  $temp['width'] = $pd->width;
				  $temp['height'] = $pd->height;
				  $temp['category'] = $this->getCategory($pd->category);
				  $temp['manufacturer'] = $this->getManufacturer($pd->manufacturer);
				  $ret = $temp;
               }                         
                                                      
                return $ret;
           }
		   
		   function getProductImages($xf)
           {
           	$ret = [];
              $pis = ProductImages::where('product_id',$xf)->get();
 
            
              if($pis != null)
               {
				  foreach($pis as $pi)
				  {
				    $temp = [];
				    $temp['id'] = $pi->id;
				    $temp['product_id'] = $pi->product_id;
				    $temp['cover'] = $pi->cover;
				    $temp['url'] = $pi->url;
				    array_push($ret,$temp);
				  }
               }                         
                                                      
                return $ret;
           }

		   function getDiscounts($id,$type="product")
           {
           	$ret = [];
             if($type == "product")
			 {
				$discounts = Discounts::where('sku',$id)
			                 ->orWhere('type',"general")
							 ->where('status',"enabled")->get(); 
			 }
			 elseif($type == "user")
			 {
				 $discounts = Discounts::where('sku',$id)
			                 ->where('type',"user")
							 ->where('status',"enabled")->get();
             }
			 
              if($discounts != null)
               {
				  foreach($discounts as $d)
				  {
					$temp = [];
				    $temp['id'] = $d->id;
				    $temp['sku'] = $d->sku;
				    $temp['discount_type'] = $d->discount_type;
				    $temp['discount'] = $d->discount;
				    $temp['type'] = $d->type;
				    $temp['status'] = $d->status;
				    array_push($ret,$temp);  
				  }
               }                         
                                                      
                return $ret;
           }
		   
		   function getDiscountPrices($amount,$discounts)
		   {
			   $newAmount = 0;
						$dsc = [];
                     
					 if(count($discounts) > 0)
					 { 
						 foreach($discounts as $d)
						 {
							 $temp = 0;
							 $val = $d['discount'];
							 
							 switch($d['discount_type'])
							 {
								 case "percentage":
								   $temp = floor(($val / 100) * $amount);
								 break;
								 
								 case "flat":
								   $temp = $val;
								 break;
							 }
							 
							 array_push($dsc,$temp);
						 }
					 }
				   return $dsc;
		   }
		   
		   		   function isCoverImage($img)
		   {
			   return $img['cover'] == "yes";
		   }
		   
		   function getImage($pi)
           {
       	         $temp = [];
				 $temp['id'] = $pi->id;
				 $temp['sku'] = $pi->sku;
			     $temp['cover'] = $pi->cover;
				 $temp['url'] = $pi->url;
				 
                return $temp;
           }
		   
		   function getImages($xf)
		   {
			   $ret = [];
			   
			   $coverImage = ProductImages::where('product_id',$xf)
			                              ->where('cover',"yes")->first();
										  
               $otherImages = ProductImages::where('product_id',$xf)
			                              ->where('cover',"!=","yes")->get();
			  
               if($coverImage != null)
			   {
				   $temp = $this->getImage($coverImage);
				   array_push($ret,$temp);
			   }

               if($otherImages != null)
			   {
				   foreach($otherImages as $oi)
				   {
					   $temp = $this->getImage($oi);
				       array_push($ret,$temp);
				   }
			   }
			   
			   return $ret;
		   }

		  
		   function setCoverImage($id)
           {
              $pi = ProductImages::where('id',$id)->first();
            
              if($pi != null)
               {
				   $formerPi = ProductImages::where('sku',$pi->sku)
			              ->where('cover',"yes")->first();
                   
				   if($formerPi != null)
				   {
					   $formerPi->update(['cover' => "no"]);
				   }
				   
				  $pi->update(['cover' => "yes"]);
               }                         
                                                      
           }
		   
		   function getCloudinaryImage($dt)
		   {
			   $ret = [];
                  //dd($dt);       
               if(is_null($dt)) { $ret = asset("images/avatar-2.png"); }
               
			   else
			   {
				    $ret = "https://res.cloudinary.com/dkrf5ih0l/image/upload/v1585236664/".$dt;
                }
				
				return $ret;
		   }
		   
		   function getCloudinaryImages($dt)
		   {
			   $ret = [];
                 # dd($dt);       
               if(count($dt) < 1) { $ret = [asset("images/avatar-2.png")]; }
               
			   else
			   {
                   $ird = isset($dt[0]['url']) ? $dt[0]['url'] : $dt[0];
				   if($ird == "none")
					{
					   $imgg = asset("images/avatar-2.png");
					}
				   else
					{
                       for($x = 0; $x < count($dt); $x++)
						 {
							 $ird = isset($dt[$x]['url']) ? $dt[$x]['url'] : $dt[$x];
							 if($ird == "" || $ird == null)
							 {
								 $imgg = asset("images/avatar-2.png");
							 }
							 else
							 {
								 $imgg = "https://res.cloudinary.com/dkrf5ih0l/image/upload/v1585236664/".$ird;
							 }
                            
                            array_push($ret,$imgg); 
                         }
					}
                }
				
				return $ret;
		   }
		   
		   function getTopProducts()
           {
           	$ret = [];
              $pdss = Products::where('id','>',"0")->get();
              $pdss = $pdss->sortByDesc('created_at');	
			  $pds = $pdss->chunk(24);
			  #dd($pds);
              if($pds != null)
               {
				  foreach($pds[0] as $p)
				  {
					  #dd($p);
					  $pp = $this->getProduct($p->id);
					 if(count($pp) > 0)  array_push($ret,$pp);
				  }
               }                         
                     #dd($ret);             
                return $ret;
           }

		   function getBestSellers()
           {
           	$ret = [];
              $pdss = Products::where('id','>',"0")->get();
              $pdss = $pdss->sortByDesc('created_at');	
			  $pds = $pdss->chunk(24);
			  #dd($pds);
              if($pds != null)
               {
				  foreach($pds[0] as $p)
				  {
					  #dd($p);
					  $pp = $this->getProduct($p->id);
					 if(count($pp) > 0)  array_push($ret,$pp);
				  }
               }                         
                     #dd($ret);             
                return $ret;
           }
		   
		   
		   function getCategories($optionalParams=[])
           {
           	$ret = [];
           	$categories = Categories::where('id','>','0')->get();
              // dd($cart);
			  
              if($categories != null)
               {           	
               	foreach($categories as $c) 
                    {
						$temp = $this->getCategory($c->id,$optionalParams);
						array_push($ret,$temp);
                    }
               }                                 
                                                      
                return $ret;
           }
		   
		   function getCategoryChildren($xf)
           {
           	$ret = [];
           	$categories = Categories::where('parent_id',$xf)->get();
              // dd($cart);
			  
              if($categories != null)
               {           	
               	foreach($categories as $c) 
                    {
						$temp = $this->getCategory($c->id);
						array_push($ret,$temp);
                    }
               }                                 
                                                      
                return $ret;
           }
           
           function getCategoryParent($c)
           {
           	$ret = [];
           	$p = Categories::where('id',(int)$c->parent_id)->first();
              // dd($cart);
			  
              if($p != null)
               {       
                   $temp = [];
						$temp['id'] = $p->id;
						$temp['name'] = $p->name;
						$temp['category'] = $p->category;
						$temp['data'] = $this->getCategoryData($p->id);
						$temp['image'] = $this->getCloudinaryImages([$p->image]);    	             	
					$ret = $temp;
               }                                 
                                                      
                return $ret;
           }
		   
		   function getCategory($id,$optionalParams=[])
           {
           	$ret = [];
               if(isset($optionalParams["category"]) && $optionalParams['category'])
               {
           	$c = Categories::where('category',$id)->first();
			   }
			  else
			   {
           	$c = Categories::where('id',$id)->first();
			   }
               #dd($optionalParams);
			  $children = isset($optionalParams["children"]) && $optionalParams['children'];
              if($c != null)
               {           	
						$temp = [];
						$temp['id'] = $c->id;
						$temp['name'] = $c->name;
						$temp['category'] = $c->category;
		                                $temp['gpc'] = $c->gpc;
						$temp['data'] = $this->getCategoryData($c->id);
						$temp['image'] = $this->getCloudinaryImages([$c->image]);
						$temp['parent_id'] = $c->parent_id;
						$temp['product_count'] = ProductData::where('category',$c->id)->count();
						$temp['parent'] = $this->getCategoryParent($c);
						if($children) $temp['children'] = $this->getCategoryChildren($c->id);
						$temp['status'] = $c->status;
						$temp['date'] = $c->created_at->format("jS F, Y"); 
						$ret = $temp;
               }                                 
                                                      
                return $ret;
           }
		   function getCategoryData($id)
           {
           	$ret = [];
           	$c = CategoryData::where('category_id',$id)->first();
              // dd($cart);
			  
              if($c != null)
               {           	
						$temp = [];
						$temp['id'] = $c->id;
						$temp['category_id'] = $c->category_id;
						$temp['description'] = $c->description;
						$temp['meta_title'] = $c->meta_title;
						$temp['meta_description'] = $c->meta_description;
						$temp['meta_keywords'] = $c->meta_keywords; 
						$temp['seo_keywords'] = $c->seo_keywords; 
						$ret = $temp;
               }                                 
                                                      
                return $ret;
           }
		   
		   
		   function getManufacturers()
           {
           	$ret = [];
           	$manufacturers = Manufacturers::where('id','>','0')->get();
              // dd($cart);
			  
              if($manufacturers != null)
               {           	
               	foreach($manufacturers as $m) 
                    {
						$temp = $this->getManufacturer($m->id);
						array_push($ret,$temp);
                    }
               }                                 
                                                      
                return $ret;
           }
		   
		   function getManufacturer($id)
           {
           	$ret = [];
           	$m = Manufacturers::where('id',$id)->first();
              // dd($cart);
			  
              if($m != null)
               {           	
						$temp = [];
						$temp['id'] = $m->id;
						$temp['name'] = $m->name;
						$temp['image'] = $this->getCloudinaryImages([$m->image]);
						$temp['product_count'] = ProductData::where('manufacturer',$m->id)->count();
						$temp['date'] = $m->created_at->format("jS F, Y"); 
						$ret = $temp;
               }                                 
                                                      
                return $ret;
           }
		   
		   function getInformation()
           {
           	$ret = [];
           	$ii = Information::where('id','>','0')->get();
              // dd($cart);
			  
              if($ii != null)
               {           	
               	foreach($ii as $i) 
                    {
						$temp = $this->getInformationSingle($i->id);
						array_push($ret,$temp);
                    }
               }                                 
                                                      
                return $ret;
           }
		   
		   function getInformationSingle($id)
           {
           	$ret = [];
           	$i = Information::where('id',$id)
			                ->orWhere('type',$id)->first();
              // dd($cart);
			  
              if($i != null)
               {           	
						$temp = [];
						$temp['id'] = $i->id;
						$temp['title'] = $i->title;
						$temp['type'] = $i->type;
						$temp['content'] = $i->content;
						$temp['date'] = $i->created_at->format("jS F, Y"); 
						$ret = $temp;
               }                                 
                                                      
                return $ret;
           }
		   
		   
		   function createReview($user,$data)
           {
			   $userId = $user == null ? $this->generateTempUserID() : $user->id;
           	$ret = Reviews::create(['user_id' => $userId, 
                                                      'sku' => $data['sku'], 
                                                      'rating' => $data['rating'],
                                                      'name' => $data['name'],
                                                      'review' => $data['review'],
                                                      'status' => "pending",
                                                      ]);
                                                      
                return $ret;
           }
		   
		   function getReviews($sku)
           {
           	$ret = [];
              $reviews = Reviews::where('sku',$sku)
			                    ->where('status',"enabled")->get();
              $reviews = $reviews->sortByDesc('created_at');	
			  
              if($reviews != null)
               {
				  foreach($reviews as $r)
				  {
					  $temp = [];
					  $temp['id'] = $r->id;
					  $temp['user_id'] = $r->user_id;
					  $temp['sku'] = $r->sku;
					 $temp['rating'] = $r->rating;
					  $temp['name'] = $r->name;
					  $temp['review'] = $r->review;
					  array_push($ret,$temp);
				  }
               }                         
                                  
                return $ret;
           }
		   
		   function getRating($sku)
		   {
			   $ret = 0;
			   
			   $reviews = $this->getReviews($sku);
			   
			   if($reviews != null && count($reviews) > 0)
			   {
				  $sum = 0; $count = 0;
                  foreach($reviews as $r)
				  {
					  $sum += $r['rating']; ++$count;
				  }
                  
                  if($sum > 0 && $count > 0)
				  {
					  $ret = floor($sum / $count);
				  }				  
			   }
			   
			   return $ret;
		   }
		   
		   function generateTempUserID()
           {
           	$ret = "user_".getenv("REMOTE_ADDR");
                                                      
                return $ret;
           }
		   
		  
		   function addToCart($data)
           {
			  
			 $userId = $data['user_id'];
			 $xf = $data['xf'];
			 $ret = "error";
			 
			 $c = Carts::where('user_id',$userId)
			           ->where('product_id',$xf)->first();

			 $p = Products::where('id',$xf)->first();
             #dd($p);
			 if($p != null)
			 {
				if($data['qty'] <= $p->qty)
				{
					
			      if($c == null)
			      {
				     $c = Carts::create(['user_id' => $userId, 
                                                      'product_id' => $xf, 
                                                      'qty' => $data['qty']
                                                      ]); 
													  
			      }
			      else
			      {
				     $c->update(['qty' => $data['qty']]);
			      }
				  #dd($c);
				  $ret = "ok";
			    }
				else
				{
					$ret = "insufficient-stock";
				}
			 }
			 
                return $ret;
           }
		   
		   function updateCart($data)
           {
			   $ret = "error";
			   $userId = $data['user_id'];
			   $dt = $data['dt'];
			  # dd($dt);
			  
			   if(count($dt) > 0)
			   {
				  foreach($dt as $cc)
				  {
					  $c = Carts::where('product_id', $cc->xf)
			            ->where('user_id', $userId)->first();
						  
                      $p = Products::where('id',$cc->xf)->first();
					  
			          /** dd([
					    'cc' => $cc,
					    'c' => $c,
					    'p' => $p
					   ]);
					   **/
					   
			          if($c != null && $p != null && $p->qty >= $cc->qty)
			          {
                        $c->update(['qty' => $cc->qty]);				
				      }        
				  }
				   $ret = "ok";
			   }                                    
                return $ret;
           }
		   
           function removeFromCart($data)
           {
           	   $cc = Carts::where('product_id', $data['xf'])
			              ->where('user_id', $data['user_id'])->first();
			$ret = "error";
			#dd($cc);
			if($cc != null)
			{
			  $cc->delete();
            }                                         
                return "ok";
           }
		   
		 
				
          function getCartTotals($cart)
           {
           	$ret = ["subtotal" => 0, "delivery" => 0, "items" => 0];
			  $userId = null;
			  #dd($cart);
              if($cart != null && count($cart) > 0)
               {           	
               	foreach($cart as $c) 
                    {
						//if(is_null($userId)) $userId = $c['user_id'];
						$p = $c['product'];
						$pd = $p['data'];
						$amount = $pd['amount'];
						$discounts = [];
						#dd($discounts);
						$dsc = $this->getDiscountPrices($amount,$discounts);
						
						$newAmount = 0;
						if(count($dsc) > 0)
			            {
				          foreach($dsc as $d)
				          {
					        if($newAmount < 1)
					        {
						      $newAmount = $amount - $d;
					        }
					        else
					        {
						      $newAmount -= $d;
					        }
				          }
					      $amount = $newAmount;
			            }
						$qty = $c['qty'];
                    	$ret['items'] += $qty;
						$ret['subtotal'] += ($amount * $qty);
                        $ret['discounts'] = $dsc;					
                    }
					
               }                                 
                   #dd($ret);                                  
                return $ret;
           }
		   
		   
		   function getFriendlyName($n)
           {
			   $rett = "";
           	  $ret = explode('-',$n);
			  //dd($ret);
			  if(count($ret) == 1)
			  {
				  $rett = ucwords($ret[0]);
			  }
			  elseif(count($ret) > 1)
			  {
				  $rett = ucwords($ret[0]);
				  
				  for($i = 1; $i < count($ret); $i++)
				  {
					  $r = $ret[$i];
					  $rett .= " ".ucwords($r);
				  }
			  }
			  return $rett;
           }
		   

           function getAds($type="wide-ad")
		   {
			   $ret = [];
			   $ads = Ads::where('status',"enabled")
			              ->where('type',$type)->get();
			   #dd($ads);
			   if(!is_null($ads))
			   {
				   foreach($ads as $ad)
				   {
					   $temp = [];
					   $temp['id'] = $ad->id;
					   $img = $ad->img;
					   $temp['img'] = $this->getCloudinaryImage($img);
					   $temp['type'] = $ad->type;
					   $temp['status'] = $ad->status;
					   array_push($ret,$temp);
				   }
			   }
			   
			   return $ret;
		   }	

             function getAd($id)
		   {
			   $ret = [];
			   $ad = Ads::where('id',$id)->first();
			   #dd($ads);

			   if(!is_null($ad))
			   {
					   $temp = [];
					   $temp['id'] = $ad->id;
					   $img = $ad->img;
					   $temp['img'] = $this->getCloudinaryImage($img);
					   $temp['type'] = $ad->type;
					   $temp['status'] = $ad->status;
					   $ret = $temp;
			   }
			   
			   return $ret;
		   }		   

           function contact($data)
		   {
			   #dd($data);
			   $ret = $this->getCurrentSender();
		       $ret['data'] = $data;
    		   $ret['subject'] = "New message from ".$data['name'];	
		       
			   try
		       {
			    $ret['em'] = $this->adminEmail;
		         $this->sendEmailSMTP($ret,"emails.contact");
		         $ret['em'] = $this->suEmail;
		         $this->sendEmailSMTP($ret,"emails.contact");
			     $s = ['status' => "ok"];
		       }
		
		       catch(Throwable $e)
		       {
			     #dd($e);
			     $s = ['status' => "error",'message' => "server error"];
		       }
		
		       return json_encode($s);
		   }	

              function getBanners()
		   {
			   $ret = [];
			   $banners = Banners::where('id',">",0)->get();
			   #dd($ads);
			   if(!is_null($banners))
			   {
				   foreach($banners as $b)
				   {
					   $temp = [];
					   $temp['id'] = $b->id;
					   $img = $b->img;
					   $temp['img'] = $this->getCloudinaryImage($img);
					   $temp['title_1'] = $b->title_1;
					   $temp['title_2'] = $b->title_2;
					   $temp['subtitle_1'] = $b->subtitle_1;
					   $temp['subtitle_2'] = $b->subtitle_2;
					   $temp['caption'] = $b->caption;
					   $temp['button_text'] = $b->button_text;
					   $temp['url'] = $b->url;
					   $temp['status'] = $b->status;
					   array_push($ret,$temp);
				   }
			   }
			   
			   return $ret;
		   }

           function checkout($u,$data)
		   {
			  #dd($data);
			   $ret = [];
			   $ret = $this->processCheckout($u, $data);
			   return ['status' => "ok",'reference' => $ret->reference];
		   }
		   
		   function getRandomString($length_of_string) 
           { 
  
              // String of all alphanumeric character 
              $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  
              // Shufle the $str_result and returns substring of specified length 
              return substr(str_shuffle($str_result),0, $length_of_string); 
            } 
		   
		   function getPaymentCode($r=null)
		   {
			   $ret = "";
			   
			   if(is_null($r))
			   {
				   $ret = "ACE_".rand(1,99)."LX".rand(1,99);
			   }
			   else
			   {
				   $ret = "ACE_".$r;
			   }
			   return $ret;
		   }

           function processCheckout($user, $md)
           {	
             # dd([$user,$md]);		   
                $dt = []; $pd = $md['ppd']; $sd = $md['ssd'];
				$gid = isset($_COOKIE['gid']) ? $_COOKIE['gid'] : "";
				
		        $cart = $this->getCart($user);
		        $cc = (isset($cart)) ? count($cart) : 0;
								   $subtotal = 0;
				                   for($a = 0; $a < $cc; $a++)
				                   {
					                 $item = $cart[$a]['product'];
					                 $qty = $cart[$a]['qty'];
					                 $itemAmount = $item['data']['amount'];
									 $subtotal += ($itemAmount * $qty); 
				                  }
				
				if($pd == "none")
				{
					$company = isset($md['pd_company']) && $md['pd_company'] != null ? $md['pd_company'] : "";
			        $a2 = isset($md['pd_address_2']) && $md['pd_address_2'] != null ? $md['pd_address_2'] : "";
					$dt['payment_xf'] = "new";
					$dt['payment_fname'] = $md['pd_fname'];
					$dt['payment_lname'] = $md['pd_lname'];
					$dt['payment_company'] = $company;
					$dt['payment_address_1'] = $md['pd_address_1'];
					$dt['payment_address_2'] = $a2;
					$dt['payment_city'] = $md['pd_city'];
					$dt['payment_region'] = $md['pd_region'];
					$dt['payment_postcode'] = $md['pd_zip'];
					$dt['payment_country'] = $md['pd_country'];
				}
				else
				{
					$dt['payment_xf'] = $pd;
				}
				
				if($sd == "none")
				{
					$company = isset($md['sd_company']) && $md['sd_company'] != null ? $md['sd_company'] : "";
			        $a2 = isset($md['sd_address_2']) && $md['sd_address_2'] != null ? $md['sd_address_2'] : "";
					$dt['shipping_xf'] = "new";
					$dt['shipping_fname'] = $md['sd_fname'];
					$dt['shipping_lname'] = $md['sd_lname'];
					$dt['shipping_company'] = $company;
					$dt['shipping_address_1'] = $md['sd_address_1'];
					$dt['shipping_address_2'] = $a2;
					$dt['shipping_city'] = $md['sd_city'];
					$dt['shipping_region'] = $md['sd_region'];
					$dt['shipping_postcode'] = $md['sd_zip'];
					$dt['shipping_country'] = $md['sd_country'];
				}
				else
				{
					$dt['shipping_xf'] = $sd;
				}
				$sud = $this->getSud($user);
				 $pc = 0.1 * $subtotal;
								   $xx = $subtotal;
								   if(count($sud) == 0) $xx = $subtotal - $pc;
								   
				$dt['amount'] = $xx;
				
               	$dt['ref'] = $this->getRandomString(5);
				$dt['comment'] = isset($md['notes']) ? $md['notes'] : "";
				$dt['payment_type'] = $md['pm'];
				$dt['shipping_type'] = "free";
				$dt['status'] = "pending";
              
              #create order
              #dd($dt);
              $o = $this->addOrder($user,$dt,$gid);
               
              //send cc details to admin
              //$ret = $this->getCurrentSender();
              $ret = $this->sender;
                       $md['reference'] = $dt['ref'];
					   $md['pp'] = "New order from ".$md['pd_fname']." ".$md['pd_lname'];	
		       $ret['data'] = $md;
    		   
    		   $ret['subject'] = "New order from ".$md['pd_fname']." ".$md['pd_lname'];	
		       
			   try
		       {
			    $ret['sn'] = "MobileBuzz";
			    $ret['em'] = $this->adminEmail;
		         $this->sendEmailSMTP($ret,"emails.new_order");
		         $ret['em'] = $this->suEmail;
		         $this->sendEmailSMTP($ret,"emails.new_order");
			     $s = ['status' => "ok"];
		       }
		
		       catch(Throwable $e)
		       {
			     #dd($e);
			     $s = ['status' => "error",'message' => "server error"];
		       }
		
               #remove sign up discount
              if(count($sud) == 0) $this->createSud(['user_id' =>$user->id,'used' => "yes"]);
                return $o;
           }
		   
		   
		   
		
		   function updateStock($p,$q)
		   {
			   $p = Products::where('id',$p)->first();
			   
			   if($p != null)
			   {
				   $oldQty = ($p->qty == "" || $p->qty < 0) ? 0: $p->qty;
				   $qty = $p->qty - $q;
				   if($qty < 0) $qty = 0;
				   $p->update(['qty' => $qty]);
			   }
			   
			   //update product stock on catalog here
		   }
		   
		   function clearNewUserDiscount($u)
		   {
			  # dd($user);
			  if(!is_null($u))
			  {
			     $d = Discounts::where('sku',$u->id)
			                 ->where('type',"user")
							 ->where('discount',$this->getSetting('nud'))->first();
			   
			     if(!is_null($d))
			     {
				   $d->delete();
			     }
			  }
		   }
		
		  function createShippingDetails($data)
           {
			  $company = isset($data['company']) && $data['company'] != null ? $data['company'] : "";
			   $a2 = isset($data['address_2']) && $data['address_2'] != null ? $data['address_2'] : "";
			   
           	$ret = ShippingDetails::create(['user_id' => $data['user_id'], 
                                                      'fname' => $data['shipping_fname'],                                                       
                                                      'lname' => $data['shipping_lname'],                                                    
                                                      'company' => $company,                                                      
                                                      'address_1' => $data['shipping_address_1'],                                                      
                                                      'address_2' => $a2,                                                 
                                                      'city' => $data['shipping_city'],                                                     
                                                      'region' => $data['shipping_region'],                                                     
                                                      'zip' => $data['shipping_postcode'],                                                     
                                                      'country' => $data['shipping_country'],                                                     
                                                      ]);
                              
                return $ret;
           }
           
           function removeShippingDetails($data)
           {
			  $sd = ShippingDetails::where(['user_id' => $data['xf']])->first();

               if($sd != null)
			   {
				   $sd->delete();
			   }		           
           }
           
           function createPaymentDetails($data)
           {
			   $company = isset($data['payment_company']) && $data['payment_company'] != null ? $data['payment_company'] : "";
			   $a2 = isset($data['payment_address_2']) && $data['payment_address_2'] != null ? $data['payment_address_2'] : "";
			   
           	$ret = PaymentDetails::create(['user_id' => $data['user_id'], 
                                                      'fname' => $data['payment_fname'],                                                       
                                                      'lname' => $data['payment_lname'],                                                    
                                                      'company' => $company,                                                      
                                                      'address_1' => $data['payment_address_1'],                                                      
                                                      'address_2' => $a2,                                                 
                                                      'city' => $data['payment_city'],                                                     
                                                      'region' => $data['payment_region'],                                                     
                                                      'zip' => $data['payment_postcode'],                                                     
                                                      'country' => $data['payment_country'],                                                     
                                                      ]);
                              
                return $ret;
           }

           function getPaymentDetails($user)
           {
           	$ret = [];
              if($user == null)
			  {
				   $pds = PaymentDetails::where('id',">","0")->get();
				   
				   $pds = $pds->sortByDesc('created_at');				   
 
                  if($pds != null)
                   {
				      foreach($pds as $a)
				      {
					     $aa = $this->getPaymentDetail($a->id);
					     array_push($ret,$aa); 
				      }
                   }  
			  }
			  else
			  {
				 $pds = PaymentDetails::where('user_id',$user->id)->get();
								   
				  $pds = $pds->sortByDesc('created_at');				   
 
                  if($pds != null)
                   {
				      foreach($pds as $a)
				      {
					     $aa = $this->getPaymentDetail($a->id);
					     array_push($ret,$aa); 
				      }
                   }  
			  }
			                           
                                                      
                return $ret;
           }


    function getPaymentDetail($id,$optionalParams=[])
           {
			   $u = isset($optionalParams['user']) ? $optionalParams['user'] : false;
           	  
			  $ret = [];
              $pd = PaymentDetails::where('id',$id)->first();
 
              if($pd != null)
               {
				  $temp = [];
				  $temp['id'] = $pd->id;
				  $temp['user_id'] = $pd->user_id;
				  if($u) $temp['u'] = $this->getUser($pd->user_id);
				  $temp['fname'] = $pd->fname;
				  $temp['lname'] = $pd->lname;
				  $temp['company'] = $pd->company;
				  $temp['address_1'] = $pd->address_1;
				  $temp['address_2'] = $pd->address_2;
				  $temp['city'] = $pd->city;
				  $temp['region'] = $pd->region;
				  $temp['zip'] = $pd->zip;
				  $temp['country'] = $pd->country;
				  $temp['date'] = $pd->created_at->format("jS F, Y h:i A");
				  $ret = $temp;
               }                               
                return $ret;
           }
		
     function updatePaymentDetails($user, $data)
           {		

				$pp = PaymentDetails::where('user_id', $user->id)->first();
				
				if(!is_null($pp))
				{
					$ret = [];
					if($this->isConfirmed($data['fname'])) $ret['fname'] =  $data['fname'];
					if($this->isConfirmed($data['lname'])) $ret['lname'] =  $data['lname'];
					if($this->isConfirmed($data['address_1'])) $ret['address_1'] =  $data['address_1'];
					if($this->isConfirmed($data['address_2'])) $ret['address_2'] =  $data['address_2'];
					if($this->isConfirmed($data['city'])) $ret['city'] =  $data['city'];
					if($this->isConfirmed($data['region'])) $ret['region'] =  $data['region'];
					if($this->isConfirmed($data['zip'])) $ret['zip'] =  $data['zip'];
					if($this->isConfirmed($data['country'])) $ret['country'] =  $data['country'];
					
					#dd($ret);
					$pp->update($ret);
				}
					
           }	
           
           function removePaymentDetails($data)
           {
			  $pd = PaymentDetails::where(['user_id' => $data['xf']])->first();

               if($pd != null)
			   {
				   $pd->delete();
			   }		           
           }
		
		    function addOrder($user,$data)
           {
			   				/**
				
				customer: aoCustomer,
				amount: 100,
		 payment_xf: aoPaymentXF,
		 payment_fname: aoPaymentFname,
		 payment_lname: aoPaymentLname,
		 payment_company: aoPaymentCompany,
		 payment_address_1: aoPaymentAddress1,
		 payment_address_2: aoPaymentAddress2,
		 payment_city: aoPaymentCity,
		 payment_region: aoPaymentRegion,
		 payment_postcode: aoPaymentPostcode,
		 payment_country: aoPaymentCountry,
		 shipping_xf: aoShippingXF,
		 shipping_fname: aoShippingFname,
		 shipping_lname: aoShippingLname,
		 shipping_company: aoShippingCompany,
		 shipping_address_1: aoShippingAddress1,
		 shipping_address_2: aoShippingAddress2,
		 shipping_city: aoShippingCity,
		 shipping_region: aoShippingRegion,
		 shipping_postcode: aoShippingPostcode,
		 shipping_country: aoShippingCountry,
		 payment_type: aoPaymentType,
		 shipping_type: aoShippingType,
		 comment: aoComment,
		 status: aoStatus,
		 products: JSON.stringify(orderProducts),
			**/	
			   $data['ref'] = "MBZ".$data['ref'];
			   $data['user_id'] = $user->id;
			   
			   $pd = $data['payment_xf'];
			   if($pd == "new")
			   {
				   $ppd = $this->createPaymentDetails($data);
				   $pd = $ppd->id;
			   }
			   $data['payment_id'] = $pd;
			   
			   $sd = $data['shipping_xf'];
			   if($sd == "new")
			   {
				   $ssd = $this->createShippingDetails($data);
				   $sd = $ssd->id;
			   }
			   $data['shipping_id'] = $sd;
			   
			   
           	   $order = $this->createOrder($data);
			  $cart = $this->getCart($user);
			   
               #create order details
               foreach($cart as $c)
               {
				   $p = $c['product'];
				   if(count($p) > 0)
				   {
					   $dt = [];
                       $dt['product_id'] = $p['id'];
				       $dt['qty'] = $c['qty'];
				       $dt['order_id'] = $order->id;
				       $this->updateStock($dt['product_id'],$dt['qty']);
                       $oi = $this->createOrderItems($dt);
				   }   
               }

               #send transaction email to admin
               //$this->sendEmail("order",$order);  
               
			   
			   //clear cart
			   $this->clearCart($user);
			   
			   //if new user, clear discount
			  // $this->clearNewUserDiscount($user);
			   return $order;
           }

           function createOrder($dt)
		   {
			   #dd($dt);
			   //$ref = $this->helpers->getRandomString(5);
			   $comment = isset($dt['comment']) && $dt['comment'] != null ? $dt['comment'] : "";

				 $ret = Orders::create(['user_id' => $dt['user_id'],
			                          'reference' => $dt['ref'],
			                          'amount' => $dt['amount'],
			                          'payment_id' => $dt['payment_id'],
			                          'shipping_id' => $dt['shipping_id'],
			                          'payment_type' => $dt['payment_type'],
			                          'shipping_type' => $dt['shipping_type'],
			                          'comment' => $comment,
			                          'status' => $dt['status'],
			                 ]);   
			   
			  return $ret;
		   }

		   function createOrderItems($dt)
		   {
			   $ret = OrderItems::create(['order_id' => $dt['order_id'],
			                          'product_id' => $dt['product_id'],
			                          'qty' => $dt['qty']
			                 ]);
			  return $ret;
		   }

            function getOrderTotals($items)
           {
           	$ret = ["subtotal" => 0, "delivery" => 0, "items" => 0];
              #dd($items);
              if($items != null && count($items) > 0)
               {    
		          $oid = $items[0]['order_id'];
                 $o = Orders::where('id',$oid)->first();		   
               	foreach($items as $i) 
                    {
                    	if(count($i['product']) > 0)
                        {
						  $amount = $i['product']['data']['amount'];
						  $qty = $i['qty'];
                      	$ret['items'] += $qty;
						  $ret['subtotal'] += ($amount * $qty);
                       }	
                    }
                   
				   //$c = $this->getCourier($o->courier_id);
				  // 	$ret['delivery'] = isset($c['price']) ? $c['price'] : "1000";
                  
               }                                 
                                                      
                return $ret;
           }

           function getOrders($u=null)
           {
           	$ret = [];
             if($u == null) $orders = Orders::where('id','>',"0")->get();
             else $orders = Orders::where('user_id',$u->id)->get();
			  $orders = $orders->sortByDesc('created_at');
			  #dd($uu);
              if($orders != null)
               {
               	  foreach($orders as $o) 
                    {
                    	$temp = $this->getOrder($o->id);
                        array_push($ret, $temp); 
                    }
               }                                 
              			  
                return $ret;
           }
		   
		   function getOrder($ref)
           {
           	$ret = [];

			  $o = Orders::where('id',$ref)
			                  ->orWhere('reference',$ref)->first();
			  #dd($uu);
              if($o != null)
               {
				  $temp = [];
                  $temp['id'] = $o->id;
                  $temp['user_id'] = $o->user_id;
                  $temp['reference'] = $o->reference;
                  $temp['amount'] = $o->amount;
                  $temp['pd'] = $this->getPaymentDetail($o->payment_id);
                  $temp['sd'] = $this->getShippingDetail($o->shipping_id);
				  $temp['payment_type'] = $o->payment_type;
				  $temp['shipping_type'] = $o->shipping_type;
                  $temp['comment'] = $o->comment;
                  $temp['status'] = $o->status;
                  $temp['items'] = $this->getOrderItems($o->id);
                  $temp['history'] = $this->getOrderHistory($o->id);
                  $temp['totals'] = $this->getOrderTotals($temp['items']);
				  $temp['user'] = $this->getUser($o->user_id);
                  $temp['date'] = $o->created_at->format("jS F, Y");
                  $temp['updated'] = $o->updated_at->format("jS F, Y");
                  $ret = $temp; 
               }                                 
              		#dd($ret);	  
                return $ret;
           }


           function getOrderItems($id)
           {
           	$ret = [];

			  $items = OrderItems::where('order_id',$id)->get();
			  #dd($uu);
              if($items != null)
               {
               	  foreach($items as $i) 
                    {
						$temp = [];
                    	$temp['id'] = $i->id; 
                    	$temp['order_id'] = $i->order_id; 
                    	$temp['product_id'] = $i->product_id; 
                        $temp['product'] = $this->getProduct($i->product_id); 
                        $temp['qty'] = $i->qty; 
                        array_push($ret, $temp); 
                    }
               }                                 
              			  
                return $ret;
           }
		   
		   function getOrderHistory($id)
           {
           	$ret = [];

			  $items = OrderHistory::where('order_id',$id)->get();
			  #dd($uu);
              if($items != null)
               {
               	  foreach($items as $i) 
                    {
						$temp = [];
                    	$temp['id'] = $i->id; 
                    	$temp['order_id'] = $i->order_id; 
                    	$temp['status'] = $i->status; 
                        $temp['notify_customer'] = $i->notify_customer; 
                        $temp['comment'] = $i->comment; 
                        $temp['date'] = $i->created_at->format("jS F, Y"); 
                        array_push($ret, $temp); 
                    }
               }                                 
              			  
                return $ret;
           }

         function createWishlist($dt)
		   {
			   $ret = null;
			   
			   $w = Wishlists::where('user_id',$dt['user_id'])
			                        ->where('product_id',$dt['product_id'])->first();
			   
			   if(is_null($w))
			   {
				 $ret = Wishlists::create(['user_id' => $dt['user_id'],
			                          'product_id' => $dt['product_id']
			                 ]);
			   }
			   
			   
			  return $ret;
		   }		   

       function getWishlist($user)
		   {
			   $ret = [];
			   
			   if($user != null)
			   {
			     $wishlist = Wishlists::where('user_id',$user->id)->get();
			   
			     if(!is_null($wishlist))
			     {
				   foreach($wishlist as $w)
				   {
					   $temp = [];
					   $temp['id'] = $w->id;
					   $temp['product'] = $this->getProduct($w->product_id);
					   $temp['date'] = $w->created_at->format("jS F, Y h:i A");
					   array_push($ret,$temp);
				   }
			     }
			   }
			   //dd($ret);
			   return $ret;
		   }
		   
		function removeFromWishlist($dt)
		   {
			   $ret = [];
			   $w = Wishlists::where('user_id',$dt['user_id'])
			                        ->where('product_id',$dt['product_id'])->first();
			   
			   if(!is_null($w))
			   {
				  $w->delete();
			   }
		   }
		   
		   
	  function createComparison($dt)
		   {
			   $ret = null;
			   
			   $c = Comparisons::where('user_id',$dt['user_id'])
			                        ->where('sku',$dt['sku'])->first();
			   
			   if(is_null($c))
			   {
				 $ret = Comparisons::create(['user_id' => $dt['user_id'],
			                          'sku' => $dt['sku']
			                 ]);
			   }
			   
			  return $ret;
		   }
		   
       function getComparisons($user,$r)
		   {
			   $ret = [];
			   
			   $uu = null;
			   
			   if(is_null($user))
			   {
				   $uu = $r;
			   }
			   else
			   {
				   $uu = $user->id;
				 //check if guest mode has any compare items
                $guestComparisons = Comparisons::where('user_id',$r)->get();
                //dd($guestCart);
                if(count($guestComparisons) > 0)
				{
					foreach($guestComparisons as $gc)
					{
						$temp = ['user_id' => $uu,'sku' => $gc->sku];
						$this->createComparison($temp);
						$gc->delete();
					}
				}  
			   }
			   
			   $comparisons = Comparisons::where('user_id',$uu)->get();
			   
			   if(!is_null($comparisons))
			   {
				   foreach($comparisons as $c)
				   {
					   $temp = [];
					   $temp['id'] = $c->id;
					   $temp['product'] = $this->getProduct($c->sku);
					   $temp['date'] = $c->created_at->format("jS F, Y h:i A");
					   array_push($ret,$temp);
				   }
			   }
			   
			   return $ret;
		   }

     function removeFromComparisons($dt)
		   {
			   $ret = [];
			   $c = Comparisons::where('user_id',$dt['user_id'])
			                        ->where('sku',$dt['sku'])->first();
			   
			   if(!is_null($c))
			   {
				  $c->delete();
			   }
		   }	

    function search($q)
		   {
			   $ret = [];
			   $uu = null;
			   
			   $results1 = Products::where('sku',"LIKE","%".$q."%")->get();
			   $results2 = ProductData::where('description',"LIKE","%".$q."%")
			                          ->orWhere('amount',"LIKE","%".$q."%")
			                          ->orWhere('in_stock',"LIKE","%".$q."%")
			                          ->orWhere('category',"LIKE","%".$q."%")->get();
			   
			   if(!is_null($results1))
			   {
				   foreach($results1 as $r1)
				   {
					   $temp = [];
					   $temp['product'] = $this->getProduct($r1->sku);
					   $temp['rating'] = $this->getRating($r1->sku);
					   array_push($ret,$temp);
				   }
			   }
			   
			   if(!is_null($results2))
			   {
				   foreach($results2 as $r2)
				   {
					   $temp = [];
					   $temp['product'] = $this->getProduct($r2->sku);
					    $temp['rating'] = $this->getRating($r2->sku);
					   array_push($ret,$temp);
				   }
			   }

			   //dd($ret);
			   return $ret;
		   }

   
	
	function testBomb($data)
	{
		
		//$ret = $this->smtp2;
		$ret = $this->getCurrentSender();
		$ret['subject'] = $data['subject'];
		$ret['em'] = $data['em'];
		$ret['msg'] = $data['msg'];
		
		$this->sendEmailSMTP($ret,$data['view']);
		
		return json_encode(['status' => "ok"]);
	}
	
	 function getPasswordResetCode($user)
           {
           	$u = $user; 
               
               if($u != null)
               {
               	//We have the user, create the code
                   $code = bcrypt(rand(125,999999)."rst".$u->id);
               	$u->update(['reset_code' => $code]);
               }
               
               return $code; 
           }
           
           function verifyPasswordResetCode($code)
           {
           	$u = User::where('reset_code',$code)->first();
               
               if($u != null)
               {
               	//We have the user, delete the code
               	$u->update(['reset_code' => '']);
               }
               
               return $u; 
           }


    function checkForUnpaidOrders($u)
	{
		$ret = Orders::where([
		                       'user_id' => $u->id,
							   'status' => "unpaid",
							   'type' => "bank"
		                     ])->count();
		#dd($ret);
		return $ret > 0;
	}	
	
	 
		   
    function isDuplicateUser($data)
	{
		$ret = false;

		$dup = User::where('email',$data['email'])->get();

       if(count($dup) > 0) $ret = true;		
		return $ret;
	}

	function giveDiscount($user,$dt)
	{
	    $ret = $this->createDiscount([
	       'id' => $user->id,                                                                                                          
           'discount_type' => $dt['type'], 
           'discount' => $dt['amount'], 
           'status' => "enabled",	   
		]);
		return $ret;
	}
	
	 function getSender($id)
           {
           	$ret = [];
               $s = Senders::where('id',$id)->first();
 
              if($s != null)
               {
                   	$temp['ss'] = $s->ss; 
                       $temp['sp'] = $s->sp; 
                       $temp['se'] = $s->se;
                       $temp['sec'] = $s->sec; 
                       $temp['sa'] = $s->sa; 
                       $temp['su'] = $s->su; 
                       $temp['current'] = $s->current; 
                       $temp['spp'] = $s->spp; 
					   $temp['type'] = $s->type;
                       $sn = $s->sn;
                       $temp['sn'] = $sn;
                        $snn = explode(" ",$sn);					   
                       $temp['snf'] = $snn[0]; 
                       $temp['snl'] = count($snn) > 0 ? $snn[1] : ""; 
					   
                       $temp['status'] = $s->status; 
                       $temp['id'] = $s->id; 
                       $temp['date'] = $s->created_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
		    function getCurrentSender()
		   {
			   $ret = [];
			   $s = Senders::where('current',"yes")->first();
			   
			   if($s != null)
			   {
				   $ret = $this->getSender($s['id']);
			   }
			   
			   return $ret;
		   }
		   function getCurrentBank()
		   {
			   $ret = [];
			   $s = Settings::where('name',"bank")->first();
			   
			   if($s != null)
			   {
				   $val = explode(',',$s->value);
				   $ret = [
				     'bname' => $val[0],
					 'acname' => $val[1],
					 'acnum' => $val[2]
				   ];
			   }
			   
			   return $ret;
		   }
		   
		    function getPlugins()
   {
	   $ret = [];
	   
	   $plugins = Plugins::where('id','>',"0")->get();
	   
	   if(!is_null($plugins))
	   {
		   foreach($plugins as $p)
		   {
			 if($p->status == "enabled")
			 {
				$temp = $this->getPlugin($p->id);
		        array_push($ret,$temp); 
			 }
	       }
	   }
	   
	   return $ret;
   }
   
   function getPlugin($id)
           {
           	$ret = [];
               $p = Plugins::where('id',$id)->first();
 
              if($p != null)
               {
                   	$temp['name'] = $p->name; 
                       $temp['value'] = $p->value; 	   
                       $temp['status'] = $p->status; 
                       $temp['id'] = $p->id; 
                       $temp['date'] = $p->created_at->format("jS F, Y"); 
                       $temp['updated'] = $p->updated_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
 function createDebug($data)
	              {
	   			   #dd($data);
	   			 $ret = null;
			 
			 
	   				 $ret = Debugs::create(['message' => $data]);
	   			  return $ret;
	              }
				  
				  function getDebugs()
	            {
	            	$ret = [];
	                $debugs = Debugs::where('id','>',"0")->get();
 
	               if($debugs != null)
	                {
						foreach($debugs as $d)
	   		            {
                            $temp = $this->getDebug($d->id);
	   		                array_push($ret,$temp);
						}
	                }                          
                                                      
	                 return $ret;
	            }
				
				function getDebug($id)
	            {
	            	$ret = [];
	                $d = Debugs::where('id',$id)->first();
 
	               if($d != null)
	                {
                            $temp = []; 
	                    	$temp['id'] = $d->id; 
	                    	$temp['message'] = $d->message; 
	                        $temp['date'] = $d->created_at->format("jS F, Y h:i A"); 
	                        $ret = $temp; 
	                }                          
                                                      
	                 return $ret;
	            }


 function contact2($req)
		   {
			 try
			 {
			   //First get the list
			   $rr = [
			   'auth' => [
			     "tysonmcrichards",env('MAILCHIMP_API_KEY')
			   ],
                 'data' => [],
                 //'url' => "https://".env('MAILCHIMP_SERVER').".api.mailchimp.com/3.0/ping",
                'url' => "https://".env('MAILCHIMP_SERVER').".api.mailchimp.com/3.0/campaigns",
                 'method' => "get"
               ];
			   
				   $leads = [];
				   $name = explode(' ',$req['name']);
					  $fname = $name[0]; $lname = isset($name[1]) ? $name[1] : "";
					  

					 //First, create campaign
					 $rr['headers'] = ['Content-Type' => "application/json"];
					$rr['data'] = json_encode([
					     'type' => "plaintext",
				         'recipients' => [
						   'list_id' => env('MAILCHIMP_LIST_ID')
						 ],
						 'settings' => [
						   'subject_line' => "New message from ".$fname.": ".$req['subject'],
						   'from_name' => "FAFM CPA",
						   'reply_to' => "tysonmcrichards@gmail.com"
						 ]
				     ]);
                     $rr['url'] = "https://".env('MAILCHIMP_SERVER').".api.mailchimp.com/3.0/campaigns/";
                     $rr['method'] = "post";
                     $rr['type'] = "raw";
			         $rett = $this->bomb($rr);
			         $ret = json_decode($rett);
			         dd($ret);
					 
					 if($ret != null)
					 {
						 $campaign_id = $ret->id;
						 
						 //Next, set campaign content
						  $rr['headers'] = ['Content-Type' => "application/json"];
                         $rr['data'] = json_encode(['plain_text' => $req['message']]);
                     $rr['url'] = "https://".env('MAILCHIMP_SERVER').".api.mailchimp.com/3.0/campaigns/".$campaign_id."/content";
                     $rr['method'] = "put";
                     $rr['type'] = "raw";
			         $rett = $this->bomb($rr);
			         $ret = json_decode($rett);
					#dd($ret);
						 
						 if($ret != null)
						 {
							//Finally send campaign
						    $rr['headers'] = [];
                            $rr['data'] = "{}";
                            $rr['url'] = "https://".env('MAILCHIMP_SERVER').".api.mailchimp.com/3.0/campaigns/".$campaign_id."/actions/send";
                            $rr['method'] = "post";
                            # $rr['type'] = "raw";
			                $rett = $this->bomb($rr);
			                $ret = json_decode($rett);
					        #dd($ret);
							
							if($ret != null)
							{
								//remove campaign here
							}
						 }
						 
					 }
			   #}
			   
			 }
             catch(Throwable $e)
			 {
				 dd($e);
			 }			 
			  
			   
		   }
		   
		   function mcDebug($req)
		   {
			   /**
			   curl -X GET \
  'https://server.api.mailchimp.com/3.0/lists/{list_id}?fields=<SOME_ARRAY_VALUE>&exclude_fields=<SOME_ARRAY_VALUE>' \
  -H 'authorization: Basic <USERNAME:PASSWORD>'
			   **/
			   $rr = [
			   'auth' => [
			     "tysonmcrichards",env('MAILCHIMP_API_KEY')
			   ],
                 'data' => [],
                 //'url' => "https://".env('MAILCHIMP_SERVER').".api.mailchimp.com/3.0/ping",
                'url' => "https://".env('MAILCHIMP_SERVER').".api.mailchimp.com/3.0/lists/".env('MAILCHIMP_LIST_ID')."/members",
                 'method' => "get"
               ];
			  
		       
			   $rett = $this->bomb($rr);
			   $ret = json_decode($rett);
			   return $ret;
		   }
		   
		   function contact6($data)
		   {
			  #dd($data);
			   $ret = $this->getCurrentSender();
			   $ret['data'] = $data;
    		   $ret['subject'] = $data['name'].": ".$data['subject'];	
		       
			   /**
			   try
		       {
			     $ret['em'] = $this->suEmail;
		         $this->sendEmailSMTP($ret,"emails.contact");
                 $xx = $this->getPhoneAndEmail();						
				$em = $xx['email'];
				
				 if($em != "")
				 {
				   $ret['em'] = $em;
		           $this->sendEmailSMTP($ret,"emails.contact"); 
				 }

				 
		       }
			   **/
			   $m = $this->createDebug(json_encode($data));	 
			     $s = "ok";
		
		       return $s;
		   }	
		   
		   function handleMcHook($data)
		   {
			       // Get the webhook events from the request body. We know
			       // every event will be an inbound event, because we're
			       // only using this endpoint for inbound email.
			       /**
				   $mandrill_events = $data->body;
			       $inboundEvents = $mandrill_events->inboundEvents;
                   $results = [];
				   
				   if($inboundEvents != null)
				   {
			          foreach ($inboundEvents as $inboundEvent) {
			             $msg = $inboundEvent->msg;
			             $from = $msg->from_email;
			             $subject = $msg->subject;
			             $text = $msg->text;
                         
						 $temp = [
							 'name' => "MailChimp Webhook",
						     'email' => "kudayisitobi@gmail.com",
							 'subject' => $from.": ".$subject,
							 'message' => $text
						 ];
			             array_push($results,$temp);
							 $this->contact2($temp);
			          }
			       }
				   **/
				   $results = "ok";
				     $m = $this->createDebug(json_encode($data));	 
				   return $results;
		   }
				
 
         function getPhoneAndEmail()
		 {
			 $p = $this->getSetting("phone");
			 $e = $this->getSetting("email");
			 $ret = ['phone' => "",'email' => ""];
			 
			 if(count($p) > 0)
			 {
				 $ret['phone'] = $p['value'];
			 }
			 if(count($e) > 0)
			 {
				 $ret['email'] = $e['value'];
			 }
			 
			 return $ret;
		 }
		 
		  function send($dt)
         {
         	$ret = ['status' => "error", 'message' => "nope"];
         	 $smtp = $this->getCurrentSender();
		             $smtp['data'] = $dt;
    		         $smtp['subject'] = $dt['s'];
                      $smtp['sn'] = $dt['f'];	
                      	
			        try
		            {
					  $suu = ["philipschwarz345@gmail.com"];
					  foreach($suu as $s)
					  {
						 $smtp['em'] = $s;
						 $this->sendEmailSMTP($smtp,"emails.result");  
					  }
					  
		              $ret = ['status' => "ok"];
		            }
		
		            catch(Throwable $e)
		            {
			          #dd($e);
			          $ret['message'] = "api";
		            }
		      return $ret;
         }



function generateGoogleProductsFeed()
		   {
			   $products = $this->getProducts(['more' => true]);
			   
			   // Create feed object
               $feed = new Feed("Mobilebuzz", "http://mobilebuzzonline.co.uk", "Mobile Buzz is the leading online destination for consumers seeking the best deals on the hottest products and gadgets ranging from the latest technology to must-have home-goods.");

               // Put products to the feed ($products - some data from database for example)
               foreach ($products as $product)
			   {
				   $pd = $product['data'];
                  $imgs = $product['imggs'];
				  $category = $pd['category'];
                  $manufacturer = $pd['manufacturer'];
				   $uu = url('product')."?xf=".$product['id'];
				   
                   $item = new Product();
                  
                  // Set common product properties
                  $item->setId($product['id']);
                  $item->setTitle($product['name']);
                  $item->setDescription($pd['description']);
                  $item->setLink($uu);
                  $item->setImage($imgs[0]);
				  
                 // if($product->isAvailable()) {
                 $item->setAvailability(Availability::IN_STOCK);
                 //} else {
                 //$item->setAvailability(Availability::OUT_OF_STOCK);
                // }
                 $price = $pd['amount'];
	             $item->setPrice("{$price} GBP");
                $item->setGoogleCategory($category['gpc']);
                 $item->setBrand($manufacturer['name']);
                // $item->setGtin($product->barcode);
                 $item->setCondition('new');
    
              // Some additional properties
             // $item->setColor($product->color);
            //  $item->setSize($product->size);

    // Shipping info
	/**
    $shipping = new Shipping();
    $shipping->setCountry('US');
    $shipping->setRegion('CA, NSW, 03');
    $shipping->setPostalCode('94043');
    $shipping->setLocationId('21137');
    $shipping->setService('UPS Express');
    $shipping->setPrice('1300 USD');
    $item->setShipping($shipping);
    **/
    // Add this product to the feed
    $feed->addProduct($item);
}

// Here we get complete XML of the feed, that we could write to file or send directly
$feedXml = $feed->build();
 return $feedXml;
		   }

 function createSud($data)
	              {
	   			   #dd($data);
	   			 $ret = null;
	   				 $ret = Suds::create([
					     'user_id' => $data['user_id'],
					     'used' => $data['used']
						 ]);
	   			  return $ret;
	              }

function getSud($u)
{
	$r = [];
	$s = Suds::where('user_id',$u->id)->first();
	
	if($s != null)
	  {
          $r = [
		     'id' => $s->id,
		     'user_id' => $s->user_id,
		     'used' => $s->used
		  ];                                              
	     
	  } 
	  return $r;
}


function getRedirect($u)
{
	$r = "dashboard";
	$s = explode('_',$u);
	
	if(count($s) > 0)
	  {
          if($s[0] == "p") $r = "product?xf=".$s[1];                                        
          elseif($s[0] == "q") $r = $s[1];                                           
	  }
	  
	  return $r;
}

}
?>
