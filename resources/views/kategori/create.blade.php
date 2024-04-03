@extends('layouts.app')
{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori baru</h3>
            </div>
            <form method="post" action="../kategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori"
                            placeholder="untuk barang, contoh : AOC0">
                        <input type="text" class="@error('kodeKategori') is-invalid @enderror form-control"
                            id="kodeKategori" name="kodeKategori" placeholder="untuk barang, contoh : AOC0">

                        @error('kodeKategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="Nama">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
@endsection
