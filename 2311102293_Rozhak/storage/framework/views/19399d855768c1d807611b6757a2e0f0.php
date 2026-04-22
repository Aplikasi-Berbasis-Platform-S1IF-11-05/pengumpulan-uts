<?php $__env->startSection('title', 'Dashboard Admin'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="d-flex flex-column gap-2">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-dark text-start py-2">Dashboard</a>
                <a href="<?php echo e(route('admin.data-diri.index')); ?>" class="btn btn-outline-dark border-0 text-start py-2">Data Diri</a>
                <a href="<?php echo e(route('admin.skill.index')); ?>" class="btn btn-outline-dark border-0 text-start py-2">Skills</a>
                <a href="<?php echo e(route('admin.pencapaian.index')); ?>" class="btn btn-outline-dark border-0 text-start py-2">Pencapaian</a>
            </div>
        </div>

        <div class="col-md-9">
            <h4 class="fw-bold mb-4">Overview</h4>
            
            <div class="v-card mb-4">
                <h5 class="fw-bold mb-2">Welcome back, <?php echo e(auth()->user()->name); ?></h5>
                <p class="text-muted small mb-0">Update informasi portofolio Anda melalui menu di samping.</p>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="v-card text-center">
                        <div class="text-muted small fw-medium mb-1 uppercase">Skills</div>
                        <h2 class="fw-bold mb-0"><?php echo e($skillsCount); ?></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="v-card text-center">
                        <div class="text-muted small fw-medium mb-1 uppercase">Achievements</div>
                        <h2 class="fw-bold mb-0"><?php echo e($pencapaianCount); ?></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="v-card text-center">
                        <div class="text-muted small fw-medium mb-1 uppercase">Profile</div>
                        <h5 class="fw-bold mb-0 mt-2"><?php echo e($dataDiri ? 'Completed' : 'Empty'); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /mnt/c/Development/PraktikumWeb/2311102293_Rozhak/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>