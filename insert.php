<?php session_start();
include "connection.php";
if(isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $cpwd = $_POST['cpwd'];
  $agree = isset($_POST['agree']) ? 1 : 0;

  if($pwd === $cpwd && $agree) {
    $hashedPwd = sha1($pwd);
    $sql = "INSERT INTO tbl_users (fullname, username, email, password)
            VALUES ('$fname', '$uname', '$email', '$hashedPwd')";

    $res = mysqli_query($conn, $sql);
    if($res) $_SESSION['message'] = "Registration successful! You can now log in.";
    else $_SESSION['error'] = "Registration failed";
  } else $_SESSION['error'] = "Passwords do not match or Terms & Conditions not agreed.";
}
header("location: login.php");