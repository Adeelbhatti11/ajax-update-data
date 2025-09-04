<?php
$conn = mysqli_connect("localhost","root", "","ajax") or die("Connection failed");

$sql = "SELECT * FROM users ";
$result = mysqli_query($conn, $sql) or die("Query Failed.");

$output = "";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $output .= "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td style = 'width: 100px;'> <input type='button' class='edit-btn' style='margin: 5px 0px; color: green;  border: 1px solid green' data-id='{$row['id']}'  value='Edit'> <input type='button' class='del-btn' style='color: red;  border: 1px solid red' data-id='{$row['id']}' data-name='{$row['name']}' value='Delete'></td>
                    </tr>";
    }
    echo $output;
} else {
    echo "<tr><td colspan='3'>No users found</td></tr>";
}

mysqli_close($conn);
?>
