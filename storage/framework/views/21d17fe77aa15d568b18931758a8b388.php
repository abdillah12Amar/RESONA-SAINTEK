

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-surface-50 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <a href="<?php echo e(route('home')); ?>" class="inline-flex items-center text-stone-500 hover:text-primary-600 transition font-bold">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Kembali ke Homepage
            </a>
        </div>
        <h1 class="text-4xl font-bold text-primary-900 mb-12 text-center">Arsip Berita Terkini</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="bg-white p-8 rounded-3xl border border-stone-200 shadow-soft">
                <h3 class="text-xl font-bold text-stone-900 mb-4"><?php echo e($item->title); ?></h3>
                <p class="text-stone-600 text-sm mb-6"><?php echo e($item->published_at ? $item->published_at->format('d M Y') : 'Update Terbaru'); ?></p>
                <a href="<?php echo e($item->news_url); ?>" target="_blank" class="text-primary-600 font-bold hover:underline">Baca Selengkapnya &rarr;</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="col-span-full text-center text-stone-500">Belum ada berita yang tersedia.</p>
            <?php endif; ?>
        </div>

        <div class="mt-12">
            <?php echo e($news->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\file\RESONA V.1\resources\views/news/all.blade.php ENDPATH**/ ?>