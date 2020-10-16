
<h4><a href="/house/add">DODAJ KUCU</a></h4>

<h2><a href="<?php echo e(route('admin.single_house',$house->id)); ?>"><?php echo e($house->name); ?></a>
    &nbsp;<?php if(auth()->guard()->check()): ?> <?php if(auth()->user()->role_id ==2): ?><a href="<?php echo e(route('admin.edit_house',$house->id)); ?>">EDIT</a> &nbsp;<?php endif; ?>
    <a href="<?php echo e(route('admin.delete_house',$house->id)); ?>">DELETE</a> <?php endif; ?> </h2>

<p>Vlasnik kuce je: <a href="/profile/<?php echo e($house->owner->id); ?>"><?php echo e($house->owner->name); ?></a></p>

<p><?php echo e($house->description); ?></p>
<?php /**PATH D:\wamp\www\project\resources\views/Admin/partials/_house.blade.php ENDPATH**/ ?>