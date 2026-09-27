<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::active()->get();
        $latestNews = News::active()->latest()->take(3)->get();

        $heroImages = [
            ['url' => asset('images/GDA.jpg'), 'active' => true],
            ['url' => asset('images/DJI_0013.JPG'), 'active' => false],
            ['url' => asset('images/DSCF6697.jpg'), 'active' => false],
            ['url' => asset('images/Inovasi KORSIMU.JPG'), 'active' => false],
            ['url' => asset('images/_DSF5269.jpg'), 'active' => false],
        ];

        $innovations = [
            [
                'icon' => '⌚',
                'title' => 'Smart Sensor Bracelet (SErBet)',
                'description' => 'Dikembangkan untuk mendukung deteksi dini risiko stunting melalui pemantauan tumbuh kembang balita berbasis Internet of Medical Things (IoMT).',
            ],
            [
                'icon' => '💗',
                'title' => 'my SADARI',
                'description' => 'Menjadi media edukasi deteksi dini kanker payudara bagi perempuan usia produktif, dengan panduan praktis yang mudah diikuti mandiri di rumah.',
            ],
            [
                'icon' => '👶',
                'title' => 'GOE-KB (Gendongan Oksitosin Ergonomi Kelekatan Bayi)',
                'description' => 'Inovasi gendongan ergonomis yang mendukung pelepasan hormon oksitosin untuk memperkuat kelekatan ibu dan bayi sejak dini.',
            ],
            [
                'icon' => '📱',
                'title' => 'Inclusion App',
                'description' => 'Memperluas akses rehabilitasi berbasis komunitas bagi penyandang disabilitas dan kelompok rentan, termasuk perempuan dan lansia.',
            ],
            [
                'icon' => '🪑',
                'title' => 'KORSIMU (Kursi Oksitosin Ibu Menyusui)',
                'description' => 'Inovasi kursi ergonomis yang dirancang khusus untuk mendukung kenyamanan dan kesehatan ibu menyusui.',
            ],
        ];

        $reasons = [
            [
                'icon' => '🌍',
                'title' => 'Tantangan Kesehatan yang Berkembang',
                'description' => 'Mulai dari stunting, kesehatan ibu dan anak, penyakit tidak menular, penuaan penduduk, hingga kesenjangan akses layanan kesehatan membutuhkan respons berbasis riset.',
            ],
            [
                'icon' => '💡',
                'title' => 'Kebutuhan Informasi Kredibel',
                'description' => 'Di tengah derasnya arus informasi digital, masyarakat membutuhkan informasi kesehatan yang kredibel, mudah dipahami, dan berbasis bukti ilmiah.',
            ],
            [
                'icon' => '🎓',
                'title' => 'Kekuatan UNISA Yogyakarta',
                'description' => 'Sebagai perguruan tinggi yang memiliki kekuatan di bidang kesehatan, UNISA Yogyakarta menghasilkan riset dan inovasi dari kebutuhan nyata masyarakat.',
            ],
            [
                'icon' => '🧭',
                'title' => 'Membawa Riset Lebih Dekat',
                'description' => 'Melalui komunikasi sains dan science storytelling, hasil riset dikemas menjadi pengetahuan yang relevan, mudah dipahami, dan dapat dimanfaatkan langsung.',
            ],
        ];

        return view('home', compact('socialLinks', 'innovations', 'reasons', 'heroImages', 'latestNews'));
    }

    public function showLinks($category)
    {
        $links = \App\Models\SocialLink::where('category', $category)->where('is_active', true)->paginate(5);
        return view('links.show', compact('links', 'category'));
    }

    public function allNews()
    {
        $news = \App\Models\News::active()->latest()->paginate(9);
        return view('news.all', compact('news'));
    }
}
