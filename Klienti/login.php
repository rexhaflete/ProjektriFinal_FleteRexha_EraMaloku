<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in | Prishtina Airline</title>
  <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
  <main class="auth-main">
    <section class="auth-card">
      <h1>Welcome back</h1>
      <p class="auth-sub">Log in to manage your flights with Prishtina Airline.</p>

      <form class="auth-form" action="login.php" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" minlength="6" required>
        </div>

        <label class="remember">
          <input type="checkbox" name="remember">
          <span>Remember me</span>
        </label>

        <button type="submit" class="auth-btn">Log in</button>
      </form>

      <p class="auth-switch">Don't have an account? <a href="signup.php">Sign up</a></p>
    </section>
  </main>
</body>
</html>