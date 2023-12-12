                    <section class="item-container<?php echo e($app->droppable . ' ' . $app->getTagClass()); ?>" data-name="<?php echo e($app->title); ?>" data-id="<?php echo e($app->id); ?>">
                        <div class="item" style="background-color: <?php echo e($app->colour); ?>">
                            <div class="app-icon-container">
                                <?php if($app->icon): ?>
                                <img class="app-icon" src="<?php echo e(asset('/storage/'.str_replace('supportedapps', 'icons', $app->icon))); ?>" />
                                <?php else: ?>
                                <img class="app-icon" src="<?php echo e(asset('/img/heimdall-icon-small.png')); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="details">
                                <div class="title<?php echo e(title_color($app->colour)); ?>"><?php echo e($app->title); ?></div>
                                <?php if($app->enabled()): ?>
                                <div data-id="<?php echo e($app->id); ?>" data-dataonly="<?php echo e($app->getconfig()->dataonly ?? '0'); ?>" class="livestats-container<?php echo e(title_color($app->colour)); ?>"></div>
                                <?php endif; ?>
                            </div>
                            <a rel="noopener noreferrer" onauxclick="this.blur();" onclick="this.blur();" class="link<?php echo e(title_color($app->colour)); ?>"<?php echo $app->link_target; ?> href="<?php echo e($app->link); ?>"><i class="fas <?php echo e($app->link_icon); ?>"></i></a>
                            <?php /*
                            @if($app->enhanced() === true && (bool)$app->getConfig()->enabled === true)
                            <div class="tile-actions refresh">
                                <div class="icon">
                                    <i class="fas fa-arrow-rotate-right"></i>
                                </div>
                                Refresh Stats
                            </div>
                            @endif
                            */ ?>
                        </div>
                        <a class="item-edit" href="<?php echo e(route($app->link_type.'.edit', [ $app->id ])); ?>"><i class="fas fa-pencil"></i></a>
                        <?php if((string)$app->appdescription !== ''): ?><div class="tooltip"><?php echo e($app->appdescription); ?></div><?php endif; ?>
                    </section>
<?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/item.blade.php ENDPATH**/ ?>