<?php session_start();
include "connection.php";

  if (isset ($_POST['submit']) ) {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $rememberme = isset($_POST['rememberme']) ? true : false;
      
    if (empty($uname) || empty($pwd)) {
      $_SESSION['error'] = "Please fill in all fields.";
    } else {
      $sql = "SELECT id, username, password FROM tbl_users WHERE username = '$uname' OR email = '$uname' LIMIT 1";
      $res = mysqli_query($conn, $sql);

      if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();
        $hasPwd = sha1($pwd);
        if ($hasPwd === $user['password']) {
          $_SESSION['user_id'] = $user['id'];
            if ($rememberme) {
              setcookie("user_login", $user['username'], time() + (86400 * 30), "/"); //` 30 days
            }

            header("location: list.php");
        } else {
              $_SESSION['error'] = "Incorrect password.";
            }
      } else {
        $_SESSION['error'] = "User not found.";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | User Management</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <main class= "container">
    <h1 class="page-title">Login</h1>
    <?php 
      if(isset($_SESSION['message'])):
        echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
      elseif(isset($_SESSION['error'])):
        echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
        unset($_SESSION['error']);
        endif;
    ?>
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