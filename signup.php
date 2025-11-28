<?php include 'connect.php'; ?>
<?php
// ------------------ Simple Demo Registration Handler ------------------
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name      = trim($_POST["name"] ?? "");
    $email     = trim($_POST["email"] ?? "");
    $password  = trim($_POST["password"] ?? "");
    $confirm   = trim($_POST["confirm"] ?? "");

    if ($password !== $confirm) {
        $message = "Passwords do not match!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email address!";
    } else {
        $message = "Account created successfully! (demo)";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Qassim Cloud - Register</title>
</head>
<body>

<h1>Create Account</h1>

<form id="registerForm" method="post" action="">
    
    <label>Name</label><br>
    <input type="text" name="name" id="name" placeholder="Your full name" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" id="email" placeholder="Email address" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" id="password" placeholder="Password" required><br><br>

    <label>Confirm Password</label><br>
    <input type="password" name="confirm" id="confirm" placeholder="Confirm password" required><br><br>

    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="login.php">Login</a></p>

<?php if (!empty($message)): ?>
    <div>
        <?php echo htmlspecialchars($message); ?>
    </div>
<?php endif; ?>

<script>
    // JavaScript validation
    document.getElementById("registerForm").addEventListener("submit", function (e) {
        const pass = document.getElementById("password").value.trim();
        const conf = document.getElementById("confirm").value.trim();

        if (pass !== conf) {
            alert("Passwords do not match!");
            e.preventDefault();
        }
    });
</script>

</body>
</html>