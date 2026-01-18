<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">MySite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">

        <h1 class="display-4 fw-bold mb-3">
          Hi there 👋
        </h1>

        <p class="lead mb-4">
          Congratulations 🎉 you successfully logged in and didn’t break anything.
        </p>

        <div class="alert alert-warning shadow-sm">
          <i class="bi bi-emoji-laughing me-2"></i>
          <strong>Fun fact:</strong> This page does absolutely nothing… and it’s doing it perfectly.
        </div>

        <div class="d-flex justify-content-center gap-3 mt-4">
          <button class="btn btn-success btn-lg">
            <i class="bi bi-rocket-takeoff me-1"></i> Launch Something
          </button>
          <button class="btn btn-outline-secondary btn-lg">
            <i class="bi bi-bug me-1"></i> Create Bug
          </button>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
