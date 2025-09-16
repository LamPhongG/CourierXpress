<?php $__env->startSection('content'); ?>
<div class="flex items-start justify-center min-h-screen bg-gray-100">
    <div class="text-center mt-12">
        <h1 class="text-5xl font-bold text-orange-600 mb-6">
           <?php echo e(__('messages.company_name')); ?>

        </h1>
        
<div class="bg-gray-100 min-h-screen flex flex-col items-center pt-6">

    
    <div class="flex space-x-4 mb-8">
        <div class="bg-white shadow-lg px-6 py-6 text-center w-48 cursor-pointer hover:shadow-xl transition text-gray-800">
            <div class="text-3xl mb-2">🧾</div>
            <p class="font-bold text-sm"><?php echo e(__('messages.pricing')); ?></p>
        </div>

        
        <div class="bg-orange-600 shadow-lg px-6 py-6 text-center w-48 cursor-pointer hover:shadow-xl transition text-white">
            <div class="text-3xl mb-2">📦</div>
            <p class="font-bold text-sm"><?php echo e(__('lalamove.track_order')); ?></p>
        </div>

        <div class="bg-white shadow-lg px-6 py-6 text-center w-48 cursor-pointer hover:shadow-xl transition text-gray-800">
            <div class="text-3xl mb-2">🚚</div>
            <p class="font-bold text-sm"><?php echo e(__('lalamove.delivery')); ?></p>
        </div>
    </div>

    
    <form action="<?php echo e(route('tracking')); ?>" method="GET" class="flex">
        <input type="text" name="tracking_id" placeholder="<?php echo e(__('lalamove.tracking_code')); ?>"
               class="px-4 py-3 w-96 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
        <button type="submit"
                class="bg-orange-600 text-white px-6 py-3 font-bold flex items-center justify-center hover:bg-orange-700 transition ">
            <?php echo e(__('messages.view_more')); ?> →
        </button>
    </form>

</div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\CourierXpress\resources\views/home.blade.php ENDPATH**/ ?>