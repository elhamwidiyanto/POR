<?php $__env->startSection('content'); ?>

<div class="userlist">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a class="user" href="<?php echo e(route('user.set', [$user->id])); ?>">
        <?php if($user->avatar): ?>
        <img class="user-img" src="<?php echo e(asset('/storage/'.$user->avatar)); ?>" />
        <?php else: ?>
        <img class="user-img" src="<?php echo e(asset('/img/heimdall-icon-small.png')); ?>" />
        <?php endif; ?>
        <?php echo e($user->username); ?>

    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/userselect.blade.php ENDPATH**/ ?>