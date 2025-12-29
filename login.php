<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | User Management</title>
  <link rel="stylesheet" href="./main.css">
</head>
<body>
  <main class= "container">
    <h1 class="page-title">Login</h1>
  <form action="#" method= "post" name= "user_form">
    <div class="field-group">
        <label for="uname">Username / E-Mail</label>
        <input type="text" id="uname" name="username" required>
    </div>

    <div class="field-group">
        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="password" required>
    </div>

    <div class="field-group">
        <input type="checkbox" id="rem" name="remember me?">
        <label for="rem">Remeber login credentials.</label>
    </div>
    <button type="submit" name="submit">Login</button>
  </form>

  <div class="btn-group">
      <hr>
      <span class="note">
        Don't you have an account? <a href="register.php" class="text-link" title="Register User">Register User &rarr;</a>
      </span><br><br>
      <a href="index.php" class="text-link">&larr; Back to Home</a>
  </div>
  </main>
</body>
</html>