# Laravel Auth Breeze

## Deskripsi

Proyek ini merupakan implementasi sistem autentikasi menggunakan Laravel 12 dan Laravel Breeze sebagai starter kit autentikasi.

## Fitur

- Register dengan field Nama, Email, No. HP, Password
- Login & Logout
- Edit Profil (Nama, Email, No. HP)
- Halaman Admin dengan daftar semua user
- Middleware AdminMiddleware untuk proteksi halaman admin

## Teknologi

- Laravel 12
- Laravel Breeze (Blade Stack)
- MySQL
- Tailwind CSS

## Cara Install

### 1. Clone Repository

\\\ash
git clone https://github.com/habibiputrar/laravel-auth-breeze.git
cd laravel-auth-breeze
\\\

### 2. Install Dependencies

\\\ash
composer install
npm install
\\\

### 3. Setup Environment

\\\ash
cp .env.example .env
php artisan key:generate
\\\

### 4. Konfigurasi Database

Edit file .env sesuaikan dengan database lokal:
\\\
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=auth_demo
DB_USERNAME=root
DB_PASSWORD=
\\\

### 5. Migrasi Database

\\\ash
php artisan migrate
\\\

### 6. Jalankan Aplikasi

\\\ash
npm run dev
php artisan serve
\\\

Akses di http://localhost:8000

## Set Role Admin

\\\ash
php artisan tinker
User::where('email', 'email@example.com')->update(['role' => 'admin']);
\\\

## Developer

- Nama: Habibi Putra Rizqullah
- NIM: 2411531001
- Mata Kuliah: Pemrograman Web
- Universitas Andalas
