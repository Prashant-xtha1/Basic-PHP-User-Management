<?php session_start(); 
include "connection.php";
if(!isset($_GET['id']) || empty($_GET['id'])){
    $_SESSION['error'] = "Invalid User ID.";
    header("Location: list.php");
}
$id = $_GET['id'];
$sql = "SELECT fullname, username, email, address, photo FROM tbl_users WHERE id = $id";
$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | User Management</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
  <main class="container">
      <h1 class="page-title">Edit</h1>
      <?php if($res):
        while($row = mysqli_fetch_assoc($res)): ?>
        <form action="update.php" method="post" name= "user_form" enctype="multipart/form-data">
          <div class="field-group">
            <label for="fname">Full Name </label>
            <input type="text" id="fname" name="fullname" value="<?php echo $row['fullname']; ?>">
          </div>
          <div class="field-group">
              <label for="uname">Username </label>
              <input type="text" id="uname" name="username" value="<?php echo $row['username']; ?>" disabled >
          </div>
          <div class="field-group">
              <label for="uname"> E-Mail</label>
              <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" disabled >
          </div>
          <div class="field-group">
              <label for="addr">Address</label>
              <input type="text" id="addr" name="address" value="<?php echo $row['address']; ?>">
          </div>
          <div class="field-group">
              <label for="photo">Photo</label>
              <input type="file" id="photo" name="photo" value="<?php echo $row['photo']; ?>">
          </div>
          <button type="submit" name="submit" class="btn">Update</button>
      </form>
      <?php endwhile;
        else: ?>
        <div class="alert error">User Not Found.</div>
      <?php endif; ?>
      <div class="btn-group">
          <hr>
          <a href="list.php" class= "text-Link"> &larr; View all Users</a>
      </div>
  </main>
</body>
</html>