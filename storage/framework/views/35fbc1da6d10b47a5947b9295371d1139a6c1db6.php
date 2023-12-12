<?php $__env->startSection('content'); ?>

    <?php echo Form::model($setting, ['method' => 'PATCH', 'files' => true, 'route' => ['settings.edit', $setting->id]]); ?>

    <?php echo $__env->make('settings.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/settings/edit.blade.php ENDPATH**/ ?>