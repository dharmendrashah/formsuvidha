    <?php
    if(isset($_GET['user'])){
        ?>
    <?php include "application/logged/header.4.php" ?>
    <style>
    #srch{margin-top:10%;}
    </style>
    <?php include "application/search.php" ?>
<?php// include "metaview.php"; ?>
       <!-- container suggestion -->
    <div class="section"></div>
    <div class="container">
   <!-- <p class="red-text"><b>This Forms are new and popular too !!</b></p> -->
        <ul>
        <?php
        /*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        ?>
 
            <li>
                <a href="http://[::1]/form/form.php?form=<?php echo $row['form_id']; ?>">
                    <text class="green-text"><b><?php echo $row['header']; ?></b></text>
                    <br />
                    <text class="blue-text">https://[::1]/form/form.php?<?php echo $row['form_link']; ?></text>
                    <br />
                    <text class="black-text" style="word-wrap: break-word;">
                        <?php echo $row['form_describe']; ?>
                    </text>
                    <br/>
                    <text class="brown-text small">Last Update: <?php echo $row['update_time']; ?></text>
                </a>
            </li>
            <br/>
            <?php
                 //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
 */
?>
        </ul>
    </div>
    <?php include "application/footer.php"; ?>

        <?php
    }else{
        echo "Go fuck yourself buddy dont try to messwith me try refresh this <a href='/index.php'>Refresh this</a>";
    }
    ?>