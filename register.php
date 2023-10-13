<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $grade = $_POST["grade"];
    $section = $_POST["section"];
    $role = $_POST["role"];

    $stmt = $pdo->prepare("INSERT INTO users (name, grade, section, role) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $grade, $section, $role]);
    echo "User registered!";
}
?>

<form method="post">
    Name: <input type="text" name="name" required>
    Grade: <input type="number" name="grade" required>
    Section: <input type="text" name="section" required>
    Role: <input type="text" name="role" required>
    <input type="submit" value="Register">
</form>
