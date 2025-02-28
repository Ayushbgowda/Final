<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login & Registration</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <div class="container" id="register-container">
    <div class="logo">
      <img src="images/NA.png" alt="Logo" />
    </div>
    <form id="register-form" action="log_reg.php" method="post">
      <h2>Register</h2>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Enter your username" />
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email" />
      </div>
      <div class="input-group">
        <label for="password">New Password</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password" />
      </div>
      <div class="input-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" required placeholder="Confirm your password" />
      </div>
      <button type="submit" class="btn">Register</button>
      <div class="link">
        <p>Already have an account? <a href="#login">Login Here</a></p>
      </div>
    </form>
  </div>

  <div class="container" id="login-container" style="display: none">
    <div class="logo">
      <img src="images/NA.png" alt="Logo" />
    </div>
    <form action="log_reg.php" id="login-form" method="post">
      <h2>Login</h2>
      <div class="input-group">
        <label for="login-username">Username</label>
        <input type="text" id="login-username" name="username" required placeholder="Enter your username" />
      </div>
      <div class="input-group">
        <label for="login-password">Password</label>
        <input type="password" id="login-password" name="password" required placeholder="Enter your password" />
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="link">
        <p>Don't have an account? <a href="#register">Register Here</a></p>
      </div>
    </form>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const registerContainer = document.getElementById("register-container");
      const loginContainer = document.getElementById("login-container");

      function showLogin() {
        registerContainer.style.display = "none";
        loginContainer.style.display = "block";
      }

      function showRegister() {
        loginContainer.style.display = "none";
        registerContainer.style.display = "block";
      }

      // Attach event listeners to links
      document
        .querySelector(".link a[href='#login']")
        .addEventListener("click", function (event) {
          event.preventDefault();
          showLogin();
        });

      document
        .querySelector(".link a[href='#register']")
        .addEventListener("click", function (event) {
          event.preventDefault();
          showRegister();
        });

      // Password confirmation validation
      document
        .getElementById("register-form")
        .addEventListener("submit", function (event) {
          const password = document.getElementById("password").value;
          const confirmPassword =
            document.getElementById("confirm-password").value;

          if (password !== confirmPassword) {
            event.preventDefault();
            alert("Passwords do not match!");
          }
        });
    });
  </script>
</body>

</html>