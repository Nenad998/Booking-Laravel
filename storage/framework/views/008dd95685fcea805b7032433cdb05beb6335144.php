<?php $__env->startSection('content'); ?>

    <img class="img_admin" src="/images/<?php echo e($house->image); ?>">
    <div class="contact_main">
        <div class="contact_section">
            <p class="single_house_admin"><strong><?php echo e($house->description); ?></strong></p>
            <p class="single_house_admin">Naziv kuce je: <b><?php echo e($house->name); ?></b></p>
            <p class="single_house_admin">Vlasnik kuce je: <b><?php echo e($house->owner->name); ?></b></p>
            <p class="single_house_admin">Adresa: <b><?php echo e($house->address); ?></b></p>

        </div>
    </div>



    <div class="add-house"><a class="add" href="/add_room/<?php echo e($house->id); ?>">DODAJ SOBU</a></div>
    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mainGroup">

            <div class="name">

                <div><a class="name_admin" href="<?php echo e(route('admin.single_room', $room->id)); ?>"><?php echo e($room->name); ?></a> </div>


            </div>


            <div class="edit">
                <div><a class="edit_admin" href="<?php echo e(route('admin.edit_room', $room->id)); ?>">edit</a></div>
            </div>

            <div class="delete">
                <div><a class="delete_admin" href="<?php echo e(route('admin.delete_room',$room->id)); ?>">delete</a></div>
            </div>

        </div>


        <p class="desc"><?php echo e($room->description); ?></p>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/Admin/single.blade.php ENDPATH**/ ?>