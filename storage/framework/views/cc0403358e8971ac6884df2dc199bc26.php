

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-stone-50 py-12">
    <div class="max-w-xl mx-auto">
        <div class="bg-white rounded-3xl shadow-soft border border-stone-200 overflow-hidden">
            <div class="bg-primary-900 p-8 text-white">
                <a href="<?php echo e(route('admin.news.index')); ?>" class="inline-flex items-center text-sm text-primary-200 hover:text-white mb-4 transition">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Kembali ke Daftar
                </a>
                <h2 class="text-2xl font-bold">Edit Berita Terkini</h2>
                <p class="text-primary-200 mt-1">Ubah informasi berita</p>
            </div>

            <form action="<?php echo e(route('admin.news.update', $news)); ?>" method="POST" class="p-8 space-y-6">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div>
                    <label class="block text-sm font-bold text-stone-700 mb-2">Judul Berita</label>
                    <input type="text" name="title" value="<?php echo e(old('title', $news->title)); ?>" required class="w-full rounded-2xl border-stone-200 bg-stone-50 focus:ring-accent-400 focus:border-accent-400">
                </div>
                <div>
                    <label class="block text-sm font-bold text-stone-700 mb-2">Link Berita (URL)</label>
                    <input type="url" name="news_url" value="<?php echo e(old('news_url', $news->news_url)); ?>" required class="w-full rounded-2xl border-stone-200 bg-stone-50 focus:ring-accent-400 focus:border-accent-400">
                </div>
                
                <button type="submit" class="w-full bg-accent-500 text-primary-900 font-bold py-4 rounded-2xl hover:bg-accent-400 transition transform hover:scale-[1.02]">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\file\RESONA V.1\resources\views/admin/news/edit.blade.php ENDPATH**/ ?>