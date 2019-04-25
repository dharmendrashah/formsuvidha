<?php
$sql = "SELECT * FROM user_file WHERE username = '$username'";
$result = $conn->query($sql);
    // output data of each row
$file = $result->fetch_assoc();
