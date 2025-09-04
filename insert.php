<?php
$Name = $_POST['name'];
$Email = $_POST['email'];

$conn = mysqli_connect("localhost", "root", "", "ajax") or die("Connection failed");

$sql = "INSERT INTO users(name, email) VALUES ('{$Name}', '{$Email}')";

if(mysqli_query($conn, $sql)){
    echo 1; // success
} else {
    echo 0; // failed
}

mysqli_close($conn);
?>
