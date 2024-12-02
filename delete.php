<HTML>
<head>
<title>Delete data</title>
</head>
<body>
<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_query = "DELETE FROM tbl_employee WHERE id_employee=$id";

	mysqli_query($mysqli, $sql_query);
	
	if ($result) {
		header("Location: read.php");
	} else {
		echo "Failed to delete";
	}
}
?>
</body>
</HTML>