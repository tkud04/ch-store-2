	let  toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];
	

$(document).ready(function() {
    "use strict";

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
			   let ee = $('#register-email').val(), p = $('#register-pass').val(), p2 = $('#register-pass-2').val(),
			       fname = $('#register-fname').val(), lname = $('#register-lname').val(), validation = (ee == "" || p == "" || p2 == "" || fname == "" || lname == "");
			   
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
	
});