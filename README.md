# ⚔️ MLBB INFO - Kelompok 1

Website dinamis berbasis PHP dan MySQL yang menyediakan informasi mengenai **Mobile Legends: Bang Bang (MLBB)**. Project ini dibuat untuk memenuhi tugas **Responsi 2 Praktikum Pemrograman Web**.

## 📌 Deskripsi

MLBB INFO merupakan website yang memungkinkan pengguna untuk melihat dan mengelola data Hero, Item, dan Team Mobile Legends. Website ini menerapkan sistem autentikasi pengguna menggunakan fitur Login, Register, Session, serta operasi CRUD (Create, Read, Update, Delete).

## ✨ Fitur Utama

* Login dan Register
* Session Authentication
* CRUD Data Hero
* CRUD Data Item
* CRUD Data Team
* Dashboard Informasi MLBB
* Validasi Form JavaScript
* Responsive User Interface

## 🛠️ Teknologi yang Digunakan

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP Native

### Database

* MySQL

### Tools

* Visual Studio Code
* XAMPP
* GitHub
* Figma

## 🗄️ Struktur Database

### users

| Field    | Tipe    |
| -------- | ------- |
| id       | INT     |
| username | VARCHAR |
| password | VARCHAR |
| role     | ENUM    |

### heroes

| Field  | Tipe    |
| ------ | ------- |
| id     | INT     |
| nama   | VARCHAR |
| role   | VARCHAR |
| damage | INT     |

### items

| Field | Tipe    |
| ----- | ------- |
| id    | INT     |
| nama  | VARCHAR |
| harga | INT     |

### teams

| Field     | Tipe    |
| --------- | ------- |
| id        | INT     |
| nama_team | VARCHAR |
| asal      | VARCHAR |

## 📂 Struktur Project

```text
mlbb-website-kelompok-1
│
├── backend
├── frontend
├── database
├── assets
└── README.md
```

## 🚀 Cara Menjalankan Project

1. Clone repository ini.
2. Pindahkan folder project ke direktori `htdocs`.
3. Jalankan Apache dan MySQL melalui XAMPP.
4. Import file database `mlbb.sql` ke phpMyAdmin.
5. Buka browser dan akses:

```text
http://localhost/mlbb-website-kelompok-1/frontend/index.php
```

## 👥 Anggota Kelompok 1

| Nama           | Peran              |
| -------------- | ------------------ |
| Finda w        | UI/UX Designer     |
| Reva aura      | Frontend Developer |
| Aurellia        | Backend Developer  |

## 🔗 Link Project

**Figma:**
(https://www.figma.com/team_invite/redeem/Vm6MJTGdxswbBlS0La0mN8?t=bKSbSgJmH2lou2wX-22)

**GitHub Repository:**
(https://github.com/raa99099/mlbb-website-kelompok-1-/tree/main)

**Hosting Website:**
(https://mlbb-kelompok1.infinityfreeapp.com/index.html)

## 🎯 Tujuan Project

Mengimplementasikan konsep:

* HTML
* CSS
* JavaScript
* PHP Native
* CRUD
* Session
* MySQL Database

sesuai dengan ketentuan Responsi 2 Praktikum Pemrograman Web.

## © Lisensi

Project ini dibuat untuk keperluan akademik dan pembelajaran.
