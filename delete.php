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

    $result = mysqli_query($mysqli, $sql_query);
	header("Location: read.php");
}
?>
</body>
</HTML>