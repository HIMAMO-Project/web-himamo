@extends('admin.layout.index')
@section('title', 'Edit Informasi')
@section('keterangan', 'Edit Informasi')
@section('content')


<div class="d-flex mb-3">
    <h1 class="text-dark fs-3">Edit Informasi</h1>
</div>

<div class="card shadow p-3">
    <div class="table-responsive col-lg-12">

<form action="{{ route('informasi.update', $informasi->slug) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mb-4">
        <label for="title">Masukan title Kegiatan</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror"
            name="title" value="{{ old('title', $informasi->title) }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <div class="form-group mb-4">
        <label for="kategori_informasi_id">Kategori Informasi</label>
        <select name="kategori_informasi_id" id="kategori_informasi_id" class="form-control @error('kategori_informasi_id') is-invalid @enderror">
            @foreach($kategori_informasi as $kategori)
                <option value="{{ $kategori->id }}" {{ $informasi->kategori_informasi_id == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->name }}
                </option>
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
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        @if ($informasi->image)
            <div class="mt-2">
                <img src="{{ asset('storage/informasi/' . $informasi->image) }}" alt="Current Image" style="width: 150px;">
            </div>
        @endif
    </div>

    <div class="form-group mb-4">
        <label for="desc">Artikel Informasi</label>
        <textarea name="desc" id="summernote">{{ old('desc', $informasi->desc) }}</textarea>
        @error('desc')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    

    <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</div>

@endsection