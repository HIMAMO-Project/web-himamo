@extends('admin.layout.index')
@section('title', 'Dashboard')
@section('keterangan', Auth::user()->role)
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(auth()->check() && auth()->user()->role == 'admin')
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/img/avatars/user.svg') }}" alt="Users" class="w-px-40 h-auto rounded-circle" style="object-fit: cover;">
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Jumlah Pengguna</h5>
                                <h1 class="mb-0">{{ $userCount }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/img/avatars/category.svg') }}" alt="Categories" class="w-px-40 h-auto rounded-circle" style="object-fit: cover;">
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Jumlah Kategori</h5>
                                <h1 class="mb-0">{{ $kategoriCount }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/img/avatars/information.svg') }}" alt="AE Informasi" class="w-px-40 h-auto rounded-circle" style="object-fit: cover;">
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Jumlah AE Informasi</h5>
                                <h1 class="mb-0">{{ $informasiCount }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/img/avatars/pustaka.svg') }}" alt="AE Pustaka" class="w-px-40 h-auto rounded-circle" style="object-fit: cover;">
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Jumlah AE Pustaka</h5>
                                <h1 class="mb-0">{{ $pustakaCount }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Total Aktivitas</h5>
                            <small class="text-muted">AE Informasi dan Pustaka</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">{{ array_sum($monthlyActivity) }}</h2>
                                <span>Total Aktivitas (30 Hari Terakhir)</span>
                            </div>
                            <div id="orderStatisticsChart" style="width: 100%; height: 80px;"></div>
                        </div>
                        <ul class="p-0 m-0">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
