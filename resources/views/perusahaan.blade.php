@extends('layout.main')

@section('container')
<link rel="stylesheet" href="css/stylePerusahaan.css">
<style>
    /* Tambahkan CSS tambahan jika diperlukan */
</style>

<center>
    <br>
    <h1>Perusahaan</h1>
    <p>Berikut adalah list perusahaan yang bekerja sama dengan Kami</p>
</center>
<br>
 <br>
  <br>
<div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-border">
                    <div class="card-image">
                        <img src="img/pdi.jpg" alt="Logo Perusahaan PDI">
                    </div>
                </div>
                <br>
                <center>
                    <h1>Perusahaan PDI</h1>
                    <!-- Tombol "Detail" untuk membuka modal -->
                    <div class="button-perusahaan">
                        <div class="detail">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-border">
                    <div class="card-image">
                        <img src="img/pdi.jpg" alt="Logo Perusahaan Lain">
                    </div>
                </div>
                <br>
                <center>
                    <h1>Perusahaan PDI</h1>
                    <!-- Tombol "Detail" untuk membuka modal -->
                    <div class="button-perusahaan">
                        <div class="detail">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-border">
                    <div class="card-image">
                        <img src="img/pdi.jpg" alt="Logo Perusahaan Lainnya">
                    </div>
                </div>
                <br>
                <center>
                    <h1>Perusahaan PDI</h1>
                    <!-- Tombol "Detail" untuk membuka modal -->
                    <div class="button-perusahaan">
                        <div class="detail">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-border">
                    <div class="card-image">
                        <img src="img/pdi.jpg" alt="Logo Perusahaan Lainnya">
                    </div>
                </div>
                <br>
                <center>
                    <h1>Perusahaan PDI</h1>
                    <!-- Tombol "Detail" untuk membuka modal -->
                    <div class="button-perusahaan">
                        <div class="detail">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk detail perusahaan -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Perusahaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Isi modal di sini -->
                <h2>Deskripsi Perusahaan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="modal-footer">
                <div class="border1">
                    <div class="button1">
                        <a href="https://www.pdiperjuangan.id/">Website Perusahaan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="js/scriptPerusahaan.js"></script>
@endsection
