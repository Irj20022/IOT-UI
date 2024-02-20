<?php
// Define the correct admin credentials
$correct_username = 'admin';
$correct_password = 'admin';

// Initialize the error message variable
$error_message = '';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the submitted username and password
    $submitted_username = $_POST['username'];
    $submitted_password = $_POST['password'];

    // Check if the submitted credentials match the correct ones
    if ($submitted_username === $correct_username && $submitted_password === $correct_password) {
        // Success: Redirect to dashboard.php
        header('Location: dashboard.php');
        exit;
    } else {
        // Invalid credentials: Set an error message
        $error_message = 'Invalid username or password. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="Style/Signin.css">
</head>
<body>
    <header class="div">
        <div class="div-2">
            <div class="div-3">
                <h2 class="div-4">Sign IN</h2>
                <?php if (!empty($error_message)): ?>
                    <div class="error"><?php echo htmlspecialchars($error_message); ?></div>
                <?php endif; ?>
                <form method="post" action="Signin.php">
                    <div class="div-5">User name:</div>
                    <input class="div-6" type="text" name="username" aria-label="Enter Username here" required>
                    <div class="div-7">Password:</div>
                    <input class="div-8" type="password" name="password" aria-label="Enter Password here" required>
                    <div class="div-9">
                        <button class="div-10" type="submit">Sign in</button>
                        <button class="div-11" type="reset">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>
</html>
