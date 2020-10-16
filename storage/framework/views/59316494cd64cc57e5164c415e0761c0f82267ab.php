<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>

    <form action="/house/store" method="post">
        <?php echo csrf_field(); ?>
        unesi ime

        <input type="text" name="name"> <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <br>
        unesi opis
        <input type="text" name="description"> <br>
        unesi adresu
        <input type="text" name="address"><br>
        unesi telefon
        <input type="text" name="phone"><br>
        <input type="submit">
    </form>







    <?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.lay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/House/add.blade.php ENDPATH**/ ?>