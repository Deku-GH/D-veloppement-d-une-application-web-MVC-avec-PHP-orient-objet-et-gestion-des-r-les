<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
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
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sign Up Form -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-5">

        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-4">

            <h3 class="text-center fw-bold mb-2">
              Join Us 🚀
            </h3>
            <p class="text-center text-muted mb-4">
              It’s free. We promise. Probably.
            </p>

            <form>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-person"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Choose wisely" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                  </span>
                  <input type="email" class="form-control" placeholder="you@example.com" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-lock"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="Something unguessable" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-lock-fill"></i>
                  </span>
                  <input type="password" class="form-control" placeholder="Type it again (carefully)" required>
                </div>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                  I agree to the <a href="#" class="text-decoration-none">terms</a> (I didn’t read them)
                </label>
              </div>

              <button type="submit" class="btn btn-success w-100 py-2 fw-semibold">
                Create Account 🎉
              </button>
            </form>

            <div class="text-center mt-4">
              <span class="text-muted">Already have an account?</span>
              <a href="#" class="fw-semibold text-decoration-none">Login</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
