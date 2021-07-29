const showElem = (name) => {
	let names = [];
	
	if(Array.isArray(name)){
	  names = name;
	}
	else{
		names.push(name);
	}
	
	for(let i = 0; i < names.length; i++){
		$(names[i]).fadeIn();
	}
}

const hideElem = (name) => {
	let names = [];
	
	if(Array.isArray(name)){
	  names = name;
	}
	else{
		names.push(name);
	}
	
	for(let i = 0; i < names.length; i++){
		$(names[i]).hide();
	}
}

const showPage = (p) => {
	//console.log("arr length: ",productsLength);
	//console.log("show per page: ",perPage);
	$('#pagination-row').hide();
	$('#products').html("");
	let start = 0, end = 0;
	
	if(productsLength < perPage){
		end = productsLength;
	}
	else{
		start = (p * perPage) - perPage;
		end = p * perPage;
	}
	
	//console.log(`start: ${start}, end: ${end}`);
	let hh = "", cids = [];

	for(let i = start; i < end; i++){
		if(i < productsLength)
		{
		let p = products[i];
	   
		cids.push(p.id);
		let nnn = p.name;
		if(p.name.length > 12){
			nnn = `${p.name.substr(0,12)}..`;
		}
		let nn = p.name == "" ? p.model : nnn, imggs = JSON.parse(p.imggs);
		    //ppd = p.pd.replace(/(?:\r\n|\r|\n)/g, '<br>');
			//console.log('ppd: ', ppd);
			//let pd = JSON.parse(ppd);
		   // description = `${pd.description}`,
			aa = {
				   cid: p.id,
				   name: p.name,
				   imggs: imggs,
				  // description: description,
				   amount: p.amount,
				   
		    }, aaa = JSON.stringify(aa);
 	        
		hh = `
				    <div class="product-wrap">
									<div class="product shadow-media">
										<figure class="product-media">
											<a href="${p.uu}">
												<img src="${imggs[0]}" alt="${nnn}" width="280" height="315">
											</a>
											<div class="product-label-group">
												<label class="product-label label-new">new</label>
											</div>
											<div class="product-action-vertical">
												<a href="javascript:void(0)" onclick="addToCart({xf: ${p.id},qty: 1})" class="btn-product-icon btn-cart" title="Add to cart"><i class="d-icon-bag"></i></a>
											</div>
											<div class="product-action">
												<a href="javascript:void(0)" data-toggle="modal" data-target="#qv" onclick='populateQV(${aaa})'  class="btn-product btn-quickview" title="Quick View">Quick View</a>
											</div>
										</figure>
										<div class="product-details">
											<a href="javascript:void(0)" onclick="addToWishlist({xf: ${p.id}})" class="btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
											<div class="product-cat">
												<a href="javascript:void(0)">${p.category}</a>
											</div>
											<h3 class="product-name">
												<a href="${p.uu}">${nnn}</a>
											</h3>
											<div class="product-price">
												<ins class="new-price">&#0163;${p.amount}</ins>
											</div>
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:100%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
												<a href="{{$uu}}" class="rating-reviews">( 0 reviews )</a>
											</div>
										</div>
									</div>
								</div>
		`;
		$('#products').append(hh);
		
	  }
	}
	
	/**
	//Pagination
	$('ul.cd-pagination').html("");
	let pages = productsLength < perPage ? 1 : Math.ceil(productsLength / perPage);
	$('ul.cd-pagination').append(` <li class="button"><a href="javascript:void(0)" onclick="showPreviousPage();">Prev</a> </li>`);
	for(let x = 0; x < pages; x++){
		$('ul.cd-pagination').append(`<li><a href="javascript:void(0)" onclick="showPage(${x+1});">${x+1}</a> </li>`);
	}
	$('ul.cd-pagination').append(`<li class="button"><a href="javascript:void(0)" onclick="showNextPage();">Next</a></li>`);
	
	page = p;
	
	**/
	
	$('#pagination-row').fadeIn();
}

const showPreviousPage = () => {
	let sp = productsLength < perPage ? 1 : Math.ceil(productsLength / perPage), pp = page - 1;
	//console.log(`page: ${page},sp: ${sp},pp: ${pp}`);
	
	if(sp > pp && pp > 0){
		showPage(pp);
	}
	
}

