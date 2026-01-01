<?php session_start();
include "connection.php";

$sql = "SELECT id, fullname, email, photo FROM tbl_users";
$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List | User Management</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <main class="container large">
    <h1 class="page-title">User List</h1>
    <?php 
      if(isset($_SESSION['message'])):
        echo "<div class='alert alert-success'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
      elseif(isset($_SESSION['error'])):
        echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
        unset($_SESSION['error']);
        endif;
    ?>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Photo</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($res)): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['fullname']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><img src= "./public/<?php echo $row['photo']; ?>" alt= "Photo Daal"></td>
          <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">
              <span class="icon icon-edit"></span>Edit
            </a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
              <span class="icon icon-delete"></span>Delete
            </a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </main>
</body>

</html>