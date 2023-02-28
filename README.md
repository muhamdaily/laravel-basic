<h1 align="center">Laravel Basic</h1>

<span align="center">

[Laravel](https://laravel.com/) Laravel merupakan framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP dalam pengembangan aplikasi web, apalagi PHP adalah bahasa pemrograman yang dinamis dan Laravel disini bisa bertindak untuk membuat web development lebih cepat, lebih aman, dan lebih simpel.

[![](https://img.shields.io/badge/OS-Windows-blue)](https://github.com/muhammedia/laravel-basic/blob/main/LICENSE)
[![](https://img.shields.io/badge/Berikan-Dukungan-yellow)](https://trakteer.id/anteikudevs?quantity=1)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/muhammedia/laravel-basic/blob/main/LICENSE)
[![GitHub stars](https://img.shields.io/github/stars/muhammedia/laravel-fortify.svg?style=social&label=Star&maxAge=2592000)](https://github.com/muhammedia/laravel-basic/stargazers/)

</span>

Ini adalah contoh sederhana untuk melakukan operasi CRUD (Create, Read, Update, Delete) menggunakan Laravel 9 Controller Resource. Aplikasi ini dibuat dengan tujuan untuk memberikan panduan awal bagi pengguna baru yang ingin mempelajari dasar-dasar pengembangan aplikasi web dengan Laravel 9.

## Installation

1. Clone repositori ini dengan menjalankan perintah berikut di terminal atau command prompt Anda:

```bash
$ git clone https://github.com/muhammedia/laravel-basic.git
```

2. Masuk ke dalam direktori `laravel-basic` dan jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan:

```bash
$ composer install
```

3. Salin file `.env.example` dan ubah namanya menjadi `.env`:

```bash
$ cp .env.example .env
```

4. Buat database baru dan ubah konfigurasi koneksi database di dalam file `.env` sesuai dengan database yang telah Anda buat.

5. Jalankan perintah berikut untuk membuat tabel-tabel yang diperlukan di dalam database:

```bash
$ php artisan migrate
```

6. Jalankan perintah berikut untuk menjalankan server lokal:

```bash
$ php artisan serve
```

7. Buka browser Anda dan akses URL `http://localhost:8000`. Anda akan melihat halaman utama yang menampilkan halaman welcome.

8. Untuk membuat data barang, akses URL `http://localhost:8000/barang`. Anda akan melihat tombol untuk tambah data.

9. Untuk mengedit atau menghapus data barang yang sudah ada, klik tombol "Ubah" atau "Hapus" di dalam tabel yang digunakan untuk menampilkan datanya.

## Kontribusi

Jika Anda menemukan bug atau ingin melakukan perbaikan pada kode, silakan buat *pull request* atau buat *issue* baru.

## Support
Terima kasih atas dukungan yang sudah anda berikan.

<a href="https://trakteer.id/anteikudevs?quantity=1">
            <img src="https://raw.githubusercontent.com/muhammedia/binasehat/main/image/team/muham.png"
                alt="Muhammad Maghribi" width="75" height="75">
</a>

## Lisensi

Proyek ini dilisensikan di bawah lisensi [MIT License](LICENSE).
