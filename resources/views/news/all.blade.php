@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-surface-50 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <a href="{{ route('home') }}" class="inline-flex items-center text-stone-500 hover:text-primary-600 transition font-bold">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Kembali ke Homepage
            </a>
        </div>
        <h1 class="text-4xl font-bold text-primary-900 mb-12 text-center">Arsip Berita Terkini</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($news as $item)
            <div class="bg-white p-8 rounded-3xl border border-stone-200 shadow-soft">
                <h3 class="text-xl font-bold text-stone-900 mb-4">{{ $item->title }}</h3>
                <p class="text-stone-600 text-sm mb-6">{{ $item->published_at ? $item->published_at->format('d M Y') : 'Update Terbaru' }}</p>
                <a href="{{ $item->news_url }}" target="_blank" class="text-primary-600 font-bold hover:underline">Baca Selengkapnya &rarr;</a>
            </div>
            @empty
            <p class="col-span-full text-center text-stone-500">Belum ada berita yang tersedia.</p>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $news->links() }}
        </div>
    </div>
</div>
@endsection 