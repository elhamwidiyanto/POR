    <section class="module-container">
        <header>
            <div class="section-title"><?php echo e(__('app.apps.preview')); ?></div>
            <div class="module-actions">
            <div class="toggleinput">
                <label class="name"><?php echo e(__('app.apps.pinned')); ?></label>
                <?php echo Form::hidden('pinned', '0'); ?>

                <label class="switch">
                    <?php
                    $checked = false;
                    if(isset($item->pinned) && (bool)$item->pinned === true) $checked = true;
                    $set_checked = ($checked) ? ' checked="checked"' : '';
                    ?>                   
                    <input type="checkbox" name="pinned" value="1"<?php echo $set_checked;?> />
                    <span class="slider round"></span>
                </label>
            </div>
                <button type="submit"class="button"><i class="fa fa-save"></i><span><?php echo e(__('app.buttons.save')); ?></span></button>
                <a href="<?php echo e(route('items.index', [])); ?>" class="button"><i class="fa fa-ban"></i><span><?php echo e(__('app.buttons.cancel')); ?></span></a>
            </div>
        </header>

        <div id="tile-preview" class="create">
                <div class="">
                <?php echo $__env->make('items.preview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="appoptions">
                    <div class="optdetails">
                        <div><button class="dark"><?php echo e(__('app.apps.apptype')); ?></button></div>
                        <div class="optvalue">
                            <div class="input">
                                <?php echo Form::select('appid', App\Application::applist(), null, array('class' => 'form-control config-item', 'id' => 'apptype', 'data-config' => 'type')); ?>

                            </div>
                        </div>
                    </div>
                    <div id="searchwebsite" class="optdetails">
                        <div><button class="dark"><?php echo e(__('app.apps.website')); ?></button></div>
                        <div class="optvalue">
                            <div class="input">
                            <?php echo Form::text('website', $item->url ?? null, array('placeholder' => __('app.apps.website'), 'id' => 'website', 'class' => 'form-control')); ?>

                            <small class="help">Don't forget http(s)://</small>    
                            </div>
                            <div><button class="btn">Go</button></div>
                        </div>
                    </div>
                </div>
                <div id="websiteiconoptions"></div>
            </div>


            <header style="border-top: 1px solid #dbdce3;">
                <div class="section-title"><?php echo e(__('app.apps.add_application')); ?></div>
            </header>


            <div id="create" class="create">
            <?php echo csrf_field(); ?>

            <div class="input">
                <label><?php echo e(__('app.apps.application_name')); ?> *</label>
                <?php echo Form::text('title', null, array('placeholder' => __('app.apps.title'), 'id' => 'appname', 'class' => 'form-control')); ?>

            </div>

            <div class="input">
                <label><?php echo e(__('app.apps.colour')); ?> *</label>
                <?php echo Form::text('colour', $item->colour ?? '#161b1f', array('placeholder' => __('app.apps.hex'), 'id' => 'appcolour', 'class' => 'form-control color-picker set-bg-elem')); ?>

            </div>

            <div class="input">
                <label><?php echo e(strtoupper(__('app.url'))); ?></label>
                <?php echo Form::text('url', $item->url ?? null, array('placeholder' => __('app.url'), 'id' => 'appurl', 'class' => 'form-control')); ?>

                <small class="help">Don't forget http(s)://</small>
            </div>

            <div class="input">
                <label><?php echo e(__('app.apps.tags')); ?> (<?php echo e(__('app.optional')); ?>)</label>
                <?php echo Form::select('tags[]', $tags, $current_tags, ['class' => 'tags', 'multiple']); ?>

            </div>

            <div class="input">
                <div class="icon-container">
                    <div id="appimage">
                    <?php if(isset($item->icon) && !empty($item->icon) || old('icon')): ?>
                    <?php
                        if(isset($item->icon)) $icon = $item->icon;
                        else $icon = old('icon');
                    ?>
                    <img src="<?php echo e(asset('storage/'.$icon)); ?>" />
                    <?php echo Form::hidden('icon', $icon, ['class' => 'form-control']); ?>

                    <?php else: ?>
                    <img src="<?php echo e(asset('/img/heimdall-icon-small.png')); ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="upload-btn-wrapper">
                        <button class="btn"><?php echo e(__('app.buttons.upload')); ?> </button>
                        <input type="file" id="upload" name="file" />
                    </div>
                </div>
            </div>
        </div>

        <header style="border-top: 1px solid #dbdce3; width: 100%;">
            <div class="section-title"><?php echo e(__('app.apps.description')); ?></div>
        </header>
        <div class="create">
            <div class="textarea">
                <textarea name="appdescription" id="appdescription"><?php echo e($item->appdescription ?? ''); ?></textarea>
            </div>



            
            <?php if(isset($item) && $item->enhanced()): ?>

            <div id="sapconfig" style="display: block;">
                <?php if(isset($item)): ?>
                <?php echo $__env->make('SupportedApps::'.App\Item::nameFromClass($item->class).'.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>

            <?php elseif(old('class') && App\Item::isEnhanced(old('class'))): ?>

            <div id="sapconfig" style="display: block;">
                <?php echo $__env->make('SupportedApps::'.App\Item::nameFromClass(old('class')).'.config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php else: ?>

            <div id="sapconfig"></div>
            
            <?php endif; ?>
            
        </div>
        <footer>
            <div class="section-title">&nbsp;</div>
            <div class="module-actions">
                <button type="submit"class="button"><i class="fa fa-save"></i><span><?php echo e(__('app.buttons.save')); ?></span></button>
                <a href="<?php echo e(route('items.index', [])); ?>" class="button"><i class="fa fa-ban"></i><span><?php echo e(__('app.buttons.cancel')); ?></span></a>
            </div>
        </footer>

    </section>


<?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/items/form.blade.php ENDPATH**/ ?>