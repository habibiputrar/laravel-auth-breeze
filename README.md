# Laravel Auth Breeze

## 📌 Deskripsi Proyek

Laravel Auth Breeze adalah aplikasi autentikasi sederhana yang dibangun menggunakan **Laravel 12** dan **Laravel Breeze (Blade Stack)**. Proyek ini dibuat sebagai implementasi sistem login dan manajemen pengguna dengan fitur role-based access control (Admin & User).

Aplikasi memungkinkan pengguna untuk melakukan registrasi, login, mengelola profil, serta menyediakan halaman khusus admin untuk melihat seluruh data pengguna yang terdaftar.

---

## ✨ Fitur Utama

### Authentication

- Registrasi akun
- Login pengguna
- Logout pengguna
- Validasi form autentikasi

### Profile Management

- Edit nama
- Edit email
- Edit nomor HP
- Ubah password

### Admin Panel

- Melihat daftar seluruh user
- Proteksi halaman admin menggunakan middleware
- Role management (Admin & User)

### Security

- Middleware Authentication
- Middleware Admin
- Password Hashing Laravel
- CSRF Protection

---

## 🛠️ Teknologi yang Digunakan

| Teknologi      | Keterangan                 |
| -------------- | -------------------------- |
| Laravel 12     | Framework PHP              |
| Laravel Breeze | Starter Kit Authentication |
| Blade          | Template Engine            |
| MySQL          | Database                   |
| Tailwind CSS   | Styling Framework          |
| Vite           | Asset Bundler              |

---

## 📂 Struktur Fitur

```text
├── Authentication
│   ├── Register
│   ├── Login
│   └── Logout
│
├── Profile
│   ├── Edit Profile
│   ├── Update Email
│   └── Update Phone Number
│
└── Admin
    ├── User List
    └── Admin Middleware
```

---

## 🚀 Instalasi Project

### 1. Clone Repository

```bash
git clone https://github.com/habibiputrar/laravel-auth-breeze.git
cd laravel-auth-breeze
```

### 2. Install Dependency

```bash
composer install
npm install
```

### 3. Konfigurasi Environment

Salin file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

---

### 4. Konfigurasi Database

Buka file `.env` lalu sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=auth_demo
DB_USERNAME=root
DB_PASSWORD=
```

Pastikan database `auth_demo` sudah dibuat terlebih dahulu di MySQL.

---

### 5. Jalankan Migration

```bash
php artisan migrate
```

---

### 6. Build Asset Frontend

```bash
npm run dev
```

---

### 7. Menjalankan Aplikasi

```bash
php artisan serve
```

Aplikasi dapat diakses melalui:

```text
http://localhost:8000
```

---

## Mengatur User Menjadi Admin

Masuk ke Laravel Tinker:

```bash
php artisan tinker
```

Kemudian jalankan:

```php
User::where('email', 'email@example.com')
    ->update(['role' => 'admin']);
```

Ganti `email@example.com` dengan email pengguna yang ingin dijadikan admin.

---

**Habibi Putra Rizqullah**
NIM: 2411531001
Program Studi Informatika
Universitas Andalas


