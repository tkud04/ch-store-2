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
					<h3 class="title title-simple title-step<?php echo e($ss); ?>"><a href="<?php echo e($sss['url']); ?>"><?php echo e($cr); ?>. <?php echo e($sss['name']); ?></a></h3>
<?php
}
?>
				</div><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/checkout-header.blade.php ENDPATH**/ ?>