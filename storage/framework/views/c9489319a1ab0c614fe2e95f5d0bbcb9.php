<?php $__env->startSection('title', 'Kelola Media Sosial — Admin RESONA'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-surface-50">
    <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
            <div>
                <h2 class="font-display text-2xl font-extrabold text-stone-900 sm:text-3xl">Kelola Media Sosial</h2>
                <p class="mt-1 text-sm text-stone-600">Tambah, edit, atau hapus tautan media sosial yang tampil di halaman utama.</p>
            </div>
            <div class="flex gap-3">
                <a href="<?php echo e(route('admin.news.index')); ?>" class="btn-ghost !px-3 !py-2 text-sm">📰 Kelola Berita</a>
                <a href="<?php echo e(route('home')); ?>" class="btn-ghost !px-3 !py-2 text-sm">👁 Lihat Website</a>
                <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn-ghost !px-3 !py-2 text-sm text-red-600 hover:text-red-700 hover:border-red-300">Keluar</button>
                </form>
                <a href="<?php echo e(route('admin.social-links.create')); ?>" class="btn-primary !rounded-xl justify-center">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    Tambah Link
                </a>
            </div>
        </div>


        <div class="mt-8 overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-soft">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-stone-200 text-sm">
                    <thead class="bg-stone-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-stone-500">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-stone-500">Thumbnail</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-stone-500">Platform</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-stone-500">Kategori</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-stone-500">URL</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-bold uppercase tracking-wider text-stone-500">Status</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-bold uppercase tracking-wider text-stone-500">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 bg-white">
                        <?php $__empty_1 = true; $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="transition hover:bg-stone-50">
                            <td class="whitespace-nowrap px-6 py-4 font-mono text-xs text-stone-500">#<?php echo e($link->id); ?></td>
                            <td class="px-6 py-4" colspan="2">
                                <div class="flex items-center gap-4">
                                    <div class="h-10 w-10 bg-stone-100 flex items-center justify-center rounded-lg border border-stone-200 text-lg">
                                        🔗
                                    </div>
                                    <p class="font-semibold text-stone-900"><?php echo e($link->name); ?></p>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-stone-600 capitalize"><?php echo e($link->category ?? '-'); ?></td>
                            <td class="max-w-[200px] truncate px-6 py-4 font-mono text-xs text-primary-700">
                                <a href="<?php echo e(e($link->url)); ?>" target="_blank" rel="noopener" class="hover:underline"><?php echo e(e($link->url)); ?></a>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-center">
                                <form method="POST" action="<?php echo e(route('admin.social-links.toggle', $link)); ?>" onsubmit="return confirm('Ubah status link ini?')">
                                    <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
                                    <button type="submit" class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold transition <?php echo e($link->is_active ? 'bg-primary-50 text-primary-700 ring-1 ring-inset ring-primary-200 hover:bg-primary-100' : 'bg-stone-100 text-stone-500 ring-1 ring-inset ring-stone-200 hover:bg-stone-200'); ?>">
                                        <span class="h-1.5 w-1.5 rounded-full <?php echo e($link->is_active ? 'bg-primary-500' : 'bg-stone-400'); ?>"></span>
                                        <?php echo e($link->is_active ? 'Aktif' : 'Nonaktif'); ?>

                                    </button>
                                </form>
                            </td>
                            <td class="whitespace-nowrap px-6 py-4 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <a href="<?php echo e(route('admin.social-links.edit', $link)); ?>" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-primary-200 bg-white text-primary-700 transition hover:bg-primary-50" title="Edit">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </a>
                                    <form method="POST" action="<?php echo e(route('admin.social-links.destroy', $link)); ?>" onsubmit="return confirm('Hapus link &quot;<?php echo e($link->name); ?>&quot; secara permanen?')">
                                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-red-200 bg-white text-red-600 transition hover:bg-red-50" title="Hapus">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="px-6 py-16 text-center">
                                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-stone-100 text-2xl">🔗</div>
                                <p class="mt-3 font-semibold text-stone-700">Belum ada link media sosial</p>
                                <p class="mt-1 text-sm text-stone-500">Klik tombol "Tambah Link" di atas untuk menambahkan yang pertama.</p>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <?php if($socialLinks->count() > 0): ?>
            <div class="border-t border-stone-100 bg-stone-50 px-6 py-3 text-xs text-stone-500">
                Total: <?php echo e($socialLinks->count()); ?> link
            </div>
            <?php endif; ?>
        </div>
    </main>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\file\RESONA V.1\resources\views/admin/social-links/index.blade.php ENDPATH**/ ?>