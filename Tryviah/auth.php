<?php
require 'db_connect.php';

// Handle Registration
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $pass]);
        // Auto login after reg
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['user_name'] = $name;
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        $error = "Email already exists.";
    }
}

// Handle Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['full_name'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | THRYVIA</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main class="auth-page">
        <div class="auth-container">
            <?php if(isset($error)) echo "<p style='color:red;text-align:center;'>$error</p>"; ?>
            
            <div class="auth-box" id="loginForm">
                <span class="badge">Welcome Back</span>
                <h2>Login</h2>
                <form>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="••••••••" required>
                        <a href="#" class="forgot-link">Forgot Password?</a>
                    </div>
                    <button type="submit" name="login" class="btn-shop">Login</button>
                </form>
                <p class="switch-text">Don't have an account? <a href="javascript:void(0)" onclick="toggleAuth()">Sign Up</a></p>
            </div>

            <div class="auth-box" id="registerForm" style="display: none;">
                <span class="badge">Join the Community</span>
                <h2>Create Account</h2>
                <form method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Create a password" required>
                    </div>
                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="terms">
                        <label for="terms" class="check-label">I agree to the <a href="#">Terms & Conditions</a></label>
                    </div>
                    <button type="submit" name="register" class="btn-shop">Register Now</button>
                </form>
                <p class="switch-text">Already have an account? <a href="javascript:void(0)" onclick="toggleAuth()">Login here</a></p>
            </div>

        </div>
    </main>

    <script>
        function toggleAuth() {
            const login = document.getElementById('loginForm');
            const register = document.getElementById('registerForm');
            
            if (login.style.display === "none") {
                login.style.display = "block";
                register.style.display = "none";
            } else {
                login.style.display = "none";
                register.style.display = "block";
            }
        }
    </script>
</body>
</html>
