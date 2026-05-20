Sistem Informasi Penjualan (UAS Project)
Selamat datang di repositori proyek akhir mata kuliah Pemrograman Web. Proyek ini adalah aplikasi berbasis web yang dirancang untuk mengelola sistem informasi penjualan, yang mencakup manajemen menu makanan, pemrosesan pesanan, serta sistem login admin untuk keamanan data.

Fitur Utama
Sistem Login Admin: Halaman akses eksklusif yang dilindungi untuk memastikan hanya admin yang dapat mengelola sistem.

Manajemen Menu: Kemampuan untuk menambah, mengedit, dan menghapus menu makanan yang tersedia.

Pengelolaan Pesanan: Sistem untuk memantau dan menghapus data pesanan pelanggan.

Antarmuka Responsif: Menggunakan struktur file yang rapi untuk memisahkan aset (CSS, JS, Gambar) guna memastikan performa yang optimal.

Teknologi yang Digunakan
Bahasa: PHP

Basis Data: MySQL

Frontend: HTML5, CSS3, Bootstrap

Server Lokal: XAMPP (Apache & MySQL)

Struktur Direktori
Plaintext
/uas
├── css/              # File desain antarmuka
├── gambar/           # Aset gambar tambahan
├── img/              # Gambar untuk konten website
├── js/               # File skrip interaksi
├── vendor/           # Library eksternal
├── admin.php         # Dashboard admin
├── koneksi.php       # Konfigurasi koneksi database
├── index.php         # Halaman utama (Public)
└── README.md         # Dokumentasi proyek
Cara Menjalankan Proyek
Untuk menjalankan aplikasi ini di komputer lokal Anda, ikuti langkah-langkah berikut:

Persiapan:

Pastikan Anda telah menginstal XAMPP di komputer Anda.

Unduh atau clone repositori ini ke dalam folder htdocs di direktori instalasi XAMPP Anda (Contoh: C:\xampp\htdocs\uas).

Konfigurasi Database:

Buka XAMPP Control Panel dan aktifkan Apache serta MySQL.

Buka browser dan akses http://localhost/phpmyadmin/.

Buat basis data baru (misalnya: db_uas_pweb).

Import file SQL (jika ada di folder proyek) ke dalam basis data tersebut. Jika tidak ada, sesuaikan tabel Anda dengan struktur yang dipanggil pada file koneksi.php.

Konfigurasi Koneksi:

Buka file koneksi.php menggunakan editor teks (VS Code, Notepad++, dll).

Pastikan variabel $host, $user, $pass, dan $db sesuai dengan konfigurasi MySQL lokal Anda.

Menjalankan Aplikasi:

Buka browser dan masukkan URL berikut: http://localhost/uas/index.php.

Aplikasi Anda kini siap digunakan!

Kontribusi
Proyek ini dikembangkan sebagai bagian dari pemenuhan tugas akhir. Untuk pertanyaan, saran, atau kolaborasi lebih lanjut, silakan hubungi pengembang melalui:

GitHub: @maitriyanamettallia

Email: maitriyanamettalia@gmail.com

Dibuat dengan dedikasi untuk pembelajaran dan pengembangan sistem informasi.
