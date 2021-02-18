<?php
$title = "Not Found";
$ph = false;
$pcClass = "";
$plugins = [];
$signals = ['okays' => []];
$user = null;
if(Auth::check()) $user = Auth::user();
?>


<?php $__env->startSection('title',"Not Found"); ?>

<?php $__env->startSection('content'); ?>
<section class="error-section d-flex flex-column justify-content-center align-items-center text-center pl-3 pr-3">
                    <h1 class="mb-2 ls-m">Error 404</h1>
                    <img src="<?php echo e(asset('images/404.png')); ?>" alt="error 404" width="609" height="131">
                    <h4 class="mt-7 mb-0 ls-m text-uppercase">Ooopps.! That page can’t be found.</h4>
                    <p class="text-grey font-primary ls-m">It looks like nothing was found at this location.</p>
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-primary mb-4">Go home</a>
                </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/errors/404.blade.php ENDPATH**/ ?>