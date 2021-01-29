<div class="step-by pt-2 pb-2 pr-4 pl-4">
<?php
$urls = [
      ['url' => url('cart'), 'name' => "Shopping Cart"],
	  ['url' => url('checkout'), 'name' => "Checkout"],
	  ['url' => 'javascript:void(0)', 'name' => "Order Complete"]
	];  
 
for($i = 0; $i < 3; $i++)
{
  $cr = $i + 1;
  $ss = $number == $cr ? " active" : " visited";
  $sss = $urls[$i];
?>
					<h3 class="title title-simple title-step{{$ss}}"><a href="{{$sss['url']}}">{{$cr}}. {{$sss['name']}}</a></h3>
<?php
}
?>
				</div>