
<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Kelola Berita</h1>
        <div class="flex gap-2">
            <a href="<?php echo e(route('admin.social-links.index')); ?>" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg">Kembali ke Media Sosial</a>
            <a href="<?php echo e(route('admin.news.create')); ?>" class="bg-primary-600 text-white px-4 py-2 rounded-lg">+ Tambah Berita</a>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-4">
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-center justify-between border-b py-4">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-10 bg-gray-100 flex items-center justify-center rounded text-xl">
                        📰
                    </div>
                    <span><?php echo e($item->title); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <a href="<?php echo e(route('admin.news.edit', $item)); ?>" class="text-blue-600 hover:underline">Edit</a>
                    <form action="<?php echo e(route('admin.news.destroy', $item)); ?>" method="POST" onsubmit="return confirm('Hapus berita ini?')">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="text-red-600">Hapus</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\file\RESONA V.1\resources\views/admin/news/index.blade.php ENDPATH**/ ?>