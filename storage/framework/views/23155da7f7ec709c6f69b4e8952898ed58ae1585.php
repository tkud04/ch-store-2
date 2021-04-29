<?php
$title = "Welcome";
$pcClass = "";
?>






<?php $__env->startSection('content'); ?>

<?php
$ccategories = [
['name' => "Electronics",'category' => "electronics"],
['name' => "Accessories &amp; jewellery",'category' => "accessories-jewellery"],
['name' => "Musical instruments",'category' => "musical-instruments"],
['name' => "Shoes",'category' => "shoes"],
['name' => "Fashion",'category' => "fashion"],
['name' => "Bags",'category' => "bags"],
['name' => "Underwears",'category' => "underwears"],
];
?>

 <?php echo $__env->make('banner-2',['banners' => $banners], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/index-2.blade.php ENDPATH**/ ?>