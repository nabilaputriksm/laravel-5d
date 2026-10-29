@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul Buku</label>
            <input
                type="text"
                name="title"
                placeholder="Judul buku"
                value="{{ old('title', $book->title) }}"
                required
            >

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Penulis</label>
            <input
                type="text"
                name="author"
                placeholder="Penulis"
                value="{{ old('author', $book->author) }}"
                required
            >

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Tahun Terbit</label>
            <input
                type="number"
                name="year"
                placeholder="Tahun terbit"
                value="{{ old('year', $book->year) }}"
                required
            >

            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Stok</label>
            <input
                type="number"
                name="stock"
                placeholder="Stok"
                value="{{ old('stock', $book->stock) }}"
                min="0"
                required
            >

            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id">
                <option value="">Pilih kategori</option>

                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @selected(old('category_id', $book->category_id) == $category->id)
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            @error('category_id')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Update</button>

        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
@endsection
