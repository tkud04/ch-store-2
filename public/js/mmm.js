	let  toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];
	let qv = 0;

$(document).ready(function() {
    "use strict";
       
	   //auth
       $("#login-has-pass").change(function(e) {
        e.preventDefault();
       let hp = $('#login-has-pass').val();
	   if(hp == "none" || hp == "yes"){
             $('.register-div').hide();
            } 
            else if(hp == "no"){
	    $('.login-div').hide(); 
             $('.register-div').fadeIn();
            } 
    });

       $("#login-submit").click(function(e){            
		       e.preventDefault();
			   let valid = true;
			   let ee = $('#login-email').val(), p = $('#login-pass').val(), hp = $('#login-has-pass').val(),
			       p2 = $('#login-pass-2').val(), fn = $('#login-pass-fname').val(), ln = $('#login-pass-lname').val(),
			       signupValidation = (ee == "" || p == "" || p2 == "" || p != p2 || fn == "" || ln == ""), loginValidation = (ee == "" || p == ""), validation = ((hp == "no" && signupValidation) || (hp == "yes" && loginValidation));
			   
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
		  
		  $("#qminus").click(function(e){            
		       e.preventDefault();
			qv = $('#product-qty').val();
                         $('#product-qty').val(qv - 1);
			      //console.log(`xf: ${xf}, qty: ${qty}`);
             
		  });

                 $("#qplus").click(function(e){            
		       e.preventDefault();
			qv = $('#product-qty').val();
                         $('#product-qty').val(qv + 1);
			      //console.log(`xf: ${xf}, qty: ${qty}`);
             
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

         //CHECKOUT
		  $("#card-2-back").click(function(e){            
		       e.preventDefault();
			   setPM('none');
			   hideElem(['#card-2']);
               showElem(['#card-1']);
             
		  });
		  
		  $("#payc").click(function(e){            
		       e.preventDefault();
			   let ivc = validateCheckout(pm);
		       if(ivc.valid){
				 Swal.fire({
			            icon: 'error',
                        title: ivc.message
                 });
			   }
			   else{
				  hideElem(['#payp-tab','#payn-tab']);
               showElem(['#payc-tab']);
			   }
			   
		  });
		  
		  $("#payp").click(function(e){            
		       e.preventDefault();
                           /**
			   let ivc = validateCheckout("pp");
		       if(ivc.valid){
				 Swal.fire({
			            icon: 'error',
                        title: ivc.message
                 });
			   }
			   else{
				  hideElem(['#payc-tab','#payn-tab']);
               showElem(['#payp-tab']);
			   }
			   **/
                    showElem(['#checkout-pp-loading']);
                    setTimeout(() => {
                     hideElem(['#checkout-pp-loading']);
                      Swal.fire({
			            icon: 'error',
                              title: "PayPal checkout failed to respond, please use another form of payment."
                        });
			   },2000);
		  });
		  
		  $("#payn").click(function(e){            
		       e.preventDefault();
			   hideElem(['#payc-tab','#payp-tab']);
               showElem(['#payn-tab']);
		  });
		  
		  $("#sd-done").click(function(e){            
		       e.preventDefault();
			   refreshSDSummary();
		  });
		  
		  $("#pd-done").click(function(e){            
		       e.preventDefault();
			   refreshPDSummary();
		  });
		  
		  $("#sd-cancel").click(function(e){            
		       e.preventDefault();
			   hideElem(['#sd-edit']);
               showElem(['#sd-display']);
		  });
		  
		  $("#pd-cancel").click(function(e){            
		       e.preventDefault();
			   hideElem(['#pd-edit']);
               showElem(['#pd-display']);
		  });
		  
		   $("#checkout-pd").change(function(e) {
               e.preventDefault();
              let ppd = $('#checkout-pd').val(), edh = null;
			  
			   if(ppd == "none"){
				  edh = false;
			  }
			  else{
				 edh = true;
			  }
			  
              $('.bd').prop("readonly", edh );
			  
			  showPD(ppd);
           });
		   
		   $("#checkout-sd").change(function(e) {
               e.preventDefault();
              let ssd = $('#checkout-sd').val(), edh = null;
			  
			  if(ssd == "none"){
				  edh = false;
			  }
			  else{
				 edh = true;
			  }
			  
              $('.sd').prop("readonly", edh );
			  
			  showSD(ssd);
           });
		   
		    $("#checkout-btn").click(function(e){            
		       e.preventDefault();
			  handleCheckout("cd");
             
		  });
	
});