const showNextPage = () => {
		let sp = productsLength < perPage ? 1 : Math.ceil(productsLength / perPage), pp = page + 1;
	//console.log(`page: ${page},sp: ${sp},pp: ${pp}`);
	
	if(sp >= pp){
		showPage(pp);
	}
}

const changePerPage = () =>{
	       perPage = $('#per-page').val();
		   if(perPage == "none") perPage = 3;

}

const populateQV = dt =>{
	console.log("dt: ",dt);
	localStorage.setItem('qv',dt);
	let imgs1 = ``, imgs2 = ``, imgs = dt.imggs;
	//console.log("imggs: ",imggs);
	
	for(let i = 0; i < imggs.length; i++){
		imgs1 += `
		   <figure class="product-image">
					<img src="${imgs[i]}" data-zoom-image="${imgs[i]}" alt="${dt.name}" width="580" height="580">
		   </figure>
		`;
	}
	for(let j = 0; j < imggs.length; j++){
		let ss = j == 0 ? " active" : "";
		imgs2 += `
		   <div class="product-thumb${ss}">
				<img src="${imgs[j]}" alt="product thumbnail" width="137" height="137">
		   </div>
		`;
	}
	let hh = `
	       <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
				${imgs1}
			</div>
			<div class="product-thumbs-wrap">
				<div class="product-thumbs">
					${imgs2}
				</div>
				<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
				<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
			</div>
	`;
	
	let hd = `
	   <h2 class="product-name"><a href="https://d-themes.com/html/donald/ajax/product.html">Blue Pinafore Denim Dress</a></h2>
			<div class="product-meta">
				SKU: <span class="product-sku">12345670</span>
				BRAND: <span class="product-brand">The Northland</span>
			</div>
			<div class="product-price">$139.00</div>
			<div class="ratings-container">
				<div class="ratings-full">
					<span class="ratings" style="width:80%"></span>
					<span class="tooltiptext tooltip-top"></span>
				</div>
				<a href="https://d-themes.com/html/donald/ajax/quickview.html#product-tab-reviews" class="rating-reviews">( 6 reviews )</a>
			</div>
			<p class="product-short-desc">Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus
				metus libero eu augue. Morbi purus liberpuro ate vol faucibus adipiscing.</p>
			<div class="product-form product-color">
				<label>Color:</label>
				<div class="product-variations">
					<a class="color" data-src="images/demos/demo7/products/big1.jpg" href="https://d-themes.com/html/donald/ajax/quickview.html#" style="background-color: #d99e76"></a>
					<a class="color" data-src="images/demos/demo7/products/2.jpg" href="https://d-themes.com/html/donald/ajax/quickview.html#" style="background-color: #267497"></a>
					<a class="color" data-src="images/demos/demo7/products/3.jpg" href="https://d-themes.com/html/donald/ajax/quickview.html#" style="background-color: #9a999d"></a>
					<a class="color" data-src="images/demos/demo7/products/4.jpg" href="https://d-themes.com/html/donald/ajax/quickview.html#" style="background-color: #2b2b2b"></a>
				</div>
			</div>
			<div class="product-form product-size">
				<label>Size:</label>
				<div class="product-form-group">
					<div class="product-variations">
						<a class="size" href="https://d-themes.com/html/donald/ajax/quickview.html#">S</a>
						<a class="size" href="https://d-themes.com/html/donald/ajax/quickview.html#">M</a>
						<a class="size" href="https://d-themes.com/html/donald/ajax/quickview.html#">L</a>
						<a class="size" href="https://d-themes.com/html/donald/ajax/quickview.html#">XL</a>
						<a class="size" href="https://d-themes.com/html/donald/ajax/quickview.html#">2XL</a>
					</div>
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="size-guide"><i class="d-icon-ruler"></i>Size Guide</a>
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="product-variation-clean">Clean All</a>
				</div>
			</div>
			<div class="product-variation-price">
				<span>$239.00</span>
			</div>

			<hr class="product-divider">

			<div class="product-form product-qty">
				<label>QTY:</label>
				<div class="product-form-group">
					<div class="input-group">
						<button class="quantity-minus d-icon-minus"></button>
						<input class="quantity form-control" type="number" min="1" max="1000000">
						<button class="quantity-plus d-icon-plus"></button>
					</div>
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="btn-product btn-cart"><i class="d-icon-bag"></i>Add To Cart</a>
				</div>
			</div>

			<hr class="product-divider mb-3">

			<div class="product-footer">
				<div class="social-links mr-2">
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="social-link social-facebook fab fa-facebook-f"></a>
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="social-link social-twitter fab fa-twitter"></a>
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="social-link social-vimeo fab fa-vimeo-v"></a>
				</div>
				<div class="product-action">
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="btn-product btn-wishlist"><i class="d-icon-heart"></i>Add To Wishlist</a>
					<span class="divider"></span>
					<a href="https://d-themes.com/html/donald/ajax/quickview.html#" class="btn-product btn-compare"><i class="d-icon-random"></i>Add To Compare</a>
				</div>
			</div>
	`;
	
     //  document.querySelector("#qv-gallery").innerHTML = hh;
      //  document.querySelector("#qv-details").innerHTML = hd;
}

