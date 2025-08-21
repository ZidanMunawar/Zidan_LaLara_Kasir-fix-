<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
 <!--favicon-->
<link rel="icon" href="{{ asset('assets/images/logoo.png') }}" type="image/png">

<!-- loader -->
<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/js/pace.min.js') }}"></script>

<!-- plugins -->
<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/metismenu/metisMenu.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/metismenu/mm-vertical.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">

<!-- bootstrap css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

<!-- main css -->
<link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">

{{-- SASS file di template biasanya belum ter-compile.
   Kalau kamu sudah kompilasi ke CSS, taruh hasilnya di assets/css/... --}}
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/blue-theme.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/semi-dark.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bordered-theme.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>

<body>

<!--start header-->
<header class="top-header">
  <nav class="navbar navbar-expand align-items-center gap-4">
    <div class="btn-toggle">
      <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
    </div>
    <div class="search-bar flex-grow-1">
      <div class="position-relative">
        <input class="form-control rounded-5 px-5 search-control d-lg-block d-none" type="text" placeholder="Cari...">
        <span class="material-icons-outlined position-absolute d-lg-block d-none ms-3 translate-middle-y start-0 top-50">search</span>
        <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
        <div class="search-popup p-3">
          <div class="card rounded-4 overflow-hidden">
            <div class="card-header d-lg-none">
              <div class="position-relative">
                <input class="form-control rounded-5 px-5 mobile-search-control" type="text" placeholder="Cari...">
                <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                <span class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
              </div>
            </div>
            <div class="card-body search-content">
              <p class="search-title">Pencarian Terbaru</p>
              <div class="d-flex align-items-start flex-wrap gap-2 kewords-wrapper">
                <a href="javascript:;" class="kewords"><span>Produk</span><i class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Transaksi</span><i class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Pelanggan</span><i class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Laporan</span><i class="material-icons-outlined fs-6">search</i></a>
                <a href="javascript:;" class="kewords"><span>Stok Barang</span><i class="material-icons-outlined fs-6">search</i></a>
              </div>
              <hr>
              <p class="search-title">Menu Utama</p>
              <div class="search-list d-flex flex-column gap-2">
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">point_of_sale</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Transaksi Kasir</h5>
                  </div>
                </div>
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">inventory</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Manajemen Produk</h5>
                  </div>
                </div>
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="list-icon">
                    <i class="material-icons-outlined fs-5">assessment</i>
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Laporan Penjualan</h5>
                  </div>
                </div>
              </div>
              <hr>
              <p class="search-title">Tim Kasir</p>
              <div class="search-list d-flex flex-column gap-2">
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="assets/images/avatars/01.jpeg" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Sari Kasir</h5>
                  </div>
                </div>
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="assets/images/avatars/02.png" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Budi Manager</h5>
                  </div>
                </div>
                <div class="search-list-item d-flex align-items-center gap-3">
                  <div class="memmber-img">
                    <img src="assets/images/avatars/03.png" width="32" height="32" class="rounded-circle" alt="">
                  </div>
                  <div class="">
                    <h5 class="mb-0 search-list-title">Ani Supervisor</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-center bg-transparent">
              <a href="javascript:;" class="btn w-100">Lihat Semua Hasil Pencarian</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="navbar-nav gap-1 nav-right-links align-items-center">
      <li class="nav-item d-lg-none mobile-search-btn">
        <a class="nav-link" href="javascript:;"><i class="material-icons-outlined">search</i></a>
      </li>

      <li class="nav-item dropdown position-static d-md-flex d-none">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-auto-close="outside"
        data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">widgets</i></a>
        <div class="dropdown-menu dropdown-menu-end mega-menu shadow-lg p-4 p-lg-5">
          <div class="mega-menu-widgets">
           <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4 g-lg-5">
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-primary">
                        <i class="material-icons-outlined">point_of_sale</i>
                      </div>
                      <div class="mega-menu-content">
                         <h5>Transaksi Kasir</h5>
                         <p class="mb-0 f-14">Kelola semua transaksi penjualan dan pembayaran dengan mudah dan cepat.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-success">
                        <i class="material-icons-outlined">inventory</i>
                      </div>
                      <div class="mega-menu-content">
                         <h5>Stok Barang</h5>
                         <p class="mb-0 f-14">Pantau dan kelola stok barang, termasuk barang masuk dan keluar secara real-time.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-info">
                        <i class="material-icons-outlined">people</i>
                      </div>
                      <div class="mega-menu-content">
                          <h5>Data Pelanggan</h5>
                         <p class="mb-0 f-14">Kelola database pelanggan dan riwayat pembelian untuk meningkatkan layanan.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-warning">
                        <i class="material-icons-outlined">assessment</i>
                      </div>
                      <div class="mega-menu-content">
                         <h5>Laporan</h5>
                         <p class="mb-0 f-14">Akses berbagai laporan penjualan, keuntungan, dan analisis bisnis yang detail.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-danger">
                        <i class="material-icons-outlined">shopping_cart</i>
                      </div>
                      <div class="mega-menu-content">
                         <h5>Produk</h5>
                         <p class="mb-0 f-14">Tambah, edit, dan kelola semua produk beserta kategori dan harga jual.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card rounded-4 shadow-none border mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start gap-3">
                      <div class="mega-menu-icon flex-shrink-0 bg-secondary">
                        <i class="material-icons-outlined">settings</i>
                      </div>
                      <div class="mega-menu-content">
                         <h5>Pengaturan</h5>
                         <p class="mb-0 f-14">Konfigurasi sistem kasir, printer, dan pengaturan toko sesuai kebutuhan.</p>
                      </div>
                   </div>
                  </div>
                </div>
              </div>
           </div><!--end row-->
          </div>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-bs-auto-close="outside"
          data-bs-toggle="dropdown" href="javascript:;"><i class="material-icons-outlined">notifications</i>
          <span class="badge-notify">8</span>
        </a>
        <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
          <div class="px-3 py-1 d-flex align-items-center justify-content-between border-bottom">
            <h5 class="notiy-title mb-0">Notifikasi</h5>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret option" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="material-icons-outlined">more_vert</span>
              </button>
              <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">inventory_2</i>Arsipkan Semua</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">done_all</i>Tandai sudah dibaca</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">mic_off</i>Nonaktifkan Notifikasi</a></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">grade</i>Apa yang baru?</a></div>
                <div><hr class="dropdown-divider"></div>
                <div><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                      class="material-icons-outlined fs-6">leaderboard</i>Laporan</a></div>
              </div>
            </div>
          </div>
          <div class="notify-list">
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">point_of_sale</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Transaksi Berhasil</h5>
                    <p class="mb-0 notify-desc">Penjualan sebesar Rp 125.000 berhasil diproses</p>
                    <p class="mb-0 notify-time">Baru saja</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">inventory</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Stok Hampir Habis</h5>
                    <p class="mb-0 notify-desc">Produk "Kopi Arabica" tersisa 5 unit</p>
                    <p class="mb-0 notify-time">5 menit lalu</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">people</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Pelanggan Baru</h5>
                    <p class="mb-0 notify-desc">Ibu Sari telah terdaftar sebagai member</p>
                    <p class="mb-0 notify-time">10 menit lalu</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">assessment</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Laporan Harian</h5>
                    <p class="mb-0 notify-desc">Laporan penjualan hari ini siap dilihat</p>
                    <p class="mb-0 notify-time">30 menit lalu</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">error</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Sistem Peringatan</h5>
                    <p class="mb-0 notify-desc">Backup data terakhir 3 hari lalu</p>
                    <p class="mb-0 notify-time">1 jam lalu</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">update</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Update Sistem</h5>
                    <p class="mb-0 notify-desc">Versi baru aplikasi kasir tersedia</p>
                    <p class="mb-0 notify-time">2 jam lalu</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item border-bottom py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-dark text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">schedule</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Shift Kasir</h5>
                    <p class="mb-0 notify-desc">Waktu shift Anda akan berakhir dalam 1 jam</p>
                    <p class="mb-0 notify-time">3 jam lalu</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
            <div>
              <a class="dropdown-item py-2" href="javascript:;">
                <div class="d-flex align-items-center gap-3">
                  <div class="notify-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                    <i class="material-icons-outlined">celebration</i>
                  </div>
                  <div class="">
                    <h5 class="notify-title">Target Tercapai</h5>
                    <p class="mb-0 notify-desc">Target penjualan bulan ini sudah tercapai!</p>
                    <p class="mb-0 notify-time">Kemarin</p>
                  </div>
                  <div class="notify-close position-absolute end-0 me-3">
                    <i class="material-icons-outlined fs-6">close</i>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a href="javascript:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
           <img src="assets/images/avatars/01.jpeg" class="rounded-circle p-1 border" width="45" height="45" alt="">
        </a>
        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
          <a class="dropdown-item gap-2 py-2" href="javascript:;">
            <div class="text-center">
              <img src="assets/images/avatars/01.jpeg" class="rounded-circle p-1 shadow mb-3" width="90" height="90" alt="">
              <h5 class="user-name mb-0 fw-bold">Halo, Admin</h5>
            </div>
          </a>
          <hr class="dropdown-divider">
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">person_outline</i>Profil</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">settings</i>Pengaturan</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">dashboard</i>Dashboard</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">account_balance_wallet</i>Pendapatan</a>
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
            class="material-icons-outlined">help</i>Bantuan</a>
          <hr class="dropdown-divider">
          <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
          class="material-icons-outlined">power_settings_new</i>Keluar</a>
        </div>
      </li>
    </ul>
  </nav>
