<HTML>
<head>
	<title>Read Data</title>
</head>
<body>
<?php
include 'config.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Actions</th>
</tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['age'] . "</td>
        <td>
            <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
            <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</HTML>