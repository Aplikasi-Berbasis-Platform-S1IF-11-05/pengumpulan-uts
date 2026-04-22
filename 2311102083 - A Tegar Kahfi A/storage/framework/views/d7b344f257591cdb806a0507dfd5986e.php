<?php $__env->startSection('title', 'Skills'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Skills</h2>
        <a href="<?php echo e(route('admin.skills.create')); ?>" class="btn btn-primary">Add Skill</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($skill->name); ?></td>
                    <td><?php echo e($skill->level); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.skills.show', $skill)); ?>" class="btn btn-info btn-sm">Show</a>
                        <a href="<?php echo e(route('admin.skills.edit', $skill)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('admin.skills.destroy', $skill)); ?>" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">No skills found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Praktikum ABP\pengumpulan-uts\2311102083 - A Tegar Kahfi A\resources\views/admin/skills/index.blade.php ENDPATH**/ ?>