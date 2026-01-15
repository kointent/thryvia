<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | THRYVIA</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

    <main class="auth-page">
        <div class="auth-container">
            
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
                        <input type="password" placeholder="••••••••" required>
                        <a href="#" class="forgot-link">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn-shop">Login to Account</button>
                </form>
                <p class="switch-text">Don't have an account? <a href="javascript:void(0)" onclick="toggleAuth()">Sign Up</a></p>
            </div>

            <div class="auth-box" id="registerForm" style="display: none;">
                <span class="badge">Join the Community</span>
                <h2>Create Account</h2>
                <form>
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Create a password" required>
                    </div>
                    <div class="form-group checkbox-group">
                        <input type="checkbox" id="terms">
                        <label for="terms" class="check-label">I agree to the <a href="#">Terms & Conditions</a></label>
                    </div>
                    <button type="submit" class="btn-shop">Register Now</button>
                </form>
                <p class="switch-text">Already have an account? <a href="javascript:void(0)" onclick="toggleAuth()">Login here</a></p>
            </div>

        </div>
    </main>
<script src="admin-script.js"></script>
   
</body>
</html>
