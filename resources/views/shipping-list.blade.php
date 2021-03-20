<?php
$title = "Shipping List";
$no_header = true;
$pcClass = "";
?>


@extends('layout')

@section('title',$title)


@section('content')
<script>
let xf = "", products = [], pCover = "none", tkOrderHistory = "{{csrf_token()}}",
    orderProducts = [], eoPaymentXF = "new", eoShippingXF = "new";

  

$(document).ready(() => {
	hideElem(["#eo-loading"]);
	
	 @foreach($products as $p)
	  products.push({
		  id: "{{$p['id']}}", 
		  name: "{{$p['name']}}", 
		  model: "{{$p['model']}}", 
		  qty: "{{$p['qty']}}", 
		  amount: "{{$p['data']['amount']}}"
		  });
 @endforeach
 
 @foreach($o['items'] as $i)
	  orderProducts.push({p: {{$i['product_id']}}, q: {{$i['qty']}}});
	  @endforeach
	  
	  refreshProducts({type: "normal", target: "#order-products", t: 'order'});
		   refreshProducts({type: "review", target: "#order-products-review", t: 'order'});
		   refreshProducts({type: "review", target: "#order-products-2", t: 'order'});
});
</script>

<?php
$pd = $o['pd'];
$sd = $o['sd'];
$customer = $o['user'];
$cname = $customer['fname']." ".$customer['lname'];

$payment_method = "Credit Card/Debit Card";
$shipping_method = "Free Shipping";
?>

<div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
	    
	  </div>
      
	  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-6 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fas fa-user"></i> Order Details</h3>
           </div>
           <ul class="list-group list-group-flush">
		   
                <li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Date added"><i class="fas fa-calendar"></i> </span>
				  {{$o['date']}}
				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Payment method"><i class="fas fa-credit-card"></i> </span>
				  {{$payment_method}}
				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Shipping method"><i class="fas fa-truck"></i> </span>
				  {{$shipping_method}}
				</li>
           </ul>
        </div>
	  </div>
	  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-6 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fas fa-user"></i> Customer Details</h3>
           </div>
           <ul class="list-group list-group-flush">
		   
                <li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer name"><i class="fas fa-user"></i> </span>
				  {{ucwords($cname)}}
				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer email"><i class="fas fa-envelope"></i> </span>
				  {{ucwords($customer['email'])}}
				</li>
				<li class="list-group-item">
				  <span class="badge badge-primary p-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Customer phone number"><i class="fas fa-phone"></i> </span>
				  {{ucwords($customer['phone'])}}
				</li>
           </ul>
        </div>
	  </div>
	  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
	    <div class="card">
           <div class="card-body">
                <h3 class="card-title"><i class="fas fa-user"></i> Order #{{$o['reference']}}</h3>
				<div class="table-responsive mb-5">
				  <table class="table table-striped table-bordered first etuk-table">
                                              <thead>
                                                <tr>
                                                  <th>Payment Address</th>
                                                  <th>Shipping Address</th>
                                                </tr>
                                              </thead>
                                              <tbody>
										      <?php
											  
											  ?>
											   <tr>
											     <td>
											      {{strtoupper($cname)}}<br>
											      {{strtoupper($pd['address_1'])}}<br>
											      @if($pd['address_2'] != ""){{strtoupper($pd['address_2'])}}<br>@endif
											      {{strtoupper($pd['city'])." ".$pd['zip']}}<br>
											      {{strtoupper($pd['region'])}}<br>
											      {{ucwords($countries[$pd['country']])}}<br>
											      </td>
												  <td>
											      {{strtoupper($cname)}}<br>
											      {{strtoupper($sd['address_1'])}}<br>
											      @if($pd['address_2'] != ""){{strtoupper($sd['address_2'])}}<br>@endif
											      {{strtoupper($sd['city'])." ".$sd['zip']}}<br>
											      {{strtoupper($sd['region'])}}<br>
											      {{ucwords($countries[$sd['country']])}}<br>
											      </td>											  
											   </tr>
											  <?php
											  
											  ?>
									    	  </tbody>
					</table>
				</div>
				<div class="table-responsive mb-5">
				   <table class="table table-striped table-bordered first etuk-table">
                                              <thead>
                                                <tr>
                                                  <th>Product</th>
                                                  <th>Model</th>
												  <th>Quantity</th>
                                                  <th>Unit price</th>
                                                  <th>Total</th>
                                                </tr>
                                              </thead>
                                              <tbody id="order-products-2">
										        <?php
												
												?>
												 
												<?php
												
												?>
									    	  </tbody>
											 </table>
				</div>
           </div>
		</div>
	  </div>
      </div>
@stop
