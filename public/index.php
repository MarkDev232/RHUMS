<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RHUSM - Login</title>
  <link rel="stylesheet" href="../scss/main.css">
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  <style>
    :root {
      --primary: #FBF6EE;
      --secondary: #C1F2B0;
      --tertiary: #65B741;
      --accent: #FFB534;
      --dark: #333333;
      --light: #FFFFFF;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: var(--primary);
      font-family: 'Arial', sans-serif;
    }

    .login-form {
      width: 100%;
      max-width: 400px;
      padding: 40px;
      background: var(--secondary);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
      color: var(--dark);
      font-weight: bold;
      margin-bottom: 20px;
    }

    .form-label {
      color: var(--dark);
    }

    .form-control {
      border-radius: 5px;
      box-shadow: none;
      border-color: var(--tertiary);
    }

    .form-control:focus {
      border-color: var(--tertiary);
      box-shadow: 0 0 0 0.2rem rgba(101, 183, 65, 0.25);
    }

    .btn-custom {
      background-color: var(--tertiary);
      color: var(--light);
      font-weight: bold;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .btn-custom:hover {
      background-color: var(--accent);
      color: var(--dark);
    }

    .form-text a {
      color: var(--tertiary);
      text-decoration: none;
      transition: color 0.3s;
    }

    .form-text a:hover {
      color: var(--accent);
    }
  </style>
</head>
<body>
  <div class="login-form">
    <h2 class="text-center">Login</h2>
    <form>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required>
      </div>
      <button type="submit" class="btn btn-custom w-100">Login</button>
    </form>
    <div class="text-center mt-3 form-text">
      <a href="#" class="text-decoration-none">Forgot Password?</a>
    </div>
    <div class="text-center mt-3 form-text">
      <a href="register.php" class="text-decoration-none">Register</a>
    </div>
  </div>

  <script>
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault();
      // Add login functionality here
    });
  </script>
</body>
</html>
