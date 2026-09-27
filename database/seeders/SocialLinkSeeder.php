<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialLink;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        $links = [
            [
                'name' => 'Instagram Resmi',
                'url' => 'https://instagram.com/resona.official',
                'category' => 'social',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=600&q=80',
                'description' => 'Ikuti kami di Instagram untuk update riset dan tips kesehatan terbaru.',
                'icon' => 'instagram',
                'is_active' => true,
            ],
            [
                'name' => 'Facebook Page',
                'url' => 'https://facebook.com/resona.official',
                'category' => 'social',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80',
                'description' => 'Bergabung dengan komunitas RESONA di Facebook dan diskusikan hasil riset.',
                'icon' => 'facebook',
                'is_active' => true,
            ],
            [
                'name' => 'YouTube Channel',
                'url' => 'https://youtube.com/@resona.official',
                'category' => 'social',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=600&q=80',
                'description' => 'Tonton video edukasi kesehatan dan dokumentasi riset kami.',
                'icon' => 'youtube',
                'is_active' => true,
            ],
            [
                'name' => 'Portal Berita Unisa',
                'url' => 'https://unisayogya.ac.id',
                'category' => 'media',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=600&q=80',
                'description' => 'Artikel dan liputan media online mengenai inovasi dan riset terbaru.',
                'icon' => 'link',
                'is_active' => true,
            ],
        ];

        foreach ($links as $link) {
            SocialLink::create($link);
        }
    }
}
