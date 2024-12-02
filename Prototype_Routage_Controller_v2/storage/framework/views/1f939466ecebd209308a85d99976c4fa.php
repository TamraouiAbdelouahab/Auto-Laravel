<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php if(session('warning')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('warning')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Solicode\Desktop\SoliCode\AutoFormation\Auto-Laravel\Prototype_Routage_Controller\resources\views/partials/MassageSucces.blade.php ENDPATH**/ ?>