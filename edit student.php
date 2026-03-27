<?php
$conn = new mysqli("localhost", "root", "", "student_db");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $conn->query("UPDATE students SET name='$name', email='$email', age='$age', grade='$grade' WHERE id=$id");
    header("Location: view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Edit Student</h2>
<form method="post">
    <input type="text" name="name" value="<?= $row['name'] ?>" required>
    <input type="email" name="email" value="<?= $row['email'] ?>" required>
    <input type="number" name="age" value="<?= $row['age'] ?>" required>
    <input type="text" name="grade" value="<?= $row['grade'] ?>" required>
    <button type="submit" name="submit" class="edit-btn btn">Update Student</button>
</form>
</div>
</body>
</html>