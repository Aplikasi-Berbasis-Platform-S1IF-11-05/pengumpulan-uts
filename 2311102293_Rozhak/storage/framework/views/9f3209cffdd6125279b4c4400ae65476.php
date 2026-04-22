<?php $__env->startSection('title', 'Kelola Skills'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="list-group shadow-sm">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action">Dashboard Overview</a>
            <a href="<?php echo e(route('admin.data-diri.index')); ?>" class="list-group-item list-group-item-action">Kelola Data Diri</a>
            <a href="<?php echo e(route('admin.skill.index')); ?>" class="list-group-item list-group-item-action active">Kelola Skills</a>
            <a href="<?php echo e(route('admin.pencapaian.index')); ?>" class="list-group-item list-group-item-action">Kelola Pencapaian</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0 fw-bold">Daftar Keahlian</h5>
                <a href="<?php echo e(route('admin.skill.create')); ?>" class="btn btn-dark btn-sm"> Tambah Skill</a>
            </div>
            <div class="card-body">
                <?php if(count($skills) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Skill</th>
                                    <th>Level</th>
                                    <th>Kategori</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="fw-bold"><?php echo e($skill->name); ?></td>
                                        <td><span class="badge bg-secondary"><?php echo e($skill->level); ?></span></td>
                                        <td><?php echo e($skill->category ?? '-'); ?></td>
                                        <td class="text-end">
                                            <a href="<?php echo e(route('admin.skill.edit', $skill)); ?>" class="btn btn-outline-dark btn-sm me-1">Edit</a>
                                            <form method="POST" action="<?php echo e(route('admin.skill.destroy', $skill)); ?>" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="text-center py-5">
                        <p class="text-muted">Belum ada data skill.</p>
                        <a href="<?php echo e(route('admin.skill.create')); ?>" class="btn btn-dark">Tambah Sekarang</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /mnt/c/Development/PraktikumWeb/2311102293_Rozhak/resources/views/admin/skill/index.blade.php ENDPATH**/ ?>