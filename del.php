<?php
$id = $_POST['idd'];
$conn = mysqli_connect("localhost", "root", "", "ajax") or die("Connection failed");

$sql = "DELETE FROM users WHERE id = {$id}";
//$result = mysqli_query($conn, $sql) or die("Query Failed.");
if(mysqli_query($conn, $sql)){
    echo 1;

}else{
    echo 0;
}
mysqli_close($conn);
?>