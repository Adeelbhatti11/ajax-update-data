<?php
$id = $_POST['idd'];
$conn = mysqli_connect("localhost", "root", "", "ajax") or die("Connection failed");

$sql = "SELECT * FROM users WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("Query Failed.");

$output = "";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $output .= " <h1>Update Data...</h1>
                    <h3>Name: <input type='text'  id='edit-id' value='{$row['id']}' hidden>
                    <input type='text'  id='edit-name' value='{$row['name']}'></h3>
                
                    <h3>Email: <input type='text' id='edit-email' value='{$row['email']}'></h3>
                
                    <input type='submit' id='edit-submit' value='save'>
                    <input type='button' class='close-btn' value='X'>
        ";
    }
    echo $output;
} else {
    echo "<tr><td colspan='3'>No users found</td></tr>";
}

mysqli_close($conn);
?>