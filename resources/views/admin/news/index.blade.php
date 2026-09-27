@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Kelola Berita</h1>
        <div class="flex gap-2">
            <a href="{{ route('admin.social-links.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg">Kembali ke Media Sosial</a>
            <a href="{{ route('admin.news.create') }}" class="bg-primary-600 text-white px-4 py-2 rounded-lg">+ Tambah Berita</a>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-4">
        @foreach($news as $item)
            <div class="flex items-center justify-between border-b py-4">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-10 bg-gray-100 flex items-center justify-center rounded text-xl">
                        📰
                    </div>
                    <span>{{ $item->title }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <a href="{{ route('admin.news.edit', $item) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.news.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus berita ini?')">
                        @csrf @method('DELETE')
                        <button class="text-red-600">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection