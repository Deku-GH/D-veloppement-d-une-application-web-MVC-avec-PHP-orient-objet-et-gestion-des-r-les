<?php 
session_start();

$_SESSION['is_logged_in'] = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="col-md-4 col-sm-10">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

          <h3 class="text-center fw-bold mb-2">Welcome Back</h3>
          <p class="text-center text-muted mb-4">Sign in to continue</p>

          <form action="/Home" method="post" >
            <div class="mb-3">
              <label class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-envelope"></i>
                </span>
                <input type="email" class="form-control" placeholder="Enter email" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="bi bi-lock"></i>
                </span>
                <input type="password" class="form-control" placeholder="Enter password" required>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label" for="remember">
                  Remember me
                </label>
              </div>
              <a href="#" class="text-decoration-none small">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
              Login
            </button>
          </form>

          <div class="text-center mt-4">
            <span class="text-muted">Don’t have an account?</span>
            <a href="/regester
            
            
            " class="fw-semibold text-decoration-none">Sign up</a>
          </div>

        </div>
      </div>
    </div>
  </div>

</body>
</html>
