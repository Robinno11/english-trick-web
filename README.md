# English Trick - Website

Website aplikasi English Trick berbasis Laravel.

---

## 🚀 Panduan Setup & Instalasi (Untuk Teman / Kolaborator)

Ikuti langkah-langkah di bawah ini untuk menjalankan project ini di komputer lokal:

### 1. Prasyarat
Pastikan komputer sudah terinstall:
- **PHP** (>= 8.2)
- **Composer**
- **Node.js & NPM**
- **Git**

---

### 2. Clone Repository
```bash
git clone https://github.com/Robinno11/english-trick-web.git
cd english-trick-web
```

---

### 3. Install Dependensi PHP & JavaScript
```bash
composer install
npm install
```

---

### 4. Konfigurasi Environment (`.env`)
Salin file contoh konfigurasi dan generate App Key:
```bash
cp .env.example .env
php artisan key:generate
```

---

### 5. Konfigurasi Database (SQLite)
Secara default project ini menggunakan SQLite. Buat file database kosong (jika belum ada) dan jalankan migration beserta seeder data:
```bash
touch database/database.sqlite
php artisan migrate --seed
```

---

### 6. Build Frontend Asset
Jalankan Vite untuk kompilasi CSS & JS:
```bash
npm run dev
# atau jika ingin build untuk production:
# npm run build
```

---

### 7. Jalankan Local Server
Buka terminal baru di folder project, lalu jalankan:
```bash
php artisan serve
```

Akses web di browser: **[http://localhost:8000](http://localhost:8000)**

---

## 📁 Struktur Penting
- `app/` - Controller, Model, dan logic aplikasi
- `resources/views/` - File template Blade (tampilan HTML)
- `database/migrations/` & `database/seeders/` - Skema dan data awal database
- `public/` - Asset publik (gambar, CSS terkompilasi, dll)
- `routes/web.php` - Daftar rute halaman web
