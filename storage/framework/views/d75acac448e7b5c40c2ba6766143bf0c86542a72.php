<?php $__env->startSection('content'); ?>



    <table class="profile_table">

        <tr class="profile_tr">

            <th class="profile_th">Naziv kuce</th>
            <th class="profile_th">Adresa</th>

        </tr>
        <?php $__currentLoopData = $user->houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr class="profile_tr">
                <td class="profile_td"><?php echo e($house->name); ?></td>
                <td class="profile_td"><?php echo e($house->address); ?></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/auth/profile.blade.php ENDPATH**/ ?>