</header>
<!--end top header-->



 <!--start sidebar-->
   <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="assets/images/logoo.png" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0">KasirPro</h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">dashboard</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
            <ul>
              <li><a href="index.html"><i class="material-icons-outlined">arrow_right</i>Ringkasan Penjualan</a>
              </li>
              <li><a href="index2.html"><i class="material-icons-outlined">arrow_right</i>Analisis Transaksi</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="pos-kasir.html">
              <div class="parent-icon"><i class="material-icons-outlined">point_of_sale</i>
              </div>
              <div class="menu-title">Kasir (POS)</div>
            </a>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">inventory</i>
              </div>
              <div class="menu-title">Kelola Produk</div>
            </a>
            <ul>
              <li><a href="produk-tambah.html"><i class="material-icons-outlined">arrow_right</i>Tambah Produk</a>
              </li>
              <li><a href="produk-daftar.html"><i class="material-icons-outlined">arrow_right</i>Daftar Produk</a>
              </li>
              <li><a href="kategori-produk.html"><i class="material-icons-outlined">arrow_right</i>Kategori Produk</a>
              </li>
              <li><a href="stok-produk.html"><i class="material-icons-outlined">arrow_right</i>Kelola Stok</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">receipt</i>
              </div>
              <div class="menu-title">Transaksi</div>
            </a>
            <ul>
              <li><a href="transaksi-penjualan.html"><i class="material-icons-outlined">arrow_right</i>Riwayat Penjualan</a>
              </li>
              <li><a href="transaksi-refund.html"><i class="material-icons-outlined">arrow_right</i>Pengembalian</a>
              </li>
              <li><a href="struk-penjualan.html"><i class="material-icons-outlined">arrow_right</i>Cetak Struk</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">people</i>
              </div>
              <div class="menu-title">Pelanggan</div>
            </a>
            <ul>
              <li><a href="pelanggan-daftar.html"><i class="material-icons-outlined">arrow_right</i>Daftar Pelanggan</a>
              </li>
              <li><a href="pelanggan-tambah.html"><i class="material-icons-outlined">arrow_right</i>Tambah Pelanggan</a>
              </li>
              <li><a href="member-card.html"><i class="material-icons-outlined">arrow_right</i>Kartu Member</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">assessment</i>
              </div>
              <div class="menu-title">Laporan</div>
            </a>
            <ul>
              <li><a href="laporan-penjualan.html"><i class="material-icons-outlined">arrow_right</i>Laporan Penjualan</a>
              </li>
              <li><a href="laporan-produk.html"><i class="material-icons-outlined">arrow_right</i>Laporan Produk</a>
              </li>
              <li><a href="laporan-kas.html"><i class="material-icons-outlined">arrow_right</i>Laporan Kas</a>
              </li>
              <li><a href="laporan-bulanan.html"><i class="material-icons-outlined">arrow_right</i>Laporan Bulanan</a>
              </li>
            </ul>
          </li>

          <li class="menu-label">Manajemen</li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">group</i>
              </div>
              <div class="menu-title">Karyawan</div>
            </a>
            <ul>
              <li><a href="karyawan-daftar.html"><i class="material-icons-outlined">arrow_right</i>Daftar Karyawan</a>
              </li>
              <li><a href="karyawan-shift.html"><i class="material-icons-outlined">arrow_right</i>Jadwal Shift</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">settings</i>
              </div>
              <div class="menu-title">Pengaturan</div>
            </a>
            <ul>
              <li><a href="pengaturan-toko.html"><i class="material-icons-outlined">arrow_right</i>Info Toko</a>
              </li>
              <li><a href="pengaturan-printer.html"><i class="material-icons-outlined">arrow_right</i>Printer</a>
              </li>
              <li><a href="pengaturan-pajak.html"><i class="material-icons-outlined">arrow_right</i>Pajak & Diskon</a>
              </li>
              <li><a href="backup-restore.html"><i class="material-icons-outlined">arrow_right</i>Backup Data</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="profil-admin.html">
              <div class="parent-icon"><i class="material-icons-outlined">person</i>
              </div>
              <div class="menu-title">Profil Admin</div>
            </a>
          </li>

          <li>
            <a href="bantuan.html">
              <div class="parent-icon"><i class="material-icons-outlined">help_outline</i>
              </div>
              <div class="menu-title">Bantuan</div>
            </a>
          </li>

         </ul>
        <!--end navigation-->
    </div>
  </aside>
