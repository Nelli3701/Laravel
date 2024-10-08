

<?php $__env->startSection('content'); ?>
<p><?php echo e($name); ?></p>
<?php if($age > 18): ?>
<p><?php echo e($age); ?></p>
<?php else: ?>
<p>Ваш возраст меньше 18 лет</p>
<?php endif; ?>
<p><?php echo e($position); ?></p>
<p><?php echo e($address); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Виктория\Курсы\Laravel\hw4\resources\views/home.blade.php ENDPATH**/ ?>