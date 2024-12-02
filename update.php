<HTML>
<head>
	<title>Read Data</title>
</head>
<body>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $nip = $_POST['nip'];
    $position = $_POST['position'];

    $sql_query = "UPDATE tbl_employee SET name_employee='$name', nip_employee='$nip', position_employee='$position' WHERE id_employee=$id";
    $result = mysqli_query($mysqli, $sql_query);
	header("Location: read.php");
    
}

$id = $_GET['id'];
$sql_query = "SELECT * FROM tbl_employee WHERE id_employee=$id";
$result = mysqli_query($mysqli, $sql_query);

while($user_data = mysqli_fetch_array($result)) {
	$id = $user_data['id_employee'];
	$nama = $user_data['name_employee'];
	$nip = $user_data['nip_employee'];
	$position = $user_data['position_employee'];
}
?>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    Nama: <input type="text" name="name" value="<?php echo $nama; ?>"><br>
    NIP: <input type="number" name="nip" value="<?php echo $nip; ?>"><br>
    Position: <input type="text" name="position" value="<?php echo $position; ?>"><br>
    <input type="submit" value="Update">
</form>
</body>
</HTML>