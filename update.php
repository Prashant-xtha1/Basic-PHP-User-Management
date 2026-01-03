<?php session_start();
include "connection.php";
if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $fname = $_POST['fullname'];
  $addr = $_POST['address'];
  $photo = $_FILES['photo'];

  if($photo != '') {
    $photo_name = $photo['name'];
    $photo_tmp = $photo['tmp_name'];

    move_uploaded_file($photo_tmp, "./public/" . $photo_name);
    $sql = "UPDATE tbl_users SET fullname='$fname', address='$addr', photo='$photo_name' WHERE id=$id";
  } else {
    $sql = "UPDATE tbl_users SET fullname='$fname', address='$addr' WHERE id=$id";
  }

  $res = mysqli_query($conn, $sql);
  if($res) $_SESSION['message'] = "User Updated Successfully";
  else $_SESSION['error'] = "Error Updating User: " . mysqli_error($conn);
}
header("location: list.php"); 