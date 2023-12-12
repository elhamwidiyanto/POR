<section class="module-container">
        <header>
            <div class="section-title"><?php echo e(__($setting->label)); ?></div>
            <div class="module-actions">
                <button type="submit"class="button"><i class="fa fa-save"></i><span><?php echo e(__('app.buttons.save')); ?></span></button>
                <a href="<?php echo e(route('settings.index', [])); ?>" class="button"><i class="fa fa-ban"></i><span><?php echo e(__('app.buttons.cancel')); ?></span></a>
            </div>
        </header>
        <div class="create">
            <?php echo csrf_field(); ?>

            <?php /*<div class="input">
                <label>Application name</label>
                {!! Form::select('supported', \App\Item::supportedOptions(), array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>*/ ?>

            <div class="input">
                    <?php echo $setting->edit_value; ?>

            </div>

            
        </div>
        <footer>
            <div class="section-title">&nbsp;</div>
            <div class="module-actions">
                <button type="submit"class="button"><i class="fa fa-save"></i><span><?php echo e(__('app.buttons.save')); ?></span></button>
                <a href="<?php echo e(route('settings.index', [])); ?>" class="button"><i class="fa fa-ban"></i><span><?php echo e(__('app.buttons.cancel')); ?></span></a>
            </div>
        </footer>

    </section>
<?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/settings/form.blade.php ENDPATH**/ ?>