<?php
$conn = new mysqli("localhost", "root", "", "student_db");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $conn->query("INSERT INTO students (name,email,age,grade) VALUES ('$name','$email','$age','$grade')");
    header("Location: view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Add New Student</h2>
<form method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="number" name="age" placeholder="Age" required>
    <input type="text" name="grade" placeholder="Grade" required>
    <button type="submit" name="submit" class="add-btn btn">Add Student</button>
</form>
</div>
</body>
</html>