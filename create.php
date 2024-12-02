<HTML>
<head>
	<title>Create Data</title>
</head>
<body>
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nip = $_POST['nip'];
    $position = $_POST['position'];

    $sql_query = "INSERT INTO tbl_employee (name_employee, nip_employee, position_employee, status, date_join, date_created) VALUES ('$name', '$nip', '$position', 'Y', NOW(), NOW())";
    mysqli_query($mysqli, $sql_query);
	header("Location: read.php");
}

?>

<form method="POST" action="">
    Name: <input type="text" name="name"><br>
    NIP: <input type="text" name="nip"><br>
    Position: <input type="number" name="position"><br>
    <input type="submit" value="Submit">
</form>
</body>
</HTML>