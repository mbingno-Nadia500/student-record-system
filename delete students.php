<?php
$conn = new mysqli("localhost", "root", "", "student_db");
$id = $_GET['id'];
$conn->query("DELETE FROM students WHERE id=$id");
header("Location: view_students.php");
?>