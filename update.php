<?php
$id = $_POST['Id'];
$name = $_POST['Name'];
$email = $_POST['Email'];
$conn = mysqli_connect("localhost", "root", "", "ajax") or die("Connection failed");

$sql = "UPDATE users SET name = '{$name}', email = '{$email}' WHERE id = {$id}";
if(mysqli_query($conn, $sql)) {
    echo 1;
}else{
    echo 0;
}
mysqli_close($conn);