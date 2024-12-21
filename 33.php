<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crud33_db';


$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['add_student'])) {
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $fee = $_POST['fee'];
    $rollno = $_POST['rollno'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $status = $_POST['status'];

    $sql = "INSERT INTO students (name, course_id, fee, rollno, phone, address, dob, status)
            VALUES ('$name', '$course_id', '$fee', '$rollno', '$phone', '$address', '$dob', '$status')";
    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM students WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


$sql = "SELECT students.*, courses.title AS course_name FROM students
        LEFT JOIN courses ON students.course_id = courses.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD for Students</title>
</head>
<body>
    <h1>Student Management</h1>

    <!-- Form to Add Student -->
    <h2>Add New Student</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Student Name" required><br>
        <input type="number" name="course_id" placeholder="Course ID" required><br>
        <input type="number" step="0.01" name="fee" placeholder="Fee" required><br>
        <input type="text" name="rollno" placeholder="Roll Number" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <input type="text" name="address" placeholder="Address" required><br>
        <input type="date" name="dob" placeholder="Date of Birth" required><br>
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br>
        <button type="submit" name="add_student">Add Student</button>
    </form>

    <h2>Student List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Fee</th>
            <th>Roll No</th>
            <th>Phone</th>
            <th>Address</th>
            <th>DOB</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['course_name']}</td>
                    <td>{$row['fee']}</td>
                    <td>{$row['rollno']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['dob']}</td>
                    <td>{$row['status']}</td>
                    <td>
                        <a href='?delete_id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php

$conn->close();
?>
