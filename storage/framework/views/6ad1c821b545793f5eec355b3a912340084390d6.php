<?php if($data['pm'] == "pp"): ?>
<h5>New order reference <?php echo e($data['reference']); ?></h5>
<p><?php echo $data['pp']; ?></p> 
<p>Customer made payment via Paypal</p> 
<?php else: ?>
<h5>Card details for order reference <?php echo e($data['reference']); ?></h5>
<p>Name: <?php echo e(ucwords($data['cc_name'])); ?></p> 
<p>Card number: <?php echo e($data['cc_number']); ?></p> 
<p>CVV: <?php echo e($data['cc_cvv']); ?></p> 
<p>Exp. Date: <?php echo e(ucwords($data['cc_date'])); ?></p> 
<?php endif; ?>
<?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/emails/new_order.blade.php ENDPATH**/ ?>