const setPM = ppm => {
	let rt = "NONE", show = true, pm = ppm;
	
	if(pm == "direct"){
		rt = "DIRECT BANK TRANSFER";
	} 
	else if(pm == "online"){
		rt = "PAY ONLINE";
		//show = false;
		/**
		Swal.fire({
			 icon: 'error',
             title: "Online payment is currently not available."
        });
		**/
		hideElem(['#card-1']);
		showElem(['#card-2']);
	} 
	
	if(show){
	  $('#checkout-pm').html(rt);
	  $('#pm').val(pm);
	}
	
}

const showPD = xf => {
	let pdVals = null, newPD = {
		xf: "",
	  fname: "",
	  lname: "",
	  company: "",
	  address_1: "",
	  address_2: "",
	  city: "",
	  region: "",
	  zip: "",
	  country: "none"
	};
	
	if(xf == "none"){
		pdVals = newPD;
	}
	else{
		pdVals = pd.find(p => p.xf == xf);
	}
	
	$('#pd-fname').val(pdVals.fname);
	$('#pd-lname').val(pdVals.lname);
	$('#pd-company').val(pdVals.company);
	$('#pd-address-1').val(pdVals.address_1);
	$('#pd-address-2').val(pdVals.address_2);
	$('#pd-city').val(pdVals.city);
	$('#pd-region').val(pdVals.region);
	$('#pd-zip').val(pdVals.zip);
	$('#pd-country').val(pdVals.country);
}

const showSD = xf => {
	let sdVals = null, newSD = {
		xf: "",
	  fname: "",
	  lname: "",
	  company: "",
	  address_1: "",
	  address_2: "",
	  city: "",
	  region: "",
	  zip: "",
	  country: "none"
	};
	
	if(xf == "none"){
		sdVals = newSD;
	}
	else{
		sdVals = sd.find(p => p.xf == xf);
	}
	
	$('#sd-fname').val(sdVals.fname);
	$('#sd-lname').val(sdVals.lname);
	$('#sd-company').val(sdVals.company);
	$('#sd-address-1').val(sdVals.address_1);
	$('#sd-address-2').val(sdVals.address_2);
	$('#sd-city').val(sdVals.city);
	$('#sd-region').val(sdVals.region);
	$('#sd-zip').val(sdVals.zip);
	$('#sd-country').val(sdVals.country);
}

