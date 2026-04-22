<?php $__env->startSection('title', 'Portfolio'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">

    
    <div class="text-center mb-5">
        <img src="<?php echo e(asset('Profil.jpg')); ?>" 
             class="rounded-circle shadow mb-3" 
             style="width:150px; height:150px; object-fit:cover;">

        <h1 class="fw-bold">Tegar Casper</h1>
        <p class="text-muted">Web Developer | Problem Solver | Tech Enthusiast</p>

        <a href="<?php echo e(route('admin.skills.index')); ?>" class="btn btn-dark px-4">
            Admin Panel
        </a>
    </div>

    
    <div class="mb-5">
        <h3 class="fw-semibold border-bottom pb-2">About Me</h3>
        <p class="text-muted mt-3">
            Saya seorang developer yang fokus pada pengembangan web dan aplikasi. 
            Tertarik pada solusi berbasis teknologi dan terus belajar untuk meningkatkan skill.
        </p>
    </div>

    
    <div class="mb-5">
        <h3 class="fw-semibold border-bottom pb-2">Contact</h3>
        <p class="mt-3">
            Email: 
            <a href="mailto:ahmadtegarka@gmail.com" class="text-decoration-none">
                ahmadtegarka@gmail.com
            </a>
            <br>
            LinkedIn:
            <a href="https://www.linkedin.com/in/ahmad-tegar-k-a-50134b405" target="_blank">
                Profile
            </a>
        </p>
    </div>

    
    <div class="mb-5">
        <h3 class="fw-semibold border-bottom pb-2">Skills</h3>
        <div class="row mt-3">
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="fw-bold"><?php echo e($skill->name); ?></h5>
                            <span class="badge bg-primary mt-2">
                                <?php echo e($skill->level); ?>

                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
    <div>
        <h3 class="fw-semibold border-bottom pb-2">Achievements</h3>
        <div class="row mt-3">
            <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="fw-bold"><?php echo e($achievement->name); ?></h5>
                            <p class="text-muted small mt-2">
                                <?php echo e($achievement->description); ?>

                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Praktikum ABP\pengumpulan-uts\2311102083 - A Tegar Kahfi A\resources\views/landing.blade.php ENDPATH**/ ?>