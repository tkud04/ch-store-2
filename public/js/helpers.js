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
		show = false;
		Swal.fire({
			 icon: 'error',
             title: "Online payment is currently not available."
        });
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