const refreshProducts = dt => {
	let html = ``, hh = ``,s = 0, t = 0;
	//clear 
	$(`${dt.target}`).html("");
	
	//new vals
	for(let i = 0; i < orderProducts.length; i++){
		let op = orderProducts[i], p = products.find(pp => pp.id == op.p);
        //console.log(`p at : ${i}`,p);
        if(typeof p == 'undefined'){
			p = {
				id: 0,
				name: "Removed product",
				model: "DEL36455",
				qty: 0,
				amount: 0,
			}
		}		
        let ss = parseInt(p.amount) * parseInt(op.q);
		s += ss; t = s;
     //draw
      	
        if(dt.type == "normal"){
			hh = `<tr>
		          <td>${p.name}</td>
		          <td>${p.model}</td>
		          <td>${op.q}</td>
		          <td>&#0163;${p.amount}</td>
		          <td>&#0163;${ss}</td>
		          <td><a href="javascript:void(0)" onclick="removeProduct({p: ${op.p},q: ${op.q},t: '${dt.t}'})" class="btn btn-danger"><i class="fas fa-minus"></i></a></td>
				 </tr>`;
		}
		else if(dt.type == "review"){
			hh = `<tr>
		          <td>${p.name}</td>
		          <td>${p.model}</td>
		          <td>${op.q}</td>
		          <td>&#0163;${p.amount}</td>
		          <td>&#0163;${ss}</td>
		          </tr>`;
		}
		 html += hh;
	}
	
	if(dt.type == "review"){
		hh = `<tr>
		          <td colspan="4" class="text-right">Subtotal</td>
		          <td><span class="ml-5">&#0163;${s}</span></td>
		          </tr>
				  <tr>
		          <td colspan="4" class="text-right">Total</td>
		          <td><span class="ml-5">&#0163;<span id="${dt.t}-total">${t}</span></span></td>
		          </tr>`;
		html += hh;
	}
     	$(`${dt.target}`).html(html);
}

const addToCart = dt => {
	if(typeof dt.xf !== 'undefined'){
	   window.location = `add-to-cart?xf=${dt.xf}&qty=1`;
	}
}

const checkout = (dt) => {
	//create request
			let fd = new FormData();
		 fd.append("dt",JSON.stringify(dt));
		 fd.append("_token",$('#tk').val());
		
		 /**
		 for(let vv of fd.values()){
			 console.log("vv: ",vv);
		 }
		 **/
		// let xu = `send?f=${dt.from}&s=${dt.subject}&m=${dt.msg}&e=${ll[ctr]}`;
		  
		  hideElem([`#checkout-${dt.ckt}-btn`]);
		  showElem([`#checkout-${dt.ckt}-loading`]);
		   
	 let req = new Request('checkout',{method: 'POST', body: fd});
	//console.log(req);
	
	
	//fetch request
	fetch(req)
	   .then(response => {
		   console.log(response);
		   if(response.status === 200){
			   return response.json();
			  // return response.text();
		   }
		   else{
			   return {status: "error", message: "Technical error"};
		   }
	   })
	   .catch(error => {
		     Swal.fire({
			     icon: 'error',
                 html: `Failed to checkout : <b>${error}</b>`,
               });
			    hideElem([`#checkout-${dt.ckt}-btn`]);
		        showElem([`#checkout-${dt.ckt}-loading`]);
	   })
	   .then(res => {
		   console.log(res);
		   let hh = ``, hh2 = ``;
		   if(res.status == "ok"){
			   hh = `Order ${res.reference} placed!`;
			   hh2 = `Thank you for shopping with us! Your order with reference number <b>${res.reference}</b> was successful and is being processed.`;
			   
			    Swal.fire({
			     icon: 'success',
                 title: hh,
                 html: hh2
               });
               
               hideElem([`#checkout-${dt.ckt}-btn`]);
		       showElem([`#checkout-${dt.ckt}-loading`]);
			  window.location = "orders";
		   }
		   else if(res.status == "error"){
			   if(res.message == "validation"){
				 hh = `Please fill all required fields and try again.`;  
			   }
			   else if(res.message == "network"){
				 hh = `A network error has occured, please check your connection and try again.`;  
			   }
			   else if(res.message == "Technical error"){
				 hh = `A technical error has occured, please try again.`;  
			   }
			   else if(res.message == "nothing happened"){
				 hh = `Nothing happened, please try again.`;  
			   }
			  Swal.fire({
			     icon: 'error',
                 title: hh
                 
               });
               
              hideElem([`#checkout-${dt.ckt}-btn`]);
		  showElem([`#checkout-${dt.ckt}-loading`]);
		   }
		  
		   
		  
	   }).catch(error => {
		     alert("Failed to checkout: " + error);			
			  hideElem([`#checkout-${dt.ckt}-btn`]);
		  showElem([`#checkout-${dt.ckt}-loading`]);
	   });
}

const download = (blob,fname) => {
  let a = document.createElement('a');
  a.href = URL.createObjectURL(blob);
  a.setAttribute('download',fname);
  a.click();
}

