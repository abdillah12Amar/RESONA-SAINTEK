# RESONA SAINTEK — Riset Tepat, Masyarakat Sehat

**RESONA (Resona Saintek)** adalah sistem informasi kampanye komunikasi sains (*science storytelling*) yang dikembangkan untuk Humas dan Protokol Universitas 'Aisyiyah Yogyakarta (UNISA Yogyakarta). Platform ini bertujuan untuk membawa hasil riset kesehatan lebih dekat ke masyarakat melalui narasi yang inspiratif dan informatif.

---

## 🌟 Fitur Utama

- **Hero Carousel**: Tampilan jumbotron dinamis dengan foto-foto kegiatan riset terbaru.
- **Daftar Inovasi Unggulan**: Menampilkan inovasi riset UNISA seperti SErBet, my SADARI, GOE-KB, Inclusion App, dan KORSIMU.
- **Manajemen Media Sosial**: Panel admin untuk mengelola tautan media sosial dan media online secara dinamis.
- **Berita Terkini**: Integrasi berita terbaru dari Blog UNISA yang dikelola melalui dashboard admin tanpa gambar (fokus pada teks).
- **Desain Modern & Responsif**: Menggunakan Tailwind CSS dengan palet warna hijau (#059669) dan kuning (#facc15).
- **Arsip Berita Internal**: Halaman khusus untuk melihat semua riwayat berita yang pernah diunggah.

---

## 🛠️ Stack Teknologi

- **Framework**: Laravel 12.x
- **Database**: MySQL
- **Frontend**: Blade Template Engine, Tailwind CSS (via CDN)
- **Icons**: Font Awesome 6.0
- **Fonts**: Roboto & Poppins (Google Fonts)

---

## 🚀 Panduan Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/abdillah12Amar/RESONA-SAINTEK.git
   cd RESONA-SAINTEK
   ```

2. **Instal Dependensi**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Lingkungan**
   - Salin `.env.example` menjadi `.env`
   - Sesuaikan konfigurasi database.
   ```bash
   php artisan key:generate
   ```

4. **Migrasi Database**
   ```bash
   php artisan migrate
   ```

5. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```

---

## 🔐 Akses Admin

Dashboard Admin dapat diakses melalui `/admin/login`. 

---
© 2026 RESONA SAINTEK. All rights reserved.
