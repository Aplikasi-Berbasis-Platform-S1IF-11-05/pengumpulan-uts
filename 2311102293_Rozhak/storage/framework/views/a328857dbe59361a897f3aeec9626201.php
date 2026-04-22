<?php $__env->startSection('title', 'Portofolio Rozhak'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <div class="row py-5 mb-5 border-bottom">
        <div class="col-lg-8">
            <?php if($dataDiri->id ?? false): ?>
                <h1 class="display-3 fw-bold tracking-tight mb-3" style="letter-spacing: -0.04em;"><?php echo e($dataDiri->name); ?></h1>
                <p class="lead text-muted mb-4" style="font-size: 1.25rem;"><?php echo e($dataDiri->bio); ?></p>
                <div class="d-flex gap-3 text-muted small fw-medium">
                    <span><?php echo e($dataDiri->email); ?></span>
                    <span>&bull;</span>
                    <span><?php echo e($dataDiri->phone); ?></span>
                </div>
                <div class="mt-4">
                    <?php if($dataDiri->github_url): ?>
                        <a href="<?php echo e($dataDiri->github_url); ?>" target="_blank" class="btn btn-dark">GitHub</a>
                    <?php endif; ?>
                    <?php if($dataDiri->linkedin_url): ?>
                        <a href="<?php echo e($dataDiri->linkedin_url); ?>" target="_blank" class="btn btn-outline-dark border-1 ms-2">LinkedIn</a>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <h1 class="display-3 fw-bold mb-3">Welcome.</h1>
                <p class="lead text-muted">Selamat datang di portofolio saya. Silakan isi data di admin panel.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Content Sections -->
    <div class="row">
        <!-- Skills -->
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold mb-4">Skills</h4>
            <div class="d-flex flex-column gap-3">
                <?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="v-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-semibold"><?php echo e($skill->name); ?></span>
                            <span class="badge rounded-pill text-dark border fw-medium" style="background: #f0f0f0; font-size: 0.75rem;"><?php echo e($skill->level); ?></span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-muted small">No skills listed yet.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Achievements -->
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold mb-4">Achievements</h4>
            <div class="d-flex flex-column gap-3">
                <?php $__empty_1 = true; $__currentLoopData = $pencapaians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="v-card">
                        <div class="text-muted small mb-1"><?php echo e(\Carbon\Carbon::parse($achievement->date)->format('M Y')); ?></div>
                        <h6 class="fw-bold mb-2"><?php echo e($achievement->name); ?></h6>
                        <p class="small text-muted mb-0"><?php echo e($achievement->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-muted small">No achievements listed yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /mnt/c/Development/PraktikumWeb/2311102293_Rozhak/resources/views/portfolio/index.blade.php ENDPATH**/ ?>