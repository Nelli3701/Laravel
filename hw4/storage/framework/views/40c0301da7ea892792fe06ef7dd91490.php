

<?php $__env->startSection('content'); ?>
<p><?php echo e($address); ?></p>
<p><?php echo e($post_code); ?></p>
<p><?php echo e($phone); ?></p>
<?php if($email): ?>
<p><?php echo e($email); ?></p>
<?php else: ?>
<p>Адрес электронной почты не указан</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Виктория\Курсы\Laravel\hw4\resources\views/contacts.blade.php ENDPATH**/ ?>