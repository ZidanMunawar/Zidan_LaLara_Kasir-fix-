@extends('layouts.mainLayout')
@section('title', 'Dashboard')
@section('content')
 <!--start main wrapper-->

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
<div class="col-md-6 col-lg-5"> {{-- col ini atur ukuran --}}
  <div class="card overflow-hidden rounded-4">
    <div class="card-body position-relative p-4">
      <div class="row">
        <div class="col-12">
          <div class="d-flex align-items-center gap-3 mb-4">
            <img src="{{ asset('assets/images/avatars/01.jpeg') }}"
                 class="rounded-circle bg-grd-info p-1"
                 width="50" height="50" alt="user">
            <div>
             <h3 class="mb-1 fw-bold">
    Halaman Dashboard
</h3>
<p class="mb-3">
    Ini Dashboard {{ ucfirst(Auth::user()->hak_akses) }}
</p>

              <h6 class="fw-semibold mb-0">
                Anda login sebagai {{ Auth::user()->nama_lengkap }} <br>
                Email = {{ Auth::user()->email }} <br>
                Hak akses = {{ ucfirst(Auth::user()->hak_akses) }}
              </h6>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
