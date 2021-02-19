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
	
});