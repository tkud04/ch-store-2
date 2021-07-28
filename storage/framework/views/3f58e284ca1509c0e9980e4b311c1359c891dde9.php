<?php
$title = "Checkout";
$ph = true;
$pcClass = "";
?>


<?php $__env->startSection('scripts'); ?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script>

let pd = [], sd = [], ppd = null, pm = "none", ct = "", cts = [1,2,3,4,5,6];

$(document).ready(() => {

getCT();
initCT();

<?php if(count($pd) > 0): ?>
  <?php $__currentLoopData = $pd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   pd.push({
	  xf: "<?php echo e($p['id']); ?>",
	  fname: "<?php echo e($p['fname']); ?>",
	  lname: "<?php echo e($p['lname']); ?>",
	  company: "<?php echo e($p['company']); ?>",
	  address_1: "<?php echo e($p['address_1']); ?>",
	  address_2: "<?php echo e($p['address_2']); ?>",
	  city: "<?php echo e($p['city']); ?>",
	  region: "<?php echo e($p['region']); ?>",
	  zip: "<?php echo e($p['zip']); ?>",
	  country: "<?php echo e($p['country']); ?>",
   });
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(count($sd) > 0): ?>
  <?php $__currentLoopData = $sd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   sd.push({
	  xf: "<?php echo e($p['id']); ?>",
	  fname: "<?php echo e($p['fname']); ?>",
	  lname: "<?php echo e($p['lname']); ?>",
	  company: "<?php echo e($p['company']); ?>",
	  address_1: "<?php echo e($p['address_1']); ?>",
	  address_2: "<?php echo e($p['address_2']); ?>",
	  city: "<?php echo e($p['city']); ?>",
	  region: "<?php echo e($p['region']); ?>",
	  zip: "<?php echo e($p['zip']); ?>",
	  country: "<?php echo e($p['country']); ?>",
   });
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
 
    let hh = ['#checkout-cd-loading','#card-2','#checkout-loading','#checkout-tab-2','#checkout-tab-3','#checkout-tab-4','#checkout-tab-5','#checkout-tab-6'];
	
  hh.forEach((x,i) => {$(x).hide();});
  
  initSDSummary();
});
</script>
<div class="container">
  <div class="row">
     <div class="col-md-12">
       <div class="cd-wrapper">
		 <?php echo $__env->make('checkout-header',['number' => 2], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
	     <div class="cd-content">
		  <h2 class="cd-caption">select shipping method:</h2>
          <div class="row">
		     
		     <div class="col-md-12">
			    <table class="cd-table">
                  <tbody>
				   <tr>
                    <th>  <img src="images/truck.png" style="width: 40px; height: 48px; margin-right: 10px; max-width: none !important;"></th>
                    <td>
                      <span class="cd-table-span">Free Delivery</span>
                    </td>
                  </tr>
                 </tbody>
				</table>
			 </div>
			 <div class="col-md-12 mt-5">
			    <h2 class="cd-caption">details for delivery:</h2>
				<div style="border: 3px solid #000!important; padding: 8px!important;">
				  <div id="sd-display"></div>
				</div>
		     </div>	
			 <div class="col-md-12 mt-5">
			   <h2 class="cd-caption">delivery option:</h2>
			   <div class="row">
			     <div class="col-md-6 mt-5">
				   <div style="border: 3px solid #000!important; padding: 8px!important;">
				     <div id="scd-display"></div>
				   </div>
		         </div>
			     <div class="col-md-6 mt-5">
				   <div style="border: 3px solid #000!important; padding: 8px!important;">
				     <div id="scd-display"></div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/checkout.blade.php ENDPATH**/ ?>