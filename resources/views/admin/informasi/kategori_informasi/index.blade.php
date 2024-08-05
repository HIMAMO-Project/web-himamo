@extends('admin.layout.index')
@section('title', 'AE Informasi')
@section('keterangan', 'Kategori')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="d-flex mb-3">
        <h1 class="text-dark fs-3">Kategori</h1>
    </div>

    <div class="card shadow p-3 mb-3">
        <div class="d-flex justify-content-between mb-3">
            <form action="{{ route('kategori_informasi.index') }}" method="get" class="form-inline w-25 navbar-search justify-content-end">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..." name="cari" value="{{ request()->input('cari') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        @if ($kategoriInformasi->count() > 0)
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Slug</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = $kategoriInformasi->firstItem();
                    @endphp
                    @foreach ($kategoriInformasi as $kategori)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $kategori->name }}</td>
                            <td>{{ $kategori->slug }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('kategori_informasi.edit', $kategori->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form action="{{ route('kategori_informasi.destroy', $kategori->id) }}" method="POST">
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
                {{ $kategoriInformasi->links('pagination::bootstrap-4') }}
            </div>
        @else
            <div class="alert alert-light" role="alert">
                Tidak ada data!
            </div>
        @endif
    </div>

    <div class="card shadow p-3">
        <div class="table-responsive col-lg-12">
            <form action="{{ route('kategori_informasi.store') }}" method="POST">
                @csrf
                <div class="form-group mb-4">
                    <label for="name">Masukan Kategori</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
