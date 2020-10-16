<?php $__env->startSection('content'); ?>




    <table class="all_table">
        <tr class="all_tr">
            <th class="all_th">Users</th>
            <th class="all_th">House name</th>
            <th class="all_th">Room name</th>
            <th class="all_th">Period</th>
            <th class="all_th">Price</th>
        </tr>

        <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <tr class="all_tr">
                <td class="all_td"><?php echo e($reservation->user->name); ?></td>
                <td class="all_td"><?php echo e($reservation->room->house_owner_room->name); ?></td>
                <td class="all_td"><?php echo e($reservation->room->name); ?></td>
                <td class="all_td"><span class="span_td">OD:</span> <?php echo e($reservation->start_time); ?> <span class="span_td">DO:</span> <?php echo e($reservation->end_time); ?></td>
                <td class="all_td"><?php echo e($reservation->price); ?></td>

            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/Admin/all_reservations.blade.php ENDPATH**/ ?>