<!--end sidebar-->
  <!--start main wrapper-->
  <main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dashboard</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Analysis</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-outline-primary">Settings</button>
							<button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

        <div class="row">
  <div class="col-xxl-8 d-flex align-items-stretch">
    <div class="card w-100 overflow-hidden rounded-4">
      <div class="card-body position-relative p-4">
        <div class="row">
          <div class="col-12 col-sm-7">
            <div class="d-flex align-items-center gap-3 mb-5">
              <img src="assets/images/avatars/01.jpeg" class="rounded-circle bg-grd-info p-1" width="60" height="60" alt="user">
              <div class="">
                <p class="mb-0 fw-semibold">Selamat Datang Kembali</p>
                <h4 class="fw-semibold mb-0 fs-4 mb-0">Admin Kasir!</h4>
              </div>
            </div>
            <div class="d-flex align-items-center gap-5">
              <div class="">
                <h4 class="mb-1 fw-semibold d-flex align-content-center">Rp 8.540.000<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h4>
                <p class="mb-3">Penjualan Hari Ini</p>
                <div class="progress mb-0" style="height:5px;">
                  <div class="progress-bar bg-grd-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="vr"></div>
              <div class="">
                <h4 class="mb-1 fw-semibold d-flex align-content-center">89.2%<i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i></h4>
                <p class="mb-3">Tingkat Pertumbuhan</p>
                <div class="progress mb-0" style="height:5px;">
                  <div class="progress-bar bg-grd-danger" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-5">
            <div class="welcome-back-img pt-4">
               <img src="assets/images/gallery/welcome-back-3.png" height="180" alt="">
            </div>
          </div>
        </div><!--end row-->
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between mb-1">
          <div class="">
            <h5 class="mb-0">127</h5>
            <p class="mb-0">Transaksi Hari Ini</p>
          </div>
          <div class="dropdown">
            <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
              <span class="material-icons-outlined fs-5">more_vert</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
              <li><a class="dropdown-item" href="javascript:;">Export Data</a></li>
              <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
            </ul>
          </div>
        </div>
        <div class="chart-container2">
          <div id="chart1"></div>
        </div>
        <div class="text-center">
          <p class="mb-0 font-12">45 transaksi lebih banyak dari kemarin</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-2 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between mb-3">
          <div class="">
            <h5 class="mb-0">2.847</h5>
            <p class="mb-0">Total Pelanggan</p>
          </div>
          <div class="dropdown">
            <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
              <span class="material-icons-outlined fs-5">more_vert</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
              <li><a class="dropdown-item" href="javascript:;">Export Data</a></li>
              <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
            </ul>
          </div>
        </div>
        <div class="chart-container2">
          <div id="chart2"></div>
        </div>
        <div class="text-center">
          <p class="mb-0 font-12"><span class="text-success me-1">18.5%</span> dari bulan lalu</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
        <div class="text-center">
          <h6 class="mb-0">Pendapatan Bulanan</h6>
        </div>
        <div class="mt-4" id="chart5"></div>
        <p>Rata-rata penjualan bulanan toko</p>
        <div class="d-flex align-items-center gap-3 mt-4">
          <div class="">
            <h1 class="mb-0 text-primary">73.2%</h1>
          </div>
          <div class="d-flex align-items-center align-self-end">
            <p class="mb-0 text-success">28.7%</p>
            <span class="material-icons-outlined text-success">expand_less</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
        <div class="d-flex flex-column gap-3">
          <div class="d-flex align-items-start justify-content-between">
            <div class="">
              <h5 class="mb-0">Kategori Produk</h5>
            </div>
            <div class="dropdown">
              <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                <span class="material-icons-outlined fs-5">more_vert</span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
                <li><a class="dropdown-item" href="javascript:;">Export Data</a></li>
                <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
              </ul>
            </div>
          </div>
          <div class="position-relative">
            <div class="piechart-legend">
              <h2 class="mb-1">82%</h2>
              <h6 class="mb-0">Total Penjualan</h6>
            </div>
            <div id="chart6"></div>
          </div>
          <div class="d-flex flex-column gap-3">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 d-flex align-items-center gap-2 w-25"><span class="material-icons-outlined fs-6 text-primary">local_cafe</span>Minuman</p>
              <div class="">
                <p class="mb-0">42%</p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 d-flex align-items-center gap-2 w-25"><span class="material-icons-outlined fs-6 text-danger">restaurant</span>Makanan</p>
              <div class="">
                <p class="mb-0">35%</p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 d-flex align-items-center gap-2 w-25"><span class="material-icons-outlined fs-6 text-success">inventory</span>Lainnya</p>
              <div class="">
                <p class="mb-0">23%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xxl-4">
    <div class="row">
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card w-100 rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-1">
              <div class="">
                <h5 class="mb-0">534</h5>
                <p class="mb-0">Produk Terjual</p>
              </div>
              <div class="dropdown">
                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                  <span class="material-icons-outlined fs-5">more_vert</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
                  <li><a class="dropdown-item" href="javascript:;">Export Data</a></li>
                  <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
                </ul>
              </div>
            </div>
            <div class="chart-container2">
              <div id="chart3"></div>
            </div>
            <div class="text-center">
              <p class="mb-0 font-12"><span class="text-success me-1">22.3%</span> dari bulan lalu</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 d-flex align-items-stretch">
        <div class="card w-100 rounded-4">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-1">
              <div class="">
                <h5 class="mb-0">89</h5>
                <p class="mb-0">Stok Menipis</p>
              </div>
              <div class="dropdown">
                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                  <span class="material-icons-outlined fs-5">more_vert</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
                  <li><a class="dropdown-item" href="javascript:;">Restock</a></li>
                  <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
                </ul>
              </div>
            </div>
            <div class="chart-container2">
              <div id="chart4"></div>
            </div>
            <div class="text-center">
              <p class="mb-0 font-12">15 produk perlu segera direstok</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card rounded-4">
      <div class="card-body">
        <div class="d-flex align-items-center gap-3 mb-2">
          <div class="">
            <h3 class="mb-0">1,247</h3>
          </div>
          <div class="flex-grow-0">
            <p class="dash-lable d-flex align-items-center gap-1 rounded mb-0 bg-success text-success bg-opacity-10">
              <span class="material-icons-outlined fs-6">arrow_upward</span>15.2%
            </p>
          </div>
        </div>
        <p class="mb-0">Total Member Aktif</p>
        <div id="chart7"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between mb-3">
          <div class="">
            <h6 class="mb-0 fw-bold">Statistik Kasir</h6>
          </div>
          <div class="dropdown">
            <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
              <span class="material-icons-outlined fs-5">more_vert</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
              <li><a class="dropdown-item" href="javascript:;">Export Data</a></li>
              <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
            </ul>
          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item px-0 bg-transparent">
            <div class="d-flex align-items-center gap-3">
              <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-primary">
                <span class="material-icons-outlined text-white">point_of_sale</span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Transaksi</h6>
              </div>
              <div class="d-flex align-items-center gap-3">
                <p class="mb-0">127</p>
                <p class="mb-0 fw-bold text-success">28%</p>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0 bg-transparent">
            <div class="d-flex align-items-center gap-3">
              <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-success">
                <span class="material-icons-outlined text-white">payments</span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Pembayaran Cash</h6>
              </div>
              <div class="d-flex align-items-center gap-3">
                <p class="mb-0">89</p>
                <p class="mb-0 fw-bold text-success">70%</p>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0 bg-transparent">
            <div class="d-flex align-items-center gap-3">
              <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-branding">
                <span class="material-icons-outlined text-white">credit_card</span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Pembayaran Non-Cash</h6>
              </div>
              <div class="d-flex align-items-center gap-3">
                <p class="mb-0">38</p>
                <p class="mb-0 fw-bold text-success">30%</p>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0 bg-transparent">
            <div class="d-flex align-items-center gap-3">
              <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-warning">
                <span class="material-icons-outlined text-white">receipt</span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Struk Dicetak</h6>
              </div>
              <div class="d-flex align-items-center gap-3">
                <p class="mb-0">115</p>
                <p class="mb-0 fw-bold text-success">91%</p>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0 bg-transparent">
            <div class="d-flex align-items-center gap-3">
              <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-info">
                <span class="material-icons-outlined text-white">people</span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Member Baru</h6>
              </div>
              <div class="d-flex align-items-center gap-3">
                <p class="mb-0">12</p>
                <p class="mb-0 fw-bold text-success">+9%</p>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0 bg-transparent">
            <div class="d-flex align-items-center gap-3">
              <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-danger">
                <span class="material-icons-outlined text-white">cancel</span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Transaksi Dibatalkan</h6>
              </div>
              <div class="d-flex align-items-center gap-3">
                <p class="mb-0">3</p>
                <p class="mb-0 fw-bold text-danger">2%</p>
              </div>
            </div>
          </li>
          <li class="list-group-item px-0 bg-transparent">
            <div class="d-flex align-items-center gap-3">
              <div class="wh-42 d-flex align-items-center justify-content-center rounded-3 bg-grd-deep-blue">
                <span class="material-icons-outlined text-white">trending_up</span>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">Rata-rata per Transaksi</h6>
              </div>
              <div class="d-flex align-items-center gap-3">
                <p class="mb-0">67K</p>
                <p class="mb-0 fw-bold text-success">12%</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
        <div id="chart8"></div>
        <div class="d-flex align-items-center gap-3 mt-4">
          <div class="">
            <h1 class="mb-0">42.8%</h1>
          </div>
          <div class="d-flex align-items-center align-self-end gap-2">
            <span class="material-icons-outlined text-success">trending_up</span>
            <p class="mb-0 text-success">18.2%</p>
          </div>
        </div>
        <p class="mb-4">Pertumbuhan Penjualan</p>
        <div class="d-flex flex-column gap-3">
          <div class="">
            <p class="mb-1">Produk Terlaris <span class="float-end">342</span></p>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-grd-primary" style="width: 75%"></div>
            </div>
          </div>
          <div class="">
            <p class="mb-1">Member Aktif <span class="float-end">289</span></p>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-grd-warning" style="width: 65%"></div>
            </div>
          </div>
          <div class="">
            <p class="mb-1">Diskon Digunakan <span class="float-end">156</span></p>
            <div class="progress" style="height: 5px;">
              <div class="progress-bar bg-grd-info" style="width: 45%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between mb-3">
          <div class="">
            <h5 class="mb-0 fw-bold">Produk Terlaris</h5>
          </div>
          <div class="dropdown">
            <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
              <span class="material-icons-outlined fs-5">more_vert</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
              <li><a class="dropdown-item" href="javascript:;">Export Data</a></li>
              <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
            </ul>
          </div>
        </div>
        <div class="d-flex flex-column justify-content-between gap-4">
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
              <img src="assets/images/apps/17.png" width="32" alt="">
              <p class="mb-0">Kopi Americano</p>
            </div>
            <div class="">
              <p class="mb-0 fs-6">85 terjual</p>
            </div>
            <div class="">
              <p class="mb-0 data-attributes">
                <span data-peity='{ "fill": ["#0d6efd", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>85/100</span>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
              <img src="assets/images/apps/18.png" width="32" alt="">
              <p class="mb-0">Nasi Gudeg</p>
            </div>
            <div class="">
              <p class="mb-0 fs-6">72 terjual</p>
            </div>
            <div class="">
              <p class="mb-0 data-attributes">
                <span data-peity='{ "fill": ["#fc185a", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>72/100</span>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
              <img src="assets/images/apps/19.png" width="32" alt="">
              <p class="mb-0">Es Teh Manis</p>
            </div>
            <div class="">
              <p class="mb-0 fs-6">68 terjual</p>
            </div>
            <div class="">
              <p class="mb-0 data-attributes">
                <span data-peity='{ "fill": ["#02c27a", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>68/100</span>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
              <img src="assets/images/apps/20.png" width="32" alt="">
              <p class="mb-0">Roti Bakar</p>
            </div>
            <div class="">
              <p class="mb-0 fs-6">54 terjual</p>
            </div>
            <div class="">
              <p class="mb-0 data-attributes">
                <span data-peity='{ "fill": ["#fd7e14", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>54/100</span>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
              <img src="assets/images/apps/05.png" width="32" alt="">
              <p class="mb-0">Mie Ayam</p>
            </div>
            <div class="">
              <p class="mb-0 fs-6">47 terjual</p>
            </div>
            <div class="">
              <p class="mb-0 data-attributes">
                <span data-peity='{ "fill": ["#0dcaf0", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>47/100</span>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
              <img src="assets/images/apps/08.png" width="32" alt="">
              <p class="mb-0">Gado-gado</p>
            </div>
            <div class="">
              <p class="mb-0 fs-6">39 terjual</p>
            </div>
            <div class="">
              <p class="mb-0 data-attributes">
                <span data-peity='{ "fill": ["#6f42c1", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>39/100</span>
              </p>
            </div>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
              <img src="assets/images/apps/07.png" width="32" alt="">
              <p class="mb-0">Jus Jeruk</p>
            </div>
            <div class="">
              <p class="mb-0 fs-6">28 terjual</p>
            </div>
            <div class="">
              <p class="mb-0 data-attributes">
                <span data-peity='{ "fill": ["#ff00b3", "rgb(255 255 255 / 10%)"], "innerRadius": 14, "radius": 18 }'>28/100</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-header border-0 p-3 border-bottom">
        <div class="d-flex align-items-start justify-content-between">
          <div class="">
            <h5 class="mb-0">Kasir Aktif</h5>
          </div>
          <div class="dropdown">
            <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
              <span class="material-icons-outlined fs-5">more_vert</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Lihat Detail</a></li>
              <li><a class="dropdown-item" href="javascript:;">Tambah Kasir</a></li>
              <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="user-list p-3">
          <div class="d-flex flex-column gap-3">
            <div class="d-flex align-items-center gap-3">
              <img src="assets/images/avatars/01.jpeg" width="45" height="45" class="rounded-circle" alt="">
              <div class="flex-grow-1">
                <h6 class="mb-0">Sari Indah</h6>
                <p class="mb-0">Kasir 1 - Shift Pagi</p>
              </div>
              <div class="badge bg-success">Aktif</div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <img src="assets/images/avatars/02.png" width="45" height="45" class="rounded-circle" alt="">
              <div class="flex-grow-1">
                <h6 class="mb-0">Budi Santoso</h6>
                <p class="mb-0">Kasir 2 - Shift Siang</p>
              </div>
              <div class="badge bg-warning">Istirahat</div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <img src="assets/images/avatars/03.png" width="45" height="45" class="rounded-circle" alt="">
              <div class="flex-grow-1">
                <h6 class="mb-0">Ani Wulandari</h6>
                <p class="mb-0">Supervisor</p>
              </div>
              <div class="badge bg-success">Aktif</div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <img src="assets/images/avatars/04.png" width="45" height="45" class="rounded-circle" alt="">
              <div class="flex-grow-1">
                <h6 class="mb-0">Dewi Kartika</h6>
                <p class="mb-0">Kasir 3 - Shift Malam</p>
              </div>
              <div class="badge bg-secondary">Off</div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <img src="assets/images/avatars/05.png" width="45" height="45" class="rounded-circle" alt="">
              <div class="flex-grow-1">
                <h6 class="mb-0">Riko Pratama</h6>
                <p class="mb-0">Manager Toko</p>
              </div>
              <div class="badge bg-success">Aktif</div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <img src="assets/images/avatars/06.png" width="45" height="45" class="rounded-circle" alt="">
              <div class="flex-grow-1">
                <h6 class="mb-0">Maya Sari</h6>
                <p class="mb-0">Kasir 4 - Part Time</p>
              </div>
              <div class="badge bg-secondary">Off</div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <img src="assets/images/avatars/08.png" width="45" height="45" class="rounded-circle" alt="">
              <div class="flex-grow-1">
                <h6 class="mb-0">Andi Kurniawan</h6>
                <p class="mb-0">Kasir 5 - Weekend</p>
              </div>
              <div class="badge bg-secondary">Off</div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer bg-transparent p-3">
        <div class="d-flex align-items-center justify-content-between gap-3">
          <a href="javascript:;" class="sharelink" title="Jadwal Shift"><i class="material-icons-outlined">schedule</i></a>
          <a href="javascript:;" class="sharelink" title="Laporan Kinerja"><i class="material-icons-outlined">assessment</i></a>
          <a href="javascript:;" class="sharelink" title="Absensi"><i class="material-icons-outlined">how_to_reg</i></a>
          <a href="javascript:;" class="sharelink" title="Pengaturan"><i class="material-icons-outlined">settings</i></a>
          <a href="javascript:;" class="sharelink" title="Tambah Kasir"><i class="material-icons-outlined">person_add</i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
    <div class="card w-100 rounded-4">
      <div class="card-body">
       <div class="d-flex align-items-start justify-content-between mb-3">
          <div class="">
            <h5 class="mb-0">Transaksi Terbaru</h5>
          </div>
          <div class="dropdown">
            <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
              <span class="material-icons-outlined fs-5">more_vert</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="javascript:;">Lihat Semua</a></li>
              <li><a class="dropdown-item" href="javascript:;">Export Data</a></li>
              <li><a class="dropdown-item" href="javascript:;">Refresh</a></li>
            </ul>
          </div>
        </div>
        <div class="order-search position-relative my-3">
          <input class="form-control rounded-5 px-5" type="text" placeholder="Cari transaksi...">
          <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
        </div>
         <div class="table-responsive">
             <table class="table align-middle">
               <thead>
                <tr>
                  <th>Produk</th>
                  <th>Total</th>
                  <th>Kasir</th>
                  <th>Pembayaran</th>
                  <th>Status</th>
                </tr>
               </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                         <div class="">
                            <img src="assets/images/top-products/01.png" class="rounded-circle" width="50" height="50" alt="">
                         </div>
                         <p class="mb-0">Kopi Americano + Roti</p>
                      </div>
                    </td>
                    <td>Rp 45.000</td>
                    <td>Sari Indah</td>
                    <td><span class="badge bg-primary">Cash</span></td>
                    <td><p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">Selesai</p></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                         <div class="">
                            <img src="assets/images/top-products/02.png" class="rounded-circle" width="50" height="50" alt="">
                         </div>
                         <p class="mb-0">Nasi Gudeg Special</p>
                      </div>
                    </td>
                    <td>Rp 28.000</td>
                    <td>Budi Santoso</td>
                    <td><span class="badge bg-info">E-Wallet</span></td>
                    <td><p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">Selesai</p></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                         <div class="">
                            <img src="assets/images/top-products/03.png" class="rounded-circle" width="50" height="50" alt="">
                         </div>
                         <p class="mb-0">Es Teh + Gorengan</p>
                      </div>
                    </td>
                    <td>Rp 15.000</td>
                    <td>Sari Indah</td>
                    <td><span class="badge bg-primary">Cash</span></td>
                    <td><p class="dash-lable mb-0 bg-warning bg-opacity-10 text-warning rounded-2">Diproses</p></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                         <div class="">
                            <img src="assets/images/top-products/04.png" class="rounded-circle" width="50" height="50" alt="">
                         </div>
                         <p class="mb-0">Mie Ayam Komplit</p>
                      </div>
                    </td>
                    <td>Rp 22.000</td>
                    <td>Ani Wulandari</td>
                    <td><span class="badge bg-success">Debit</span></td>
                    <td><p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">Selesai</p></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                         <div class="">
                            <img src="assets/images/top-products/06.png" class="rounded-circle" width="50" height="50" alt="">
                         </div>
                         <p class="mb-0">Paket Nasi + Minuman</p>
                      </div>
                    </td>
                    <td>Rp 35.000</td>
                    <td>Budi Santoso</td>
                    <td><span class="badge bg-warning">QRIS</span></td>
                    <td><p class="dash-lable mb-0 bg-danger bg-opacity-10 text-danger rounded-2">Dibatalkan</p></td>
                  </tr>
                </tbody>
             </table>
         </div>
      </div>
    </div>
  </div>
