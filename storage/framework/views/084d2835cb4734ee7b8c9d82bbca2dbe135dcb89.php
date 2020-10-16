<?php $__env->startSection('content'); ?>

    <div class="contact_main_login">
        <div class="contact_section_login">
            <div class="wrapper_login">
                <div class="title_login">
                    <h1>LOGOVANJE</h1>
                </div>
                <div class="contact-form_login">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="input-fields_login">
                            <input  type="email" name="email" class="input" placeholder="Email adresa">
                            <input type="password" name="password" class="input" placeholder="Lozinka">

                            <?php if(Route::has('password.request')): ?>
                                <a class="forgot_pass_login" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Zaboravio si nalog?')); ?>

                                </a>
                            <?php endif; ?>

                            <button type="submit" class="btn">Uloguj se</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.lay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/auth/login.blade.php ENDPATH**/ ?>