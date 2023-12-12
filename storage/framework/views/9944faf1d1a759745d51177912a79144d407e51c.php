<?php $__env->startSection('content'); ?>
<?php
$user = \App\User::currentUser();
?>
<form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="userlist">
    
        <div class="user" href="<?php echo e(route('user.set', [$user->id])); ?>">
            <?php if($user->avatar): ?>
            <img class="user-img" src="<?php echo e(asset('/storage/'.$user->avatar)); ?>" />
            <?php else: ?>
            <img class="user-img" src="<?php echo e(asset('/img/heimdall-icon-small.png')); ?>" />
            <?php endif; ?>
            <?php echo e($user->username); ?>

            <input id="password" type="password" class="form-control" name="password" autofocus required>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
        
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/auth/login.blade.php ENDPATH**/ ?>