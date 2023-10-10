<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuitJobs | {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Add custom CSS styles for responsiveness */
        .container {
            max-width: 100%;
        }
        .logo-perusahaan img {
            max-width: 100%;
            height: auto;
        }

        .informasi-terkini {
        min-height: 300px; /* Sesuaikan tinggi sesuai kebutuhan Anda */
        margin-bottom: 50px; /* Jarak antara konten dengan footer */
    }
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>
    <br>
    <h1>Tentang Kami</h1>
    <center>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        Posuere lorem ipsum dolor sit amet consectetur adipiscing. Quis hendrerit dolor magna eget est lorem. Quam quisque id diam vel quam elementum pulvinar etiam non. Gravida dictum fusce ut placerat orci nulla pellentesque. Tincidunt id aliquet risus feugiat in ante metus dictum at. Velit laoreet id donec ultrices tincidunt arcu non sodales.</h3>
    </center>
    <p></p>
    <h1>Perusahaan</h1>
    <p>Berikut adalah perusahaan yang bekerja sama dengan kami</p>
    <div class="logo-perusahaan">
        <img src="img/figma.png" alt="Logo Figma">
        <img src="img/bibir.png" alt="Logo Bibir">
        <img src="img/gatau.png" alt="Logo Gatau">
        <img src="img/muter.png" alt="Logo Muter">
        <img src="img/nirmana.png" alt="Logo Nirmana">
    </div>
    <p></p>
    <div class="informasi-terkini">
    <h1>Informasi Terkini</h1>
    <p>Berikut adalah informasi terkini mengenai SuitJobs:</p>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card mb-3">
                <img src="img/rill.jpg" class="card-img-top" alt="Berita 1" height="350">
                <div class="card-body">
                    <h5 class="card-title">Berita 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card mb-3">
                <img src="img/rill.jpg" class="card-img-top" alt="Berita 2" height="350">
                <div class="card-body">
                    <h5 class="card-title">Berita 2</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card mb-3">
                <img src="img/rill.jpg" class="card-img-top" alt="Berita 3" height="350">
                <div class="card-body">
                    <h5 class="card-title">Berita 3</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
    <div class="text-center">
    </div>
    <footer>
        @include('partials.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
