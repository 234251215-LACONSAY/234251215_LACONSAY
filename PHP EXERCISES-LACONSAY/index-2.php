<?php
// Start session to manage login state
session_start();

// Hardcoded username and password for demonstration
$valid_username = "student";
$valid_password = "12345";
$error = "";

// Check if user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $show_exercises = true;
} else {
    $show_exercises = false;

    // Process login form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['loggedin'] = true;
            $show_exercises = true; // show exercises after login
        } else {
            $error = "Invalid username or password!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LACONSAY-PHP Exercise</title>
</head>
<body>
    <h1>LACONSAY-PHP Exercise</h1>

    <?php if (!$show_exercises): ?>
        <!-- Login Form -->
        <?php if ($error) { echo "<p style='color:red;'>$error</p>"; } ?>
        <form method="POST" action="">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
    <?php else: ?>
        <!-- Exercise Links -->
        <p>Welcome! You are logged in.</p>
        <ul>
            <li><a href="introduction.php">Introduction</a></li>
            <li><a href="simplemath.php">Simple Math</a></li>
            <li><a href="rectangle.php">Area and Perimeter of a Rectangle</a></li>
            <li><a href="temperature.php">Temperature Converter</a></li>
            <li><a href="swapping.php">Swapping Variables</a></li>
            <li><a href="salary.php">Salary Calculator</a></li>
            <li><a href="bmi.php">BMI Calculator</a></li>
            <li><a href="string.php">String Manipulation</a></li>
            <li><a href="bank.php">Bank Account Simulation</a></li>
            <li><a href="grading.php">Simple Grading System</a></li>
            <li><a href="currency.php">Currency Converter</a></li>
            <li><a href="travel.php">Travel Cost Estimator</a></li>
        </ul>
        <form method="POST" action="logout.php">
            <input type="submit" value="Logout">
        </form>
    <?php endif; ?>
</body>
</html>
