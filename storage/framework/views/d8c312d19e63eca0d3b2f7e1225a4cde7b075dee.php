<?php $__env->startSection('title'); ?> <title>Ovo je strana</title><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="add-house"><a class="add" href="/house/add">DODAJ KUCU</a></div>
    <?php $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="mainGroup">

        <div class="name">

            <div><a class="name_admin" href="<?php echo e(route('admin.single_house',$house->id)); ?>"><?php echo e($house->name); ?></a> </div>


        </div>


        <div class="edit">
            <div><a class="edit_admin" href="<?php echo e(route('admin.edit_house',$house->id)); ?>">edit</a></div>
        </div>

        <div class="delete">
            <div><a class="delete_admin" href="<?php echo e(route('admin.delete_house',$house->id)); ?>">delete</a></div>
        </div>

    </div>

    <p><b>Vlasnik kuce je:</b> <a class="owner_house_name" href="/profile/<?php echo e($house->owner->id); ?>"><b><?php echo e($house->owner->name); ?></b></a></p>

    <p class="desc"><?php echo e($house->description); ?></p>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="links-admin-parent">
  <div class="links-admin">  <?php echo e($houses->links()); ?>



  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\project\resources\views/Admin/index.blade.php ENDPATH**/ ?>