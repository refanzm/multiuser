@extends('layouts.dashboard')

@section('title', 'Edit Data Berita')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Data Berita</h1>

<!-- DataTales Example -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Berita</h6>
    </div>
    <div class="card-body">

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="font-weight-bold">Judul Berita</label>
                <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" name="judul_berita" value="{{ old('judul_berita', $berita->judul_berita) }}">

                <!-- error message untuk title -->
                @error('judul_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>

        </form>
    </div>
</div>
@endsection
