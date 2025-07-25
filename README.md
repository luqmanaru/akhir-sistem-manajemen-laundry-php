# akhir-sistem-manajemen-laundry-php
Aplikasi kasir (Point of Sale) berbasis web untuk mengelola penjualan, data barang, dan pelanggan secara efisien. Proyek ini dibangun menggunakan PHP, MySQL, dan antarmuka Bootstrap.

## ✨ Fitur Utama
-   **Autentikasi Pengguna**: Sistem login untuk admin guna mengamankan data.
-   **Manajemen Barang**: CRUD (*Create, Read, Update, Delete*) untuk data produk, termasuk stok, harga beli, dan harga jual.
-   **Manajemen Pelanggan**: CRUD untuk data pelanggan setia.
-   **Transaksi Penjualan**: Mencatat transaksi penjualan baru, yang otomatis mengurangi stok barang.
-   **Laporan Penjualan**: Menampilkan riwayat transaksi dan kemampuan untuk mencetak struk/laporan.
-   **Dasbor Informatif**: Halaman utama menampilkan ringkasan data penting seperti jumlah barang, pelanggan, dan total penjualan.

## 🚀 Teknologi yang Digunakan
-   **Backend**: PHP
-   **Database**: MySQL / MariaDB
-   **Frontend**: HTML, CSS, Bootstrap

## 🗄️ Struktur Database

Aplikasi ini menggunakan database `toko` dengan 4 tabel utama.

| Tabel         | Fungsi Utama                                  |
| ------------- | --------------------------------------------- |
| `users`       | Menyimpan data login pengguna (admin).        |
| `barang`      | Menyimpan data produk, stok, dan harga.       |
| `pelanggan`   | Menyimpan data pelanggan.                     |
| `penjualan`   | Mencatat semua transaksi penjualan.           |

---

**luqmanaru**
