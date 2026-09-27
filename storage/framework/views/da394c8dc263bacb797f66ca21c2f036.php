

<?php $__env->startSection('title', ucfirst($category) . ' — RESONA'); ?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-screen bg-surface-50 py-24 sm:py-28">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-primary-200 bg-primary-50 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-primary-700">
                <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>
                <?php echo e($category === 'social' ? 'Media Sosial' : 'Media Online'); ?>

            </span>
            <h1 class="mt-4 font-display text-3xl font-extrabold text-stone-900 sm:text-4xl">
                Daftar Tautan <?php echo e($category === 'social' ? 'Media Sosial' : 'Media Online'); ?>

            </h1>
            <p class="mt-2 text-stone-600">Berikut adalah kumpulan tautan resmi untuk terhubung dengan kami.</p>
        </div>

        <div class="mt-12 space-y-4">
            <?php $__empty_1 = true; $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(e($link->url)); ?>" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between rounded-2xl border border-stone-200 bg-white p-6 shadow-soft transition hover:border-primary-400 hover:shadow-hover">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 flex-none items-center justify-center rounded-xl bg-primary-50 text-xl text-primary-700 group-hover:bg-primary-600 group-hover:text-white transition">
                        🔗
                    </div>
                    <div>
                        <h3 class="font-display text-lg font-bold text-stone-900 group-hover:text-primary-700 transition"><?php echo e($link->name); ?></h3>
                        <p class="text-sm text-stone-500"><?php echo e($link->description ?? $link->url); ?></p>
                    </div>
                </div>
                <span class="inline-flex items-center gap-1 text-sm font-semibold text-primary-700 group-hover:translate-x-1 transition">
                    Kunjungi
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="rounded-3xl border border-stone-200 bg-white p-12 text-center shadow-soft">
                <p class="text-stone-500">Belum ada tautan yang tersedia untuk kategori ini.</p>
            </div>
            <?php endif; ?>
        </div>

        <div class="mt-12">
            <?php echo e($links->links()); ?>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\file\RESONA V.1\resources\views/links/show.blade.php ENDPATH**/ ?>