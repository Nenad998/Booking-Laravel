<?php $__env->startSection('content'); ?>


    <img class="img_admin" src="/images/<?php echo e($house->image); ?>">
     <div class="contact_main">
    <div class="contact_section">
        <p class="house_single_parag"><strong><?php echo e($house->description); ?></strong></p>
        <p class="house_single_parag">Vlasnik kuce je: <b><?php echo e($house->owner->name); ?></b></p>

    </div>
     </div>



    <div class="main">

        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="houses">
                <hr>
                <img id="house_img" src="/images/room1.jpg">


                <h3><a class="name_house" href="<?php echo e(route('room.single', $room->id)); ?>"><?php echo e($room->name); ?></a></h3>


                <p class="desc"><?php echo e($room->description); ?></p>

               <div class="btn-holder">   <a href="<?php echo e(route('room.single', $room->id)); ?>">pogledaj jos...</a>  </div>


            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php if(count($rooms) > 0): ?>
        <?php echo e($rooms->links()); ?>

            <?php endif; ?>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.lay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/House/single.blade.php ENDPATH**/ ?>