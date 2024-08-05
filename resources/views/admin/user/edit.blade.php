@extends('admin.layout.index')
@section('title', 'Edit Pengguna')
@section('keterangan', 'Edit Pengguna')

@section('content')

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-4">
        <label for="username">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $user->username) }}">
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label for="name">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label for="email">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label for="role">Role</label>
        <select class="form-control @error('role') is-invalid @enderror" name="role">
            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="petugas" {{ old('role', $user->role) == 'petugas' ? 'selected' : '' }}>Petugas</option>
        </select>
        @error('role')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label for="password">Password (Kosongkan jika tidak ingin mengubah)</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label for="password_confirmation">Konfirmasi Password</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection
