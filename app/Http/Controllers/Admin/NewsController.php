<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    public function create() {
        return view('admin.news.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'news_url' => 'required|url',
        ]);
        $data['image_url'] = 'https://www.unisayogya.ac.id/wp-content/uploads/2026/09/publikasi-1030x773.jpg';
        
        News::create($data);
        return redirect()->route('admin.news.index')->with('success', 'Berita ditambah!');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $news->update($request->validate([
            'title' => 'required',
            'news_url' => 'required|url',
        ]));

        return redirect()->route('admin.news.index')->with('success', 'Berita diperbarui!');
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita dihapus!');
    }
}