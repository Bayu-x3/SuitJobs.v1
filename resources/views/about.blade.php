@extends('layout.main')
@section('container')
<link rel="stylesheet" href="css/styleAbout.css">
<br><br>
<div class="about-content">
    <h1>Tentang Kami</h1>
    <p>
        {{ $aboutWeb }}
    </p>
    <h1>Misi Kami</h1>
    <p>
        {{ $aboutWeb }}
    </p>
    <!-- Tambahkan elemen konten lainnya sesuai kebutuhan Anda -->
</div>
@endsection