<?php
$conn = new mysqli("localhost", "root", "", "student_db");
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>All Students</h2>
<a href="add_student.php" class="add-btn btn">Add New Student</a>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Grade</th>
    <th>Actions</th>
</tr>
<?php while($row = $result->fetch_assoc()){ ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['age'] ?></td>
    <td><?= $row['grade'] ?></td>
    <td>
        <a class="edit-btn btn" href="edit_student.php?id=<?= $row['id'] ?>">Edit</a>
        <a class="delete-btn btn" href="delete_student.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>