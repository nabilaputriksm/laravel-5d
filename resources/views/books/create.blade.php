@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" placeholder="Masukkan judul buku" required>
        </div>

        <br>

        <div>
            <label>Penulis</label>
            <input type="text" name="author" placeholder="Masukkan nama penulis" required>
        </div>

        <br>

        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year" placeholder="Masukkan tahun terbit" required>
        </div>

        <br>

        <div>
            <label>Stok</label>
            <input type="number" name="stock" placeholder="Masukkan jumlah stok" min="0" required>
        </div>

        <br>

        <button type="submit">Simpan</button>

        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
@endsection