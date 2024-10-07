<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о сотрудниках</title>
</head>

<body>
    <h1>Информация о сотрудниках из БД</h1>

    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($emp->name); ?> <?php echo e($emp->surname); ?>, <?php echo e($emp->email); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html><?php /**PATH D:\Виктория\Курсы\Laravel\hw3\resources\views/employees.blade.php ENDPATH**/ ?>