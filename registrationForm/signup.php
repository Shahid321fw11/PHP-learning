<?php
require 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // CAPTCHA validation
    if (empty($_POST['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0) {
        echo "Invalid CAPTCHA!";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt->execute([$username, $email, $password])) {
            echo "Registration successful!";
        } else {
            echo "Error: Could not complete registration.";
        }
    }
}
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="text-center mt-5">Sign Up</h2>
        <form method="POST" action="index.php?page=signup">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
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

            <button type="submit" class="btn btn-success w-100">Sign Up</button>
        </form>

        <div class="text-center mt-3">
            <p>Already have an account? <a href="index.php?page=login" class="btn btn-primary w-100">Login</a></p>
        </div>
    </div>
</div>

<script type="text/javascript">
function refreshCaptcha() {
    document.getElementById('captchaimg').src = 'captcha.php?rand=' + Math.random();
}
</script>
