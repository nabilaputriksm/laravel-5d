@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul Buku</label>
        <input type="text" name="title" placeholder="Judul buku" value="{{ $book->title }}" required>

        <br><br>

        <label>Penulis</label>
        <input type="text" name="author" placeholder="Penulis" value="{{ $book->author }}" required>

        <br><br>

        <label>Tahun Terbit</label>
        <input type="number" name="year" placeholder="Tahun terbit" value="{{ $book->year }}" required>

        <br><br>

        <label>Stok</label>
        <input type="number" name="stock" placeholder="Stok" value="{{ $book->stock }}" min="0" required>

        <br><br>

        <button type="submit">Update</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
@endsection