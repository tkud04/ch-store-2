<?php
$title = "Orders";
$ph = true;
$pcClass = "";
?>
@extends('layout')

@section('content')
				<div class="container pt-1">
					<div class="row">
								<div class="col-lg-12 mb-4">
								
							   <?php
							    if(count($orders) > 0)
								{
							   ?>
							       <div style="overflow-x: auto !important;">
								<table class="table table-responsive" style="align: center !important; width: 100% !important;">
											<thead>
											  <tr>
												<th>Details</th>
								                <th><span>Total</span></th>
								               <th><span>Status</span></th>
								              <th></th>
								             <tr>
											</thead>
											<tbody>
											<?php
								
				                   foreach($orders as $o)
									{
										$items = $o['items'];
										$ou = url('order')."?xf=".$o['reference'];
					                 
				                 ?>
												<tr style="margin-bottom: 5px;">
													<td class="product-name">
                                                      <div class="product-name-section">
                                                            <p class="mb-2">Reference: <b class="badge badge-success">{{$o['reference']}}</b></p>
										          <p class="mb-2">Date ordered: {{$o['date']}}</p>   
                                                     <?php
										    for($x = 0; $x < count($items); $x++)
											{
												$i = $items[$x];
												$op = $i['product'];
												$pname = "Removed product"; $pmodel = "REMOVED";
												$imggs = [asset('images/avatar-2.png')]; $uu = "javascript:void(0)";
												
												if(count($op) > 0)
												{
													$pname = $op["name"]; $pmodel = $op["model"];
												    $imggs = $op['imggs']; $uu = url('product')."?xf=".$pmodel;
												}
												
												
										   ?>                                      
												<a href="{{$uu}}">
													<img src="{{$imggs[0]}}" width="100" height="100" alt="{{$pname}}">
												</a>
											<?php
									        }
										   ?>
											</div>
                                           </td>
										  <td class="product-name"><span class="amount">&#0163;{{number_format($o['amount'],2)}}</span></td>
										  <td class="product-name">
									       <span class="badge badge-success">{{strtoupper($statuses[$o['status']])}}</span>
								          </td>
								         <td class="product-name">
									      <a href="{{$ou}}" class="btn-product"><span>VIEW</span></a>
								         </td>
												</tr>
												
											</tbody>
											<?php
									       }
								         ?>
										</table>
								              </div>
								<?php
								}
								else
								{
								?>
								  <p class=" b-2">No order has been made yet.</p>
								  <a href="{{url('shop')}}" class="btn btn-primary">Go Shop</a>
								<?php
								}
								?>
							    </div>
							  </div>
				</div>
@stop
