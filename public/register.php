<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RHUSM - Register</title>
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
      font-size: 14px; /* Adjusted font size */
    }

    .register-form {
      width: 100%;
      max-width: 400px;
      padding: 20px; /* Adjusted padding */
      background: var(--secondary);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .register-form h2 {
      color: var(--dark);
      font-weight: bold;
      margin-bottom: 10px; /* Adjusted margin */
      font-size: 18px; /* Adjusted font size */
    }

    .form-label {
      color: var(--dark);
      font-size: 14px; /* Adjusted font size */
    }

    .form-control {
      border-radius: 5px;
      box-shadow: none;
      border-color: var(--tertiary);
      font-size: 14px; /* Adjusted font size */
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
      font-size: 14px; /* Adjusted font size */
    }

    .btn-custom:hover {
      background-color: var(--accent);
      color: var(--dark);
    }

    .form-text a {
      color: var(--tertiary);
      text-decoration: none;
      transition: color 0.3s;
      font-size: 12px; /* Adjusted font size */
    }

    .form-text a:hover {
      color: var(--accent);
    }

    .password-toggle {
      position: relative;
    }

    .toggle-btn {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      color: var(--dark);
    }

    /* Styling for select */
    select.form-select {
      border-radius: 5px;
      box-shadow: none;
      border-color: var(--tertiary);
      padding: 10px;
      width: 100%;
      background-color: var(--light);
      color: var(--dark);
      font-size: 14px; /* Adjusted font size */
    }

    /* Styling for options */
    select.form-select option {
      padding: 10px;
      background-color: var(--light);
      color: var(--dark);
      font-size: 14px; /* Adjusted font size */
    }

  </style>
</head>
<body>
  <div class="register-form">
    <h2 class="text-center">Register</h2>
    <form>
      <!-- Select Barangay -->
      <div class="mb-3">
        <label for="barangay" class="form-label">Barangay</label>
        <select class="form-select" id="barangay" required>
          <option value="" selected disabled>Select Barangay</option>
          <option value="Barangay 1">Barangay 1</option>
          <option value="Barangay 2">Barangay 2</option>
          <option value="Barangay 3">Barangay 3</option>
          <!-- Add more barangays as needed -->
        </select>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3 password-toggle">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required>
        <i class="bi bi-eye-slash toggle-btn" id="togglePassword" style="margin-top: 10px;"></i>
      </div>
      <div class="mb-3 password-toggle">
        <label for="confirm-password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm-password" required>
        <i class="bi bi-eye-slash toggle-btn" id="toggleConfirmPassword" style="margin-top: 10px;"></i>
      </div>
      <button type="submit" class="btn btn-custom w-100">Register</button>
    </form>
    <!-- Back button -->
    <div class="text-center mt-3 form-text">
      <a href="index.php" class="text-decoration-none"><i class="bi bi-arrow-left"></i> Back to Login</a>
    </div>
  </div>

  <script>
    // Your JavaScript code here
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault();
      // Add registration functionality here
    });

    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordField = document.getElementById('password');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
     
      passwordField.setAttribute('type', type);
      this.classList.toggle('bi-eye');
      this.classList.toggle('bi-eye-slash');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
      const confirmPasswordField = document.getElementById('confirm-password');
      const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
      confirmPasswordField.setAttribute('type', type);
      this.classList.toggle('bi-eye');
      this.classList.toggle('bi-eye-slash');
    });
  </script>
</body>
</html>
