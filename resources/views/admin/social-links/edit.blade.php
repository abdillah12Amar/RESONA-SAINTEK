@extends('layouts.app')

@section('title', 'Edit Link Media Sosial — Admin RESONA')

@section('content')
<div class="min-h-screen bg-surface-50">
    <header class="sticky top-0 z-40 border-b border-stone-200/70 bg-white/90 backdrop-blur">
        <div class="mx-auto flex max-w-4xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('admin.social-links.index') }}" class="btn-ghost !px-3 !py-2 text-sm">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                Kembali
            </a>
            <h1 class="font-display text-lg font-extrabold text-stone-900">Edit Link #{{ $socialLink->id }}</h1>
            <div class="w-20"></div>
        </div>
    </header>

    <main class="mx-auto max-w-4xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-soft">
            <div class="flex items-center justify-between border-b border-stone-100 bg-gradient-to-r from-primary-50 via-white to-accent-50 px-8 py-6">
                <div>
                    <h2 class="font-display text-2xl font-extrabold text-stone-900">Edit: {{ $socialLink->name }}</h2>
                    <p class="mt-1 text-sm text-stone-600">Perbarui informasi link media sosial.</p>
                </div>
                <span class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold {{ $socialLink->is_active ? 'bg-primary-50 text-primary-700 ring-1 ring-inset ring-primary-200' : 'bg-stone-100 text-stone-500 ring-1 ring-inset ring-stone-200' }}">
                    <span class="h-1.5 w-1.5 rounded-full {{ $socialLink->is_active ? 'bg-primary-500' : 'bg-stone-400' }}"></span>
                    {{ $socialLink->is_active ? 'Aktif' : 'Nonaktif' }}
                </span>
            </div>

            <form method="POST" action="{{ route('admin.social-links.update', $socialLink) }}" class="space-y-6 px-8 py-8">
                @csrf @method('PUT')

                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <label for="name" class="mb-1.5 block text-sm font-semibold text-stone-700">Nama Platform <span class="text-red-500">*</span></label>
                        <input id="name" name="name" type="text" value="{{ old('name', $socialLink->name) }}" required
                               class="w-full rounded-xl border border-stone-200 bg-white px-4 py-3 text-stone-800 placeholder-stone-400 shadow-sm transition focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-200">
                        @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="sm:col-span-1">
                        <label for="icon" class="mb-1.5 block text-sm font-semibold text-stone-700">Icon (slug)</label>
                        <input id="icon" name="icon" type="text" value="{{ old('icon', $socialLink->icon) }}"
                               class="w-full rounded-xl border border-stone-200 bg-white px-4 py-3 text-stone-800 placeholder-stone-400 shadow-sm transition focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-200"
                               placeholder="instagram, facebook, youtube, twitter, linkedin, email">
                        <p class="mt-1 text-xs text-stone-500">Dukung: instagram, facebook, youtube, twitter, linkedin, email</p>
                        @error('icon')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div>
                    <label for="url" class="mb-1.5 block text-sm font-semibold text-stone-700">URL <span class="text-red-500">*</span></label>
                    <input id="url" name="url" type="url" value="{{ old('url', $socialLink->url) }}" required
                           class="w-full rounded-xl border border-stone-200 bg-white px-4 py-3 font-mono text-sm text-stone-800 placeholder-stone-400 shadow-sm transition focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-200">
                    @error('url')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="grid gap-6 sm:grid-cols-2">
                    <div>
                        <label for="category" class="mb-1.5 block text-sm font-semibold text-stone-700">Kategori</label>
                        <select id="category" name="category" class="w-full rounded-xl border border-stone-200 bg-white px-4 py-3 text-stone-800 shadow-sm focus:border-primary-400 focus:ring-2 focus:ring-primary-200">
                            <option value="social" {{ old('category', $socialLink->category ?? '') == 'social' ? 'selected' : '' }}>Media Sosial</option>
                            <option value="media" {{ old('category', $socialLink->category ?? '') == 'media' ? 'selected' : '' }}>Media Online</option>
                        </select>
                    </div>
                    <div>
                        <label for="thumbnail_url" class="mb-1.5 block text-sm font-semibold text-stone-700">Thumbnail URL</label>
                        <input id="thumbnail_url" name="thumbnail_url" type="url" value="{{ old('thumbnail_url', $socialLink->thumbnail_url ?? '') }}"
                               class="w-full rounded-xl border border-stone-200 bg-white px-4 py-3 text-stone-800 placeholder-stone-400 shadow-sm focus:border-primary-400 focus:ring-2 focus:ring-primary-200">
                    </div>
                </div>

                <div>
                    <label for="description" class="mb-1.5 block text-sm font-semibold text-stone-700">Deskripsi</label>
                    <textarea id="description" name="description" rows="4"
                              class="w-full rounded-xl border border-stone-200 bg-white px-4 py-3 text-stone-800 placeholder-stone-400 shadow-sm transition focus:border-primary-400 focus:outline-none focus:ring-2 focus:ring-primary-200">{{ old('description', $socialLink->description) }}</textarea>
                    @error('description')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <label class="flex items-center gap-3 rounded-xl border border-stone-200 bg-stone-50 p-4">
                    <input type="checkbox" name="is_active" value="1" class="h-5 w-5 rounded border-stone-300 text-primary-600 focus:ring-primary-400" {{ old('is_active', $socialLink->is_active) ? 'checked' : '' }}>
                    <div>
                        <p class="text-sm font-semibold text-stone-800">Aktifkan link ini</p>
                        <p class="text-xs text-stone-500">Jika dicentang, link akan tampil di halaman utama.</p>
                    </div>
                </label>

                <div class="flex items-center justify-end gap-3 border-t border-stone-100 pt-6">
                    <a href="{{ route('admin.social-links.index') }}" class="btn-ghost !rounded-xl">Batal</a>
                    <button type="submit" class="btn-primary !rounded-xl">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        Perbarui Link
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>
@endsection