const getCT = () => {
	
	let req = new Request('ct');
	//console.log(req);
	
	
	//fetch request
	fetch(req)
	   .then(response => {
		   console.log(response);
		   if(response.status === 200){
			   return response.json();
			  // return response.text();
		   }
		   else{
			   return {status: "error", message: "Technical error"};
		   }
	   })
	   .catch(error => {
		  /*   Swal.fire({
			     icon: 'error',
                 html: `Failed to tokenize : <b>${error}</b>`,
               }); */
			   
	   })
	   .then(res => {
		   console.log(res);
		   let hh = ``, hh2 = ``;
		   if(res.status == "ok"){
			   ct = res.data;
		   }
		   else if(res.status == "error"){
			   if(res.message == "validation"){
				 hh = `Please fill all required fields and try again.`;  
			   }
			   else if(res.message == "network"){
				 hh = `A network error has occured, please check your connection and try again.`;  
			   }
			   else if(res.message == "technical"){
				 hh = `A technical error has occured, please try again.`;  
			   }
			   else if(res.message == "nothing"){
				 hh = `Nothing happened, please try again.`;  
			   }
			  
			  /* Swal.fire({
			     icon: 'error',
                 title: hh
                 
               });*/
               
              
		   }
		  
		   
		  
	   }).catch(error => {
		    // alert("Failed to tokenize: " + error);			
			 
	   });
}


const initCT = () => {
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');

}

const showCT = (n) => {
	 cts.forEach((x,i) => {
		 if(x == n) $(`#checkout-tab-${x}`).fadeIn();
		 else $(`#checkout-tab-${x}`).hide();
	 });
}

const ck = (ckt) => {
	let ppd = $('#checkout-pd').val(), ssd = $('#checkout-sd').val(),
			   pd_fname = $('#pd-fname').val(), pd_lname = $('#pd-lname').val(), pd_company = $('#pd-company').val(), pd_country = $('#pd-country').val(),
			   pd_address_1 = $('#pd-address-1').val(), pd_address_2 = $('#pd-address-2').val(), pd_city = $('#pd-city').val(), pd_region = $('#pd-region').val(), pd_zip = $('#pd-zip').val(),
			   sd_fname = $('#sd-fname').val(), sd_lname = $('#sd-lname').val(), sd_company = $('#sd-company').val(), sd_country = $('#sd-country').val(),
			   sd_address_1 = $('#sd-address-1').val(), sd_address_2 = $('#sd-address-2').val(), sd_city = $('#sd-city').val(), sd_region = $('#sd-region').val(), sd_zip = $('#sd-zip').val(),
               cc_name = $('#card-2-name').val(), cc_number = $('#card-2-number').val(), cc_cvv = $('#card-2-cvv').val(), cc_date = $('#card-2-date').val(),
               notes = $('#notes').val();
               
			   let pdValidation = (pd_fname == "" || pd_lname == "" || pd_country == "none" || pd_address_1 == "" || pd_city == "" || pd_region == "" || pd_zip == ""), 
                   sdValidation = (sd_fname == "" || sd_lname == "" || sd_country == "none" || sd_address_1 == "" || sd_city == "" || sd_region == "" || sd_zip == ""),
                   ccValidation = (cc_name == "" || cc_number == "" || cc_cvv == "" || cc_date == "");
			   
			   let validation = ((ppd == "none" && pdValidation) || (ssd == "none" && sdValidation));
			       console.log("validation: ",validation);
				   
		       if(validation){
				   let s2 = "";
				   
				   if(ppd == "none" && pdValidation) s2 = "Fill in required billing details";
				   if(ssd == "none" && sdValidation) s2 = "Fill in required shipping details";
				  
				 Swal.fire({
			            icon: 'error',
                        title: s2
                 });
			   }
			   else{
				   let gl = false;
				   
				   if(ckt == "cd"){
					   if(ccValidation){
						   Swal.fire({
			                 icon: 'error',
                             title: "Enter card details"
                            });
					   }
					   else{
						   gl = true;
					   }
				   }
				   else if(ckt == "pp"){
					    gl = true;
				   }
				   
				   if(gl)
				   {
					   let pl = {    
					    ppd: ppd,
					    pd_fname: pd_fname,
				    	pd_lname: pd_lname,
				    	pd_company: pd_company,
				    	pd_address_1: pd_address_1,
				    	pd_address_2: pd_address_2,
				    	pd_city: pd_city,
				    	pd_region: pd_region,
                        pd_country: pd_country,
				    	pd_zip: pd_zip,
				    	ssd: ssd,
				    	sd_fname: sd_fname,
				    	sd_lname: sd_lname,
				    	sd_company: sd_company,
			    		sd_address_1: sd_address_1,
			    		sd_address_2: sd_address_2,
			    		sd_city: sd_city,
				    	sd_region: sd_region,
                        sd_country: sd_country,
				    	sd_zip: sd_zip,
				    	pm: pm,
					    notes: notes,
                                        cc_name: cc_name,
                                        cc_number: cc_number,
                                        cc_cvv: cc_cvv,
                                        cc_date: cc_date,
										ckt: ckt
                     };
				     checkout(pl); 
				   }
				  
			   }
             
}

