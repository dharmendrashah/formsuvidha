<div class="container">
<p class="center"><a href="admin.php?admin=admin/form/add" class="btn">Add new Form</a></p>
    <table>
        <tr>
            <th>Form Id</th>
            <th>Status</th>
            <th>Last Link</th>
            <th>Modify</th>
            <th>View</th>
            <th>Delete</th>
        </tr>
        
        <?php
//sesssion_start();
$editlink = 'admin.php?admin=admin/form/select/update&&formid=';
$viewlink = 'admin.php?admin=admin/form/view&&formid=';
$deletelink = 'admin.php?admin=admin/form/delete&&formid=';

$sql = "SELECT * FROM `form_status`";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "data: " . $row["uid"]. " - charging price: " . $row["fname"]. " " . $row["lname"]. "<br>";
        echo '<tr>';
        echo '<td>';
        echo $row['form_id'];
        echo '</td>';
        echo '<td>';
        echo $row['status'];
        echo '</td>';
        echo '<td>';
        echo "<a href='";
        echo $row['last_link']."'>";
        echo 'Last Link';
        echo '</a>';
        echo '</td>';
        echo '<td>';
        echo "<a href='";
        echo $editlink.$row['form_id']."'>";
        echo 'Modify it';
        echo '</a>';
        echo '</td>';   
        echo '<td>';
        echo "<a href='";
        echo $viewlink.$row['form_id']."'>";
        echo 'view';
        echo '</a>';
        echo '</td>';       
        echo '<td>';
        echo "<a href='";
        echo $deletelink.$row['form_id']."'>";
        echo 'delete';
        echo '</a>';
        echo '</td>';
        echo '</tr>';
       
    }
} else {
    echo "0 results";
}
$conn->close();
?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>