# ☕ Sistem Informasi Manajemen Kedai Kopi

## 📌 Deskripsi Proyek
Proyek ini merupakan **Sistem Informasi Manajemen Kedai Kopi berbasis Web** yang dikembangkan menggunakan **Framework Laravel**.  
Aplikasi ini digunakan untuk mengelola data produk kopi, seperti **nama kopi**, **jenis**, **harga**, dan **stok**, sehingga memudahkan pengelolaan data secara terstruktur dan efisien.

Proyek ini dibuat untuk memenuhi **tugas Ujian Akhir Semester (UAS)** mata kuliah **Web Programming**.

---

## 🎯 Tujuan Pembuatan
- Mengimplementasikan konsep **CRUD (Create, Read, Update, Delete)**
- Menerapkan arsitektur **MVC (Model, View, Controller)** pada Laravel
- Menghubungkan aplikasi web dengan **database MySQL**
- Mengelola database menggunakan **Migration Laravel**
- Membuat tampilan web yang sederhana dan menarik

---

## 🛠️ Teknologi yang Digunakan
- PHP 8.x  
- Laravel 12  
- MySQL (phpMyAdmin)  
- Bootstrap 5  
- XAMPP  
- Git & GitHub  

---

## ✨ Fitur Aplikasi
- Menampilkan daftar produk kopi
- Menambahkan data kopi
- Mengedit data kopi
- Menghapus data kopi
- Penyimpanan data menggunakan database MySQL
- Tampilan antarmuka sederhana dan responsif

---

## 🗂️ Struktur Database
Tabel: **coffees**

| Field        | Tipe Data |
|-------------|----------|
| id          | bigint (Primary Key) |
| nama_kopi   | varchar |
| jenis       | varchar |
| harga       | integer |
| stok        | integer |
| created_at | timestamp |
| updated_at | timestamp |

Database dibuat menggunakan **Laravel Migration**.

---

## 🚀 Cara Menjalankan Proyek

### 1️⃣ Clone Repository
```bash
git clone https://github.com/USERNAME/REPO-KOPI.git
2️⃣ Masuk ke Folder Project
cd nama-project

3️⃣ Install Dependency
composer install

4️⃣ Copy File Environment
cp .env.example .env

5️⃣ Konfigurasi Database (.env)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uas_kopi
DB_USERNAME=root
DB_PASSWORD=

6️⃣ Generate Application Key
php artisan key:generate

7️⃣ Migrasi Database
php artisan migrate

8️⃣ Jalankan Server
php artisan serve


Akses aplikasi melalui browser:

http://127.0.0.1:8000/kopi
