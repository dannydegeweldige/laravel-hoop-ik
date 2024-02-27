<?php $__currentLoopData = $planets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($planet['name']); ?></h2>
    <?php echo e($planet['description']); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\danny\example-app\resources\views/planets.blade.php ENDPATH**/ ?>