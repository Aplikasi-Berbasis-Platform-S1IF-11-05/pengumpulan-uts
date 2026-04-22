<?php $__env->startSection('title', 'Kelola Pencapaian'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="list-group shadow-sm">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action">Dashboard Overview</a>
            <a href="<?php echo e(route('admin.data-diri.index')); ?>" class="list-group-item list-group-item-action">Kelola Data Diri</a>
            <a href="<?php echo e(route('admin.skill.index')); ?>" class="list-group-item list-group-item-action">Kelola Skills</a>
            <a href="<?php echo e(route('admin.pencapaian.index')); ?>" class="list-group-item list-group-item-action active">Kelola Pencapaian</a>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card shadow-sm">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0 fw-bold">Daftar Pencapaian</h5>
                <a href="<?php echo e(route('admin.pencapaian.create')); ?>" class="btn btn-dark btn-sm"> Tambah Pencapaian</a>
            </div>
            <div class="card-body">
                <?php if(count($pencapaians) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama Pencapaian</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $pencapaians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <div class="fw-bold"><?php echo e($achievement->name); ?></div>
                                            <small class="text-muted"><?php echo e(Str::limit($achievement->description, 50)); ?></small>
                                        </td>
                                        <td><?php echo e(\Carbon\Carbon::parse($achievement->date)->format('d M Y')); ?></td>
                                        <td><span class="badge bg-info text-dark"><?php echo e($achievement->category ?? '-'); ?></span></td>
                                        <td class="text-end">
                                            <a href="<?php echo e(route('admin.pencapaian.edit', $achievement)); ?>" class="btn btn-outline-dark btn-sm me-1">Edit</a>
                                            <form method="POST" action="<?php echo e(route('admin.pencapaian.destroy', $achievement)); ?>" class="d-inline">
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
                        <p class="text-muted">Belum ada data pencapaian.</p>
                        <a href="<?php echo e(route('admin.pencapaian.create')); ?>" class="btn btn-dark">Tambah Sekarang</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /mnt/c/Development/PraktikumWeb/2311102293_Rozhak/resources/views/admin/pencapaian/index.blade.php ENDPATH**/ ?>