<?php $__env->startSection('content'); ?>

    <?php echo Form::model($item, ['data-item-id' =>$item->id, 'method' => 'PATCH', 'id' => 'itemform', 'files' => true, 'route' => ['items.update', $item->id]]); ?>

    <?php echo $__env->make('items.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('items.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/items/edit.blade.php ENDPATH**/ ?>