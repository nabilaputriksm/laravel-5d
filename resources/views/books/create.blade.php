@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>Tambah Buku</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title"
                placeholder="Masukkan judul buku"
                value="{{ old('title') }}">

            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Penulis</label>
            <input type="text" name="author"
                placeholder="Masukkan nama penulis"
                value="{{ old('author') }}">

            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Tahun Terbit</label>
            <input type="number" name="year"
                placeholder="Masukkan tahun terbit"
                value="{{ old('year') }}">

            @error('year')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Stok</label>
            <input type="number" name="stock"
                placeholder="Masukkan jumlah stok"
                value="{{ old('stock') }}">

            @error('stock')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
@endsection