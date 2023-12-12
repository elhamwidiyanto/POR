<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($apps->first()): ?>
        <?php echo $__env->make('sortable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
    <?php else: ?>
    <div class="message-container2">
            <div class="alert alert-danger">
                    <p><?php echo __('app.dash.no_apps', 
                        [
                            'link1' => '<a href="'.route('items.create', []).'">'.__('app.dash.link1').'</a>', 
                            'link2' => '<a id="pin-item" href="">'.__('app.dash.link2').'</a>'
                        ]); ?></p>
                    </div>
                    
    </div>
        <div id="sortable">
        <?php echo $__env->make('add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/welcome.blade.php ENDPATH**/ ?>