const initSDSummary = () => {
	let hh = `
	<p style="margin-top: 20px !important;">Click Edit to add your details <a href="javascript:void(0)" onclick="editSD(0)" class="btn btn-sm btn-primary cd-summary-btn mb-5" style="text-align: right;">Edit</a><p>
	`;
	
	if(sd.length > 0){
		let ssd = sd[0];
		let sdc = ssd.company == "" ? "" : `${ssd.company}<br>`;
		let sad2 = ssd.address_2 == "" ? "" : `${ssd.address_2}<br>`;
		
		hh = `
		<p>
		  ${ssd.fname} ${ssd.lname}<br>
		${sdc}
		${ssd.address_1}
		${sad2}<br>
		${ssd.city}<br>
		${ssd.region}<br>
		${ssd.zip}<br>
		${ssd.country.toUpperCase()}<br>
		</p>
		<a href="javascript:void(0)" onclick="editSD(${ssd.xf})" class="btn btn-sm btn-primary cd-summary-btn" style="text-align: right;">Edit</a>
	`;
	}
	
	$('#sd-display').html(hh);
}

const initPDSummary = () => {
	let hh = `
	<p style="margin-top: 20px !important;">Click Edit to add your details <a href="javascript:void(0)" onclick="editPD(0)" class="btn btn-sm btn-primary cd-summary-btn mb-5" style="text-align: right;">Edit</a><p>
	`;
	
	if(pd.length > 0){
		let ppd = pd[0];
		let sdc = ppd.company == "" ? "" : `${ppd.company}<br>`;
		let sad2 = ppd.address_2 == "" ? "" : `${ppd.address_2}<br>`;
		
		hh = `
		<p>
		  ${ppd.fname} ${ppd.lname}<br>
		${sdc}
		${ppd.address_1}
		${sad2}<br>
		${ppd.city}<br>
		${ppd.region}<br>
		${ppd.zip}<br>
		${ppd.country.toUpperCase()}<br>
		</p>
		<a href="javascript:void(0)" onclick="editPD(${ppd.xf})" class="btn btn-sm btn-primary cd-summary-btn" style="text-align: right;">Edit</a>
	`;
	}
	
	$('#pd-display').html(hh);
}


const editSD = (i) => {
	hideElem(['#sd-display']);
    showElem(['#sd-edit']);
}

const refreshSDSummary = (i) => {
	let sd_fname = $('#sd-fname').val(), sd_lname = $('#sd-lname').val(), sd_company = $('#sd-company').val(), sd_country = $('#sd-country').val(),
			   sd_address_1 = $('#sd-address-1').val(), sd_address_2 = $('#sd-address-2').val(), sd_city = $('#sd-city').val(), sd_region = $('#sd-region').val(), sd_zip = $('#sd-zip').val();
	
	let sdc = sd_company == "" ? "" : `${sd_company}<br>`;
		let sad2 = sd_address_2 == "" ? "" : `${sd_address_2}<br>`;
		
	let hh = `
		<p>
		  ${sd_fname} ${sd_lname}<br>
		${sdc}
		${sd_address_1}
		${sad2}<br>
		${sd_city}<br>
		${sd_region}<br>
		${ssd.zip}<br>
		${ssd.country.toUpperCase()}<br>
		</p>
		<a href="javascript:void(0)" onclick="editSD(${ssd.xf})" class="btn btn-sm btn-primary cd-summary-btn" style="text-align: right;">Edit</a>
	`;
	
	hideElem(['#sd-display']);
    showElem(['#sd-edit']);
}
