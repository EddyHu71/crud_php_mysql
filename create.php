<HTML>
<head>
	<title>Create Data</title>
</head>
<body>
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name_employee'];
    $nip = $_POST['nip_employee'];
    $position = $_POST['position_employee'];

    $sql = "INSERT INTO users (name_employee, nip_employee, position_employee) VALUES ('$name', '$email', '$age')";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<form method="post" action="">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Age: <input type="number" name="age"><br>
    <input type="submit" value="Submit">
</form>
</body>
</HTML>