<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="module-container">
            <header>
                <div class="section-title">
                    <?php echo e(__($group->title)); ?>

                </div>
                <?php if($index === 0): ?>
                <div class="module-actions">
                    <a href="<?php echo e(route('items.import', [])); ?>" id="item-import" class="button"><i class="fas fa-file-arrow-up"></i><span><?php echo e(__('import')); ?></span></a>
                    <a href="#export" id="item-export" class="button"><i class="fas fa-file-arrow-down"></i><span><?php echo e(__('export')); ?></span></a>
                </div>
                <?php endif; ?>
            </header>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><?php echo e(__('app.settings.label')); ?></th>
                        <th style="width: 60%;"><?php echo e(__('app.settings.value')); ?></th>
                        <th class="text-center" style="width: 75px;"><?php echo e(__('app.settings.edit')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($group->settings) > 0): ?>
                        <?php $__currentLoopData = $group->settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(__($setting->label)); ?></td>
                                <td>
                                    <?php if($setting->type === "textarea"): ?>
                                    <pre><?php echo e($setting->list_value); ?></pre>
                                    <?php else: ?>
                                    <?php echo $setting->list_value; ?>

                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <?php if((bool)$setting->system !== true): ?>
                                    <a href="<?php echo route('settings.edit', ['id' => $setting->id]); ?>" title="<?php echo e(__('app.settings.edit')); ?> <?php echo $setting->label; ?>" class="secondary"><i class="fa fa-pencil"></i></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>

                        <tr>
                            <td colspan="3" class="form-error text-center">
                                <strong><?php echo e(__('app.settings.no_items')); ?></strong>
                            </td>
                        </tr>
                    <?php endif; ?>

                
                </tbody>
            </table>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/settings/list.blade.php ENDPATH**/ ?>