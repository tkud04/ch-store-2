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
		//console.log(p);
		cids.push(p.id);
		let nnn = p.name;
		if(p.name.length > 12){
			nnn = `${p.name.substr(0,12)}..`;
		}
		let nn = p.name == "" ? p.model : nnn;
		let imggs = JSON.parse(p.imggs);
		let ppd = p.pd.replace(/(?:\r\n|\r|\n)/g, '<br>'), pd = JSON.parse(ppd);
		let description = `${pd.description}`;
 	
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
												<a href="javascript:void(0)" class="btn-product btn-quickview" title="Quick View">Quick View</a>
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
												<a href="{{$uu}}" class="rating-reviews">( 6 reviews )</a>
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