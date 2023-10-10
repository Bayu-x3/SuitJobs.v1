<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add Bootstrap CSS link -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Add Google Fonts for Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
  <style>
    /* Custom CSS to change navbar color */
.custom-navbar {
  background-color: #FFFFFF;
}

/* Custom CSS to set font to Inter ExtraBold, size to 30, and color to 4D4D4D for "SuitJobs" */
.navbar-brand {
  font-family: 'Inter', sans-serif;
  font-weight: 800;
  font-size: 30px;
  color: #4D4D4D;
}

/* Custom CSS to set font to Inter, size to 15 for menu items Home, Perusahaan, Lowongan, and Contact */
.navbar-nav .nav-link {
  font-family: 'Inter', sans-serif;
  font-size: 15px;
  margin-right: 15px;
}

/* Custom CSS for active navbar link */
.navbar-nav .nav-link.active {
  color: #2194f3;
}

/* Custom CSS for Login button */
.login-button {
  font-family: 'Inter', sans-serif;
  font-size: 25px;
  display: flex;
  width: 100px;
  height: 50px;
  padding: 16px 32px;
  justify-content: center;
  align-items: center;
  gap: 10px;
  flex-shrink: 0;
  border-radius: 95px;
  background: var(--brand-info, #2194F3);
  color: #FFFFFF;
  text-decoration: none;
}

  </style>
</head>
<body>
  <!-- Bootstrap responsive navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container-fluid">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="/home">
        <img src="img/Suit.png" alt="SuitJobs Logo" width="50" height="50">
        SuitJobs
      </a>

      <!-- Toggle button for mobile -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu items -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Perusahaan') ? 'active' : '' }}" href="/perusahaan">Perusahaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Lowongan') ? 'active' : '' }}" href="/lowongan">Lowongan</a>
          </li>
        </ul>
        <!-- Login button -->
        <a class="login-button" href="/login" style="text-decoration: none;">Login</a>
      </div>
    </div>
  </nav>

  <!-- Add Bootstrap JS scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
