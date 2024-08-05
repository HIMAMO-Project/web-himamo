@extends('admin.layout.index')
@section('title', 'AE Informasi')
@section('keterangan', 'Lihat Informasi')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has("error"))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="d-flex mb-3">
        <h1 class="text-dark fs-3">Informasi</h1>
    </div>
    <div class="d-flex card shadow p-3">
        <div class="table-responsive col-lg-12">
            <div class="d-flex justify-content-between mb-3">
                <a href="/informasi/create" class="btn btn-primary">Buat Informasi</a>
                <form action="/informasi" method="get" class="form-inline navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." name="cari">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            @if (count($informasis) > 0)
                <table class="table table-hover mt-3">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informasis as $index => $informasi)
                            <tr>
                                <td>{{ $index + $informasis->firstItem() }}</td>
                                <td>
                                    <img src="{{ asset('storage/informasi/' . $informasi->image) }}" height="100" alt="">
                                </td>
                                <td>{{ $informasi->title }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/informasi/detail/{{$informasi->slug}}"><i class="bx bx-edit-alt me-1"></i> Detail</a>
                                            <a class="dropdown-item" href="/informasi/edit/{{$informasi->slug}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form action="/informasi/delete/{{$informasi->slug}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center py-3">
                    {{ $informasis->links('pagination::bootstrap-4') }}
                </div>
            @else
                <div class="alert alert-light" role="alert">
                    Tidak ada data!
                </div>
            @endif
        </div>
    </div>
@endsection
