	let  toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];
	

$(document).ready(function() {
    "use strict";
       
	   //auth
       $("#login-submit").click(function(e){            
		       e.preventDefault();
			   let valid = true;
			   let ee = $('#login-email').val(), p = $('#login-pass').val(), validation = (ee == "" || p == "");
			   
		       if(validation){
				 Swal.fire({
			            icon: 'error',
                        title: "Please fill all the required fields"
                 });
			   }
			   else{
				   $('#login-form').submit();
			   }
             
		  });
		  
		  $("#register-submit").click(function(e){            
		       e.preventDefault();
			   let valid = true;
			   let ee = $('#register-email').val(), pp = $('#register-phone').val(), p = $('#register-pass').val(), p2 = $('#register-pass-2').val(),
			       fname = $('#register-fname').val(), lname = $('#register-lname').val(), validation = (ee == "" || pp == "" || p == "" || p2 == "" || fname == "" || lname == "");
			   
		       if(validation){
				 Swal.fire({
			            icon: 'error',
                        title: "Please fill all the required fields"
                 });
			   }
			   else if(p.length < 6){
				 Swal.fire({
			            icon: 'error',
                        title: "Your password must be at least 6 characters"
                 });
			   }
			   else if(p != p2){
				 Swal.fire({
			            icon: 'error',
                        title: "Passwords must match"
                 });
			   }
			   else{
				   $('#register-form').submit();
			   }
             
		  });
		  
		  
		  //DASHBOARD
		  $("#profile-submit").click(function(e){            
		       e.preventDefault();
			   let ee = $('#profile-email').val(), pp = $('#profile-phone').val(), 
			       fname = $('#profile-fname').val(), lname = $('#profile-lname').val(), validation = (ee == "" || pp == "" || fname == "" || lname == "");
			   
		       if(validation){
				 Swal.fire({
			            icon: 'error',
                        title: "Please fill all the required fields"
                 });
			   }
			   else{
				   $('#profile-form').submit();
			   }
             
		  });
		  
		  //EDIT ADDRESS
		  $("#ea-submit").click(function(e){            
		       e.preventDefault();
			   let fname = $('#ea-fname').val(), lname = $('#ea-lname').val(),
			       a1 = $('#ea-address-1').val(), a2 = $('#ea-address-2').val(), 
			       city = $('#ea-city').val(), region = $('#ea-region').val(), 
			       country = $('#ea-country').val(), zip = $('#ea-zip').val(), 
			       validation = (a1 == "" || city == "" || region == "" || country == "none" || fname == "" || lname == "");
			   
		       if(validation){
				 Swal.fire({
			            icon: 'error',
                        title: "Please fill all the required fields"
                 });
			   }
			   else{
				   $('#ea-form').submit();
			   }
             
		  });

		  
		  //PRODUCTS
		  $("#per-page").change(function(e) {
       // e.preventDefault();
       perPage = $('#per-page').val();
	   if(perPage == "none") perPage = 12;
	   showPage(1);
    });
	
	 //CART 
		  $("#product-add-to-cart-btn").click(function(e){            
		       e.preventDefault();
			   let xf = $('#product-xf').val(), qty = $('#product-qty').val(),
			       validation = (xf == "" || qty == "" || parseInt(qty) < 1);
			   
		       if(validation){
				 Swal.fire({
			            icon: 'error',
                        title: "Please enter the quantity"
                 });
			   }
			   else{
				   window.location = `add-to-cart?xf=${xf}&qty=${qty}`;
			   }
             
		  });
		  
		  $(".product-qty").change(function(e){            
		       e.preventDefault();
			   
			      console.log(`xf: ${xf}, qty: ${qty}`);
             
		  });
		  
		  $("#update-cart-btn").click(function(e){            
		       e.preventDefault();
			   
			   let items = $('.product-qty');
			   
			   
			   for(let ii = 0; ii < items.length; ii++){
				   let i = items[ii], xf = $(i).attr('data-xf'), qty = i.value; // qty = $(i).attr('data-val');
				  
				  let c = cart.find(x => x.xf == xf);
				   
				   if(c){
					 c.qty = qty;  
				   }else{
					   cart.push({xf: xf, qty: qty});
				   }
				   
			   }
			  // console.log(cart);
			  
			   let validation = (cart.length < 1);
			   
		       if(validation){
				 Swal.fire({
			            icon: 'error',
                        title: "Please enter the quantity"
                 });
			   }
			   else{
				   window.location = `update-cart?dt=${JSON.stringify(cart)}`;
			   }
             
		  });
		  
		  $("#ssb-btn").click(function(e){            
		       e.preventDefault();
			   let l = $('#ssb-size-length').val(), w = $('#ssb-size-width').val(), h = $('#ssb-size-height').val(),
			       min = $('#ssb-price-from').val(), max = $('#ssb-price-to').val(),
			       validation = (l == "" || w == "" || h == "" || min == "" || max == "" || parseInt(min) < 1 || parseInt(max) < 1);
			   
		       if(validation){
				 Swal.fire({
			            icon: 'error',
                        title: "Please fill in the required fields"
                 });
			   }
			   else{
				   window.location = `search?l=${l}&w=${w}&h=${h}&min=${min}&max=${max}`;
			   }
             
		  });
		  
		   $("#checkout-pd").change(function(e) {
               e.preventDefault();
              let ppd = $('#checkout-pd').val();
			  showPD(ppd);
           });
		   $("#checkout-sd").change(function(e) {
               e.preventDefault();
              let ssd = $('#checkout-sd').val();
			  showSD(ssd);
           });
		   
		    $("#checkout-btn").click(function(e){            
		       e.preventDefault();
			   let ppd = $('#checkout-pd').val(), ssd = $('#checkout-sd').val(),
			   pd_fname = $('#pd-fname').val(), pd_lname = $('#pd-lname').val(), pd_company = $('#pd-company').val(), pd_country = $('#pd-country').val(),
			   pd_address_1 = $('#pd-address-1').val(), pd_address_2 = $('#pd-address-2').val(), pd_city = $('#pd-city').val(), pd_region = $('#pd-region').val(), pd_zip = $('#pd-zip').val(),
			   sd_fname = $('#sd-fname').val(), sd_lname = $('#sd-lname').val(), sd_company = $('#sd-company').val(), sd_country = $('#sd-country').val(),
			   sd_address_1 = $('#sd-address-1').val(), sd_address_2 = $('#sd-address-2').val(), sd_city = $('#sd-city').val(), sd_region = $('#sd-region').val(), sd_zip = $('#sd-zip').val(),
               notes = $('#notes').val();
               
			   let pdValidation = (pd_fname == "" || pd_lname == "" || pd_country == "none" || pd_address_1 == "" || pd_city == "" || pd_region == "" || pd_zip == ""), 
                   sdValidation = (sd_fname == "" || sd_lname == "" || sd_country == "none" || sd_address_1 == "" || sd_city == "" || sd_region == "" || sd_zip == "");
			   
			   let validation = (pm == "none" || (ppd == "none" && pdValidation) || (ssd == "none" && sdValidation));
			       console.log("validation: ",validation);
		       if(validation){
				   let s2 = "";
				   
				   if(ppd == "none" && pdValidation) s2 = "Fill in required billing details";
				   if(ssd == "none" && sdValidation) s2 = "Fill in required shipping details";
				   if(pm == "none") s2 = "Select a payment method";
				   
				 Swal.fire({
			            icon: 'error',
                        title: s2
                 });
			   }
			   else{
				   $('#checkout-form').submit();
			   }
             
		  });
	
});
