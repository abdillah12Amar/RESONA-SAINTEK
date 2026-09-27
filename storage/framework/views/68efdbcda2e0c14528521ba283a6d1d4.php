<?php $__env->startSection('title', 'Login Admin — RESONA'); ?>

<?php $__env->startSection('content'); ?>
<section class="relative flex min-h-screen w-full items-center justify-center px-4 py-12 sm:px-6">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-white to-accent-50"></div>
    <div class="absolute left-1/4 top-1/3 h-64 w-64 -translate-x-1/2 rounded-full bg-primary-200/50 blur-3xl"></div>
    <div class="absolute right-1/4 bottom-1/3 h-64 w-64 translate-x-1/2 rounded-full bg-accent-200/60 blur-3xl"></div>

    <div class="relative w-full max-w-md">
        <div class="overflow-hidden rounded-3xl border border-stone-200 bg-white shadow-soft">
            <div class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 px-8 py-10 text-center">
                <div class="mx-auto flex items-center justify-center rounded-2xl bg-white/10 p-3 ring-1 ring-white/30 backdrop-blur">
                    <img src="<?php echo e(asset('Resona Saintek Ornament2.png')); ?>" alt="Logo" class="h-10 w-auto brightness-0 invert">
                </div>
                <h1 class="mt-4 font-display text-3xl font-extrabold tracking-tight text-white">Login Admin</h1>
                <p class="mt-2 text-sm text-white/80">RESONA SAINTEK — Riset Tepat, Masyarakat Sehat</p>
            </div>

            <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>" class="space-y-5 px-8 py-8">
                <?php echo csrf_field(); ?>

                <div>
                    <label for="email" class="mb-1.5 block text-sm font-semibold text-stone-700">Email</label>
                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-stone-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </span>
                        <input id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" required autofocus
                               class="w-full rounded-xl border border-stone-200 bg-white py-3 pl-10 pr-4 text-stone-800 placeholder-stone-400 shadow-sm transition focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-200"
                               placeholder="admin@resona.id">
                    </div>
                </div>

                <div>
                    <label for="password" class="mb-1.5 block text-sm font-semibold text-stone-700">Password</label>
                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-stone-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </span>
                        <input id="password" name="password" type="password" required
                               class="w-full rounded-xl border border-stone-200 bg-white py-3 pl-10 pr-4 text-stone-800 placeholder-stone-400 shadow-sm transition focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-200"
                               placeholder="••••••••">
                    </div>
                </div>

                <label class="flex items-center gap-2 text-sm text-stone-600">
                    <input type="checkbox" name="remember" class="h-4 w-4 rounded border-stone-300 text-primary-600 focus:ring-primary-400">
                    Ingat saya
                </label>

                <button type="submit" class="btn-primary w-full !rounded-xl !py-3 justify-center shadow-hover">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    Masuk ke Dashboard
                </button>

                <div class="flex items-center justify-between border-t border-stone-100 pt-5 text-xs">
                    <a href="<?php echo e(route('home')); ?>" class="inline-flex items-center gap-1 font-semibold text-primary-700 hover:text-primary-800">
                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                        Kembali ke Beranda
                    </a>
                    <span class="text-stone-400">RESONA Admin</span>
                </div>


            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\file\RESONA V.1\resources\views/auth/login.blade.php ENDPATH**/ ?>