</div>
    </div>
  </main>
  <!--end main wrapper-->

  <!--start overlay-->
     <div class="overlay btn-toggle"></div>
  <!--end overlay-->

   <!--start footer-->
   <footer class="page-footer">
    <p class="mb-0">Copyright © 2024. All right reserved.</p>
  </footer>
  <!--end footer-->

  <!--start cart-->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header border-bottom h-70">
      <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body p-0">
      <div class="order-list">
        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/01.jpeg" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">White Men Shoes</h5>
            <p class="mb-0 order-price">$289</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/02.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Red Airpods</h5>
            <p class="mb-0 order-price">$149</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/03.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
            <p class="mb-0 order-price">$139</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/04.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
            <p class="mb-0 order-price">$485</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/05.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Fancy Shirts</h5>
            <p class="mb-0 order-price">$758</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/06.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Home Sofa Set </h5>
            <p class="mb-0 order-price">$546</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/07.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Black iPhone</h5>
            <p class="mb-0 order-price">$1049</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>

        <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
          <div class="order-img">
            <img src="assets/images/orders/08.png" class="img-fluid rounded-3" width="75" alt="">
          </div>
          <div class="order-info flex-grow-1">
            <h5 class="mb-1 order-title">Goldan Watch</h5>
            <p class="mb-0 order-price">$689</p>
          </div>
          <div class="d-flex">
            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer h-70 p-3 border-top">
      <div class="d-grid">
        <button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View Products</button>
      </div>
    </div>
  </div>
  <!--end cart-->



  <!--start switcher-->
  <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
    <i class="material-icons-outlined">tune</i>Customize
  </button>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
    <div class="offcanvas-header border-bottom h-70">
      <div class="">
        <h5 class="mb-0">Theme Customizer</h5>
        <p class="mb-0">Customize your theme</p>
      </div>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body">
      <div>
        <p>Theme variation</p>

        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BlueTheme">
              <span class="material-icons-outlined">contactless</span>
              <span>Blue</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">
              <span class="material-icons-outlined">light_mode</span>
              <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
              <span class="material-icons-outlined">dark_mode</span>
              <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">
              <span class="material-icons-outlined">contrast</span>
              <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">
              <span class="material-icons-outlined">border_style</span>
              <span>Bordered</span>
            </label>
          </div>
        </div><!--end row-->

      </div>
    </div>
  </div>
  <!--start switcher-->

<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- plugins -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
<script>
  $(".data-attributes span").peity("donut")
  new PerfectScrollbar(".user-list")
</script>

<!-- app js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/dashboard1.js') }}"></script>

</body>

</html>
