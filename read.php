<HTML>
<head>
	<title>Read Data</title>
</head>
<body>
<?php
include 'config.php';

$sql_query = "SELECT * FROM tbl_employee";
$result = mysqli_query($mysqli, $sql_query);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>NIP</th>
<th>Position</th>
<th>Actions</th>
</tr>";

while($user_data = mysqli_fetch_array($result)) {   
        echo "<tr>
        <td>" . $user_data['id_employee'] . "</td>
        <td>" . $user_data['name_employee'] . "</td>
        <td>" . $user_data['nip_employee'] . "</td>
        <td>" . $user_data['position_employee'] . "</td>
        <td>
            <a href='update.php?id=" . $user_data['id_employee'] . "'>Edit</a> | 
            <a href='delete.php?id=" . $user_data['id_employee'] . "'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
?>
</body>
</HTML>