@extends('admin.layout.index')
@section('title', 'AE Informasi')
@section('keterangan', 'Tambah Informasi')
@section('content')

<div class="d-flex mb-3">
    <h1 class="text-dark fs-3">Tambah Informasi</h1>
</div>

<div class="card shadow p-3">
    <div class="table-responsive col-lg-12">
        <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="form-group mb-4">
                <label for="title">Masukan Title Artikel</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="form-group mb-4">
                <label for="kategori_informasi_id">Kategori</label>
                <select name="kategori_informasi_id" id="kategori_informasi_id" class="form-control @error('kategori_informasi_id') is-invalid @enderror">
                    <option value="" selected="selected" hidden="hidden">Pilih Kategori</option>
                    @foreach ($kategori_informasi as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                    @endforeach
                </select>
                @error('kategori_informasi_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="form-group mb-4">
                <label for="image">Pilih Photo Informasi</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        
            <div class="form-group mb-4">
                <label for="desc">Artikel Informasi</label>
                <textarea name="desc" id="summernote" class="form-control @error('desc') is-invalid @enderror">{{ old('desc') }}</textarea>
                @error('desc')
                    <div class="text-danger">
                        {{ $message }}
                    @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</div>

@endsection
