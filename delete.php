<?php
include 'connect.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: signin.php");
  exit();
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM files WHERE id=$id";
  mysqli_query($conn, $query);
  header("Location: dashboard.php");
}
?>