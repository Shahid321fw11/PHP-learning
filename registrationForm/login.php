<?php
require 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // CAPTCHA validation
    if (empty($_POST['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0) {
        echo "Invalid CAPTCHA!";
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    }
}
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="text-center mt-5">Login</h2>
        <form method="POST" action="index.php?page=login">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <!-- CAPTCHA Section -->
            <div class="mb-3">
                <img src="captcha.php?rand=<?php echo rand(); ?>" id="captchaimg"><br>
                <input id="captcha_code" name="captcha_code" type="text" class="form-control mt-2" placeholder="Enter CAPTCHA" required>
                <small class="form-text text-muted">Can't read the image? Click <a href="javascript: refreshCaptcha();">here</a> to refresh.</small>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <p>Don't have an account? <a href="index.php?page=signup" class="btn btn-success w-100">Sign Up</a></p>
        </div>
    </div>
</div>

<script type="text/javascript">
function refreshCaptcha() {
    document.getElementById('captchaimg').src = 'captcha.php?rand=' + Math.random();
}
</script>
