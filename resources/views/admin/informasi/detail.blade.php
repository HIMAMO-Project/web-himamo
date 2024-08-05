@extends('admin.layout.index')
@section('title', 'AE Informasi')
@section('keterangan', 'Detail Informasi')
@section('content')
<div class="card shadow p-3">
    <div class="table-responsive col-lg-12">
        <div class="mb-3">
            <p>Kategori: {{ $informasi->kategori_informasi->name }}</p>
            <h1>{{ $informasi->title }}</h1>
            <p>Tanggal: {{ date('d/m/Y', strtotime($informasi->created_at)) }}</p>
            <p>Oleh: {{ !$informasi->user->name ? 'Ristek Himamo' : $informasi->user->name }}</p>
            <img class="img-fluid mb-3 w-50 d-block mx-auto" src="{{ asset('storage/informasi/' . $informasi->image) }}" alt="{{ $informasi->title }}">
            <div>{!! $informasi->desc !!}</div>
            <div class="mt-3">
                <a href="/informasi" class="btn btn-warning">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
