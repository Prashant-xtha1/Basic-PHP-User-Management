<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List | User Management</title>  
  <link rel="stylesheet" href="./main.css">
</head>
<body>
  <main class="container large">
    <h1 class="page-title">User List</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Banega Don</td>
          <td>johnbanega</td>
          <td>johnbanega@example.com</td>
          <td>
            <a href="edit.php?id=1" class="btn">Edit</a>
            <a href="delete.php?id=1" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </main>
</body>
</html>