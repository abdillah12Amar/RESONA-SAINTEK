<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::orderBy('is_active', 'desc')->orderBy('id', 'asc')->get();
        return view('admin.social-links.index', compact('socialLinks'));
    }

    public function create()
    {
        return view('admin.social-links.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'category' => 'required|string|in:social,media',
            'thumbnail_url' => 'nullable|url',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active', false);

        SocialLink::create($validated);

        return redirect()->route('admin.social-links.index')->with('success', 'Link media sosial berhasil ditambahkan.');
    }

    public function edit(SocialLink $socialLink)
    {
        return view('admin.social-links.edit', compact('socialLink'));
    }

    public function update(Request $request, SocialLink $socialLink)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url',
            'category' => 'required|string|in:social,media',
            'thumbnail_url' => 'nullable|url',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active', false);

        $socialLink->update($validated);

        return redirect()->route('admin.social-links.index')->with('success', 'Link media sosial berhasil diperbarui.');
    }

    public function destroy(SocialLink $socialLink)
    {
        $socialLink->delete();
        return redirect()->route('admin.social-links.index')->with('success', 'Link media sosial berhasil dihapus.');
    }

    public function toggle(SocialLink $socialLink)
    {
        $socialLink->update([
            'is_active' => !$socialLink->is_active,
        ]);
        return redirect()->route('admin.social-links.index')->with('success', 'Status link berhasil diubah.');
    }
}
