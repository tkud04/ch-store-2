<?php
$title = "Product Feed";
$pcClass = "";
?>


<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(() => {
	    let url = "product-feed?d=1";
        const req = new Request(url);
		
		//fetch request
	fetch(req)
	   .then(response => {
		   
		   if(response.status === 200){   
			   return response.blob();
		   }
		   else{
			   Swal.fire({
			 icon: 'error',
             title: "Technical error."
           });
		   }
	   })
	   .catch(error => {
		   Swal.fire({
			 icon: 'error',
             title: error
           });
	   })
	   .then(res => {
		   download(res,"product-feed.xml");
			
	   }).catch(error => {
		    Swal.fire({
			 icon: 'error',
             title: error
           });
	   });
		
        });
    </script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('blank-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/feed.blade.php ENDPATH**/ ?>