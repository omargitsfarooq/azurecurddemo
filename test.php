<?php

require "database/config.php";
// Create connection
$conn = new mysqli(host, username, password, db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>
<?php
require_once 'config.php';  // your database connection settings
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head><title>User List</title></head>
<body>
<h1>Users</h1>
<a href="create.php">Add New User</a>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
<?php while($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo htmlspecialchars($row['name']); ?></td>
    <td><?php echo htmlspecialchars($row['email']); ?></td>
    <td>
      <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
      <a href="delete.php?id=<?php echo $row['id']; ?>"
         onclick="return confirm('Are you sure?');">Delete</a>
    </td>
  </tr>
<?php } ?>
</table>
</body>
</html>
