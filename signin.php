<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - Qassim Cloud</title>
 <link rel="stylesheet" href="styyle.css">
    
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card shadow p-4" style="max-width: 400px; margin:auto;">
      <h3 class="text-center mb-3">Create Account</h3>

      <form method="POST">
        <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button name="register" class="btn btn-primary w-100">Register</button>
      </form>

      <p class="text-center mt-3">Already have an account? <a href="signin.php">Login</a></p>
    </div>
  </div>
</body>
</html>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registered successfully!'); window.location='signin.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>