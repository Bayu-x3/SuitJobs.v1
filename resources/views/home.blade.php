        <!-- @extends('layout.about') -->

        @section('container')
        <link rel="stylesheet" href="css/style.css">
        <div class="container">
            <!-- Konten Slide 1 -->
            <div class="slide-content slide-content-1 active">
                <div class="layout">
                    <h2><span class="brand">SuitJobs</span><br><span class="description">Platform Pencari Kerja yang Efektif dan Informatif</span></h2>
                    <p class="content">Selamat datang di SuitJobs - Slide 1</p>
                </div>
            </div>

            <!-- Konten Slide 2 -->
            <div class="slide-content">
                <div class="layout">
                <h2><span class="brand">SuitJobs</span><br><span class="description">Platform Pencari Kerja yang Efektif dan Informatif</span></h2>
                    <p class="content">Selamat datang di SuitJobs - Slide 2</p>
                </div>
            </div>

            <!-- Konten Slide 3 -->
            <div class="slide-content">
                <div class="layout">
                <h2><span class="brand">SuitJobs</span><br><span class="description">Platform Pencari Kerja yang Efektif dan Informatif</span></h2>
                    <p class="content">Selamat datang di SuitJobs - Slide 3</p>
                </div>
            </div>
            <!-- Elips Container untuk tombol slide -->
            <div class="elips-container">
                <span class="elips" onclick="showSlide(0)"></span>
                <span class="elips" onclick="showSlide(1)"></span>
                <span class="elips" onclick="showSlide(2)"></span>
            </div>
            <!-- Tombol Slide -->
            <span class="slide-button left" onclick="slide(-1)">❮</span>
            <span class="slide-button right" onclick="slide(1)">❯</span>
        </div>
        <div class="about-container">
    </div>
        <!-- <script src="js/script.js"></script> -->
       <script src="{{asset('js/script.js')}}"></script>
        @endsection