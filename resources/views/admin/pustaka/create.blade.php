@extends('admin.layout.index')
@section('title', 'AE Pustaka')
@if (!empty($pustaka->slug))
@section('keterangan', 'Edit Pustaka')
@else
@section('keterangan', 'Tambah Pustaka')
@endif
@section('content')

<div class="d-flex mb-3">
    <h1 class="text-dark fs-3">{{ !empty($pustaka->slug) ? 'Edit Pustaka' : 'Tambah Pustaka' }}</h1>
</div>

<div class="card shadow p-3">
    <div class="table-responsive col-lg-12">
        {{-- Cek Form Create/Edit --}}
        @if (!empty($pustaka->slug))
        <form action="{{ route('pustaka.update', $pustaka->slug) }}" method="POST">
            @method('PUT')
        @else
        <form action="{{ route('pustaka.store') }}" method="POST">
        @endif
        {{-- Cek Form Create/Edit --}}
            @csrf

            <div class="form-group mb-4">
                <label for="title">Masukan Title Pustaka</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ !empty($pustaka->title) ? $pustaka->title : old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="url">URL Pustaka</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ !empty($pustaka->url) ? $pustaka->url : old('url') }}">
                @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="collection">Koleksi Pustaka</label>
                <select class="form-control @error('collection') is-invalid @enderror" id="collection" name="collection">
                    <option value="" selected="selected" hidden="hidden">-- Pilih --</option>
                    <option value="TRO" @if (old('collection') == 'TRO' || (!empty($pustaka->collection) && $pustaka->collection == 'TRO')) selected @endif>TRO</option>
                    <option value="TRMO" @if (old('collection') == 'TRMO' || (!empty($pustaka->collection) && $pustaka->collection == 'TRMO')) selected @endif>TRMO</option>
                    <option value="TRIN" @if (old('collection') == 'TRIN' || (!empty($pustaka->collection) && $pustaka->collection == 'TRIN')) selected @endif>TRIN</option>
                    <option value="Teori" @if (old('collection') == 'Teori' || (!empty($pustaka->collection) && $pustaka->collection == 'Teori')) selected @endif>Teori</option>
                </select>
                @error('collection')
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
