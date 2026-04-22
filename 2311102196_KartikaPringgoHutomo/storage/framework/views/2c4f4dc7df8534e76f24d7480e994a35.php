<?php $__env->startSection('content'); ?>

<div class="card mb-4">
    <div class="card-body">
        <h3>Data Diri</h3>
        <p><b>Nama:</b> <?php echo e($profile->name); ?></p>
        <p><b>Umur:</b> <?php echo e($profile->age); ?> Tahun</p>
        <p><?php echo e($profile->bio); ?></p>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h3>Skill</h3>
        <ul>
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($skill->name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h3>Achievement</h3>
        <ul>
            <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><b><?php echo e($a->title); ?></b> - <?php echo e($a->description); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSI\OneDrive\Documents\UTS PRAK\2311102196_KartikaPringgoHutomo\resources\views/welcome.blade.php ENDPATH**/ ?>