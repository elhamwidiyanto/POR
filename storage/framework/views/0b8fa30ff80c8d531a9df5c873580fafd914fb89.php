    <section class="module-container">
        <header>
            <div class="section-title"><?php echo e(__('app.user.add_user')); ?></div>
            <div class="module-actions">
                <button type="submit"class="button"><i class="fa fa-save"></i><span><?php echo e(__('app.buttons.save')); ?></span></button>
                <a href="<?php echo e(route('users.index', [])); ?>" class="button"><i class="fa fa-ban"></i><span><?php echo e(__('app.buttons.cancel')); ?></span></a>
            </div>
        </header>
        <div id="create" class="create">
            <?php echo csrf_field(); ?>


            <div class="input">
                <label><?php echo e(__('app.user.username')); ?> *</label>
                <?php echo Form::text('username', null, array('placeholder' => __('app.user.username'), 'id' => 'appname', 'class' => 'form-control')); ?>

                <hr />
            </div>
            <div class="input">
                <label><?php echo e(__('app.user.email')); ?> *</label>
                <?php echo Form::text('email', null, array('placeholder' => 'email@test.com','class' => 'form-control')); ?>

                <hr />
            </div>
            <div class="input">
            <label><?php echo e(__('app.user.avatar')); ?></label>
                <div class="icon-container">
                    <div id="appimage">
                    <?php if(isset($user->avatar) && !empty($user->avatar) || old('avatar')): ?>
                    <?php
                        if(isset($user->avatar)) $avatar = $user->avatar;
                        else $avatar = old('avatar');
                    ?>
                    <img style="max-width: 115px" src="<?php echo e(asset('storage/'.$avatar)); ?>" />
                    <?php echo Form::hidden('avatar', $avatar, ['class' => 'form-control']); ?>

                    <?php else: ?>
                    <img style="max-width: 115px" src="/img/heimdall-icon-small.png" />
                    <?php endif; ?>
                    </div>
                    <div class="upload-btn-wrapper">
                        <button class="btn"><?php echo e(__('app.buttons.upload')); ?> </button>
                        <input type="file" id="upload" name="file" />
                    </div>
                </div>
            </div>

        <div style="margin-top: -40px; width: 100%; padding: 0" class="create">
            <div class="input">
                <label><?php echo e(__('app.apps.password')); ?> *</label>
                <?php echo Form::password('password', null, array('class' => 'form-control')); ?>

                <hr />

            </div>
            <div class="input">
                <label><?php echo e(__('app.user.password_confirm')); ?> *</label>
                <?php echo Form::password('password_confirmation', null, array('class' => 'form-control')); ?>

            </div>
        </div>

        <div class="input">
                <label><?php echo e(__('app.user.secure_front')); ?></label>
                <?php echo Form::hidden('public_front', '0'); ?>

                <label class="switch">
                    <?php
                    $checked = true;
                    if(isset($user->public_front) && (bool)$user->public_front === false) $checked = false;
                    $set_checked = ($checked) ? ' checked="checked"' : '';
                    ?>                   
                    <input type="checkbox" name="public_front" value="1"<?php echo $set_checked;?> />
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="input">
                    <label><?php echo e(__('app.user.autologin')); ?></label>
                    <?php echo Form::hidden('autologin_allow', '0'); ?>

                    <label class="switch">
                        <?php
                        $checked = false;
                        if(isset($user->autologin) && !empty($user->autologin)) $checked = true;
                        $set_checked = ($checked) ? ' checked="checked"' : '';
                        ?>                   
                        <input type="checkbox" name="autologin_allow" value="1"<?php echo $set_checked;?> />
                        <span class="slider round"></span>
                    </label>
                    
                </div>
    
                        
        </div>
        <footer>
            <div class="section-title">&nbsp;</div>
            <div class="module-actions">
                <button type="submit"class="button"><i class="fa fa-save"></i><span><?php echo e(__('app.buttons.save')); ?></span></button>
                <a href="<?php echo e(route('users.index', [])); ?>" class="button"><i class="fa fa-ban"></i><span><?php echo e(__('app.buttons.cancel')); ?></span></a>
            </div>
        </footer>

    </section>


<?php /**PATH C:\xampp\htdocs\PORTAL\resources\views/users/form.blade.php ENDPATH**/ ?>