@extends('layout')

@section('title',"Dashboard")

@section('styles')
  <!-- DataTables CSS -->
  <link href="lib/datatables/css/buttons.bootstrap.min.css" rel="stylesheet" /> 
  <link href="lib/datatables/css/buttons.dataTables.min.css" rel="stylesheet" /> 
  <link href="lib/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet" /> 
@stop

@section('content')
   <!--start of middle sec-->
<div class="middle-sec wow fadeIn animated animated" data-wow-offset="10" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s;">
    <div id="particles"><canvas class="pg-canvas" width="1349" height="450" style="display: block;"></canvas>
      <div id="not-found" class="wow fadeInDown text-center container animated animated" style="visibility: visible;">
        <div class="reset">
          <h2 class="text-primary text-uppercase">Welcome to your Dashboard</h2>
          <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and edit your password and account details</p>
		  <br><br><br>
           <div class="row" style="margin-top: 10px;">
		    <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card text-center" style="">
                <div class="card-body">         
                  <div class="">
                    <h5 class="card-title"><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i></h5>
                    <p class="card-text">View/edit your account</p>
                    <a href="{{url('profile')}}" class="btn btn-primary">View profile</a>
                  </div>
               </div>
             </div>
            </div>
			<div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card text-center" style="">
                <div class="card-body">         
                  <div class="">
                    <h5 class="card-title"><i class="fa fa-heart fa-2x" aria-hidden="true"></i></h5>
                    <p class="card-text">View your wishlist</p>
                    <a href="{{url('wishlist')}}" class="btn btn-primary">wishlist</a>
                  </div>
               </div>
             </div>
            </div>
			<div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card text-center" style="">
                <div class="card-body">         
                  <div class="">
                    <h5 class="card-title"><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i></h5>
                    <p class="card-text">View your compare list</p>
                    <a href="{{url('compare')}}" class="btn btn-primary">compare</a>
                  </div>
               </div>
             </div>
            </div><div class="col-lg-3 col-md-3 col-sm-12">
              <div class="card text-center" style="">
                <div class="card-body">         
                  <div class="">
                    <h5 class="card-title"><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i></h5>
                    <p class="card-text">View your recent orders</p>
                    <a href="{{url('orders')}}" class="btn btn-primary">View orders</a>
                  </div>
               </div>
             </div>
            </div>
          
		   </div>
		   <br><br><br>
           <div class="row" style="margin-top: 10px;">
		     <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card text-center" style="">
                <div class="card-body">         
                  <div class="">
                    <h5 class="card-title"><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i></h5>
                    <p class="card-text">Recent Orders as at <?=date("jS F, Y")?></p>
                    <div class="card-body table-responsive m-t-40 wow fadeInUp">
                	   <table class="table ace-table">
				   <thead>
                        <tr>
                                    <th>Date</th>
                                    <th>Reference #</th>
                                    <th>Items</th>
                                    <th>Amount</th>
                                    <th>Payment code</th>
                                    <th>Status</th>                                                                       
                                    <th>Actions</th>                                                                       
                                </tr>
                       </thead>
					<tbody>
					<?php
					  if(count($orders) > 0)
					  {
						 foreach($orders as $o)
						 {
							 if($o['date'] == date("jS F, Y"))
							 {
							 $items = $o['items'];
							 $totals = $o['totals'];
							 $statusClass = $o['status'] == "paid" ? "success" : "danger";
							 $uu = "#";
				    ?>
					 <tr>
					   <td>{{$o['date']}}</td>
					   <td>{{$o['reference']}}</td>
					    <td>
						<?php
						 foreach($items as $i)
						 {
							 $product = $i['product'];
							 $qty = $i['qty'];
							 $pu = url('product')."?sku=".$product['sku'];
							 $tu = url('track')."?o=".$o['reference'];
						 ?>
						 <a href="{{$pu}}" target="_blank">{{$product['sku']}}</a> (x{{$qty}})<br>
						 <?php
						 }
						?>
					   </td>
					   <td>&#8358;{{number_format($o['amount'],2)}}</td>		  
					   <td>{{$o['payment_code']}}</td>
					   <td><span class="label label-{{$statusClass}}">{{strtoupper($o['status'])}}</span></td>
					   <td><a class="btn btn-primary" href="{{$tu}}">Track</span></td>
					 </tr>
					<?php
						 }
						 }  
					  }
                    ?>						  
					</tbody>
				  </table>
				</div>
                  </div>
               </div>
             </div>
            </div>
		   </div>
        </div>
      </div>
    </div>
  </div>
  <!--end of middle sec--> 
    
@stop


@section('scripts')
<!-- Datatables JS -->
  <script src="lib/datatables/js/datatables.min.js"></script>
    <script src="lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="lib/datatables/js/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="lib/datatables/js/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="lib/datatables/js/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="lib/datatables/js/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="lib/datatables/js/datatables-init.js"></script>
  
@stop