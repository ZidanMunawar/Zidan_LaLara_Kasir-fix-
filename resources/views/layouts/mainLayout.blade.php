<!doctype html>
<html lang="en" data-bs-theme="white-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
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
@csrf
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
    <a class="dropdown-item d-flex align-items-center gap-2 py-2" name="logout" id="logout" href="/logout"><i
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
        <img src="assets/images/icons8-cashier-120.png" class="logo-img" alt="">
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






  <main class="main-wrapper">
    {{-- Memanggil konten halaman lain di sini... --}}
    @yield('content')
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


