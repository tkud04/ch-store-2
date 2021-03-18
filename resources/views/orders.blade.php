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
							   
								 <table class="shop-table wishlist-table mt-2 mb-5">
								    <thead>
									  <tr>
										<th>Details</th>
								        <th class="product-price"><span>Total</span></th>
								        <th class="product-stock-status"><span>Status</span></th>
								        <th class="product-add-to-cart"></th>
									  </tr>
									</thead>
							   <?php
									foreach($orders as $o)
									{
										$items = $o['items'];
										$ou = url('order')."?xf=".$o['reference'];
							   ?>
								
								    <tbody>
									 <tr>
									    <td class="product-name">
										    <p class="mb-2">Reference: <b class="badge badge-success">{{$o['reference']}}</b></p>
										    <p class="mb-2">Date: {{$o['date']}}</p>
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
										   <div class="mb-2">
										   <a href="{{$uu}}" class="mb-2">
										     <figure>
											  <img src="{{$imggs[0]}}" width="60" height="60" alt="{{$pname}}">
										     </figure>
									       </a>
									       <a href="{{$uu}}">{{$pname}}</a> <b class="badge badge-success">x{{$i['qty']}}</b>
										   </div>
										   <?php
									        }
										   ?>
								        </td>
								<td class="product-price">
									<span class="amount">&#0163;{{number_format($o['amount'],2)}}</span>
								</td>
								<td class="product-stock-status">
									<span class="badge badge-success">{{strtoupper($statuses[$o['status']])}}</span>
								</td>
								<td class="product-add-to-cart">
									<a href="{{$ou}}" class="btn-product"><span>VIEW</span></a>
								</td>
									  </tr>
									</tbody>
								
								<?php
									}
								?>
								  </table>
								  
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
