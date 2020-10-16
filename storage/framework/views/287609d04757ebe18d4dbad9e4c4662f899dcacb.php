<?php $__env->startSection('content'); ?>
<img class="home_img" src="/images/logo.png">


<div class="main">

    <?php $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <div class="houses">
            <hr>
            <img id="house_img" src="/images/<?php echo e($house->image); ?>">

        <h3><a class="name_house" href="<?php echo e(route('house.single', $house->id)); ?>"><?php echo e($house->name); ?></a></h3>


        <p class="desc"> <?php echo e(\Illuminate\Support\Str::limit($house->description, 310, $end='...')); ?> </p>

            <div class="btn-holder">   <a href="<?php echo e(route('house.single', $house->id)); ?>">pogledaj jos...</a>  </div>


        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php echo e($houses->links()); ?>

</div>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.lay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/House/index.blade.php ENDPATH**/ ?>