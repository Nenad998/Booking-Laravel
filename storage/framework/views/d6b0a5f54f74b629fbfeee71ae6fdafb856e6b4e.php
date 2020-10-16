<?php $__env->startSection('content'); ?>

<style>



</style>




<table class="user_table">
    <tr class="user_tr">
        <th class="user_th">Naziv sobe</th>
        <th class="user_th">Naziv kuce</th>
        <th class="user_th">Period</th>
        <th class="user_th">Cena sobe</th>
        <th class="user_th">Ukupna cena</th>
    </tr>

    <?php $__currentLoopData = auth()->user()->reservation_model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <tr>
        <td class="user_td"><?php echo e($reservation->room->name); ?></td>
         <td class="user_td"><?php echo e($reservation->room->house_owner_room->name); ?></td>
        <td class="user_td"><span class="span_td">OD: </span> <?php echo e($reservation->start_time); ?> <span class="span_td">DO:</span> <?php echo e($reservation->end_time); ?></td>
        <td class="user_td"><?php echo e($reservation->price); ?></td>
        <td class="user_td"><?php echo e($total= (strtotime($reservation->end_time) - strtotime($reservation->start_time)) / (60 * 60 * 24) * $reservation->price); ?></td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.lay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/auth/reservations.blade.php ENDPATH**/ ?>