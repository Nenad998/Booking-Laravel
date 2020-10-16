
<?php if(session('success')): ?>
    <div class="alert_success">
        <p class="success_parag"><?php echo e(session('success')); ?></p>
    </div>
<?php endif; ?>


<?php if(session('warning')): ?>
    <div class="alert_warning">
        <p class="warning_parag"><?php echo e(session('warning')); ?></p>
    </div>
<?php endif; ?>

<?php /**PATH D:\wamp\www\project\resources\views/flash/alerts.blade.php ENDPATH**/ ?>