<?php
include "../sqlconnect.php";
$sql = "SELECT username, first_name, last_name FROM user_login WHERE email = 'parineti@fdfds.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Name: ". $row["first_name"]. " " . $row["last_name"]. "<br>";
        include "../../application/logged/header.php";
    }
} else {
    echo "0 results";
}
$conn->close();
?>