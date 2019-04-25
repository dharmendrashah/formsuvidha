<?php 
$formid = $_GET['formid'];
?>

<div class="container">
    <div class="row">
        <table>
            <tr>
            <th>Form Id</th>
            <th>Form name</th>
            <th>Form Description</th>
            </tr>
                  <?php
//sesssion_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$data_sql = "SELECT * FROM admin_pgd WHERE form_id = '$formid'";
$data_result = $conn->query($data_sql);
    // output data of each row
$data_detail = $data_result->fetch_assoc();
       ?>
       
            <tr>
            <td><?php echo $data_detail['form_id'];?></td>
            <td><?php echo $data_detail['post_name'];?></td>
            <td><?php echo $data_detail['short_describe'];?></td>
            </tr>
    <?php
 
$conn->close();
?>
            <tr>
            <td></td>
            <td></td>
            <td class=""><a href="admin.php?admin=admin/form/delete/sql"><button class="btn red">Are You sure to delete it</button></a></td>
            </tr>
        </table>
    </div>
</div>