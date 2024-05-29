<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infinity Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .login-container {
      display: flex;
      height: 100vh;
    }
    .login-form {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }
    .login-image {
      flex: 1;
      background: url('YOUR_IMAGE_URL') no-repeat center center;
      background-size: cover;
      position: relative;
    }
    .login-image::before {
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(255, 0, 0, 0.6);
    }
    .login-image-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      text-align: center;
    }
    .login-image-content h1 {
      font-size: 3rem;
    }
    .login-image-content p {
      margin-top: 1rem;
    }
    .form-control {
      border-radius: 50px;
    }
    .btn-custom {
      border-radius: 50px;
      background-color: #e74c3c;
      color: #fff;
    }
    .btn-custom:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>

  <div class="container-fluid login-container">
    <div class="login-form">
      <div class="w-100" style="max-width: 400px;">
        <h2 class="mb-4 text-center">WELCOME TO <span class="text-danger">INFINITY</span></h2>
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-custom w-100">Sign In</button>
          <div class="text-center mt-3">
            <a href="#">Don't have an account? Sign Up Now</a>
          </div>
          <div class="text-center mt-3">
            <p>Or continue with social media</p>
            <div>
              <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-google"></i></a>
              <a href="#" class="btn btn-outline-secondary"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="login-image">
      <div class="login-image-content">
        <h1>INFINITY</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec neque tortor. Proin efficitur leo vel ex aliquam ullamcorper.</p>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
