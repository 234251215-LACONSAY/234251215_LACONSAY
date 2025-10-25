<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $favorite_color = htmlspecialchars($_POST['favorite_color']);

    echo "<h2>Introduce Yourself</h2>";
    echo "Hi, I’m $name, I am $age years old, and my favorite color is $favorite_color.<br><br>";
    echo '<a href="index.php">← Back to Menu</a>';
} else {
    // Show the form if no POST data yet
    ?>
    <h2>Introduce Yourself</h2>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" id="age" required><br><br>

        <label for="favorite_color">Favorite Color:</label><br>
        <input type="text" name="favorite_color" id="favorite_color" required><br><br>

        <input type="submit" value="Submit">
    </form>
    <br>
    <a href="index.php">← Back to Menu</a>
    <?php
}
?>
