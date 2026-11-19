<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up | Prishtina Airline</title>
  <link rel="stylesheet" href="../CSS/signup.css">
</head>
<body>
  <main class="auth-main">
    <section class="auth-card">
      <h1>Create your account</h1>
      <p class="auth-sub">Join Prishtina Airline and book your next flight in minutes.</p>

      <form class="auth-form" action="signup.php" method="post">
        <div class="form-two">
          <div class="form-group">
            <label for="firstname">First name</label>
            <input type="text" id="firstname" name="firstname" placeholder="First name" required>
          </div>
          <div class="form-group">
            <label for="lastname">Last name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="+383 44 000 000">
        </div>

        <div class="form-two">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="At least 6 characters" minlength="6" required>
          </div>
          <div class="form-group">
            <label for="confirm">Confirm password</label>
            <input type="password" id="confirm" name="confirm" placeholder="Repeat password" minlength="6" required>
          </div>
        </div>

        <label class="terms">
          <input type="checkbox" name="terms" required>
          <span>I agree to the terms and conditions</span>
        </label>

        <button type="submit" class="auth-btn">Create account</button>
      </form>

      <p class="auth-switch">Already have an account? <a href="login.php">Log in</a></p>
    </section>
  </main>


  <script src="../JS/main.js"></script>
</body>
</html>