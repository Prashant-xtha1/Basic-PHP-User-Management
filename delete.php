<?php session_start();
include "./connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_users WHERE id = $id";
$res = mysqli_query($conn, $sql);

if($res)$_SESSION['message'] = "User Deleted Successfully";
else $_SESSION['message'] = "Error Deleting User: " . mysqli_error($conn);

header("Location: list.php");