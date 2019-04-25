  <div class="section"></div>
    <div class="container">
    <ul>
<?php 
if(isset($_GET['search'])){
if(!isset($_GET['page'])){
    $pu = 0;
}else{
       //     $page = $_GET['page'];
        $pu = ($_GET['page']*20)-20;
}

$q = $conn->real_escape_string($_GET['search']);
$sql2 = $conn->query("SELECT * FROM meta_link WHERE form_describe LIKE '%$q%' OR header LIKE '%$q%' OR meta_tags LIKE '%$q%'");
$sql = $conn->query("SELECT * FROM meta_link WHERE form_describe LIKE '%$q%' OR header LIKE '%$q%' OR meta_tags LIKE '%$q%' LIMIT $pu,25");
if($sql->num_rows>0){
    $looping = 0;
   // echo $sql->num_rows;
   echo "<b class='green-text'><u>Total Rsults $sql2->num_rows</u></b>";
   if(!isset($_GET['page'])){
 echo "&nbsp;&nbsp;&nbsp;&nbsp;This is Page: 1 <br/></br/>";
}else{
       //     $page = $_GET['page'];
        $zx = $_GET['page'];
 echo "&nbsp;&nbsp;&nbsp;&nbsp;This is Page: $zx";
}
    while($data = $sql->fetch_array()){
       
       ?>
            <li>
                <a href="//<?php echo $_SERVER['HTTP_HOST']?>/form.php?form=<?php echo $data['form_id']; ?>">
                    <text class="green-text"><b><?php echo $data['header']; ?></b></text>
                    <br />
                    <text class="blue-text"><?php echo 'https://'.$_SERVER['HTTP_HOST']?>/form.php?form=<?php echo $data['form_id']; ?></text>
                    <br />
                    <text class="black-text" style="word-wrap: break-word;">
                        <?php echo $data['form_describe']; ?>
                    </text>
                    <br/>
                    <text class="brown-text small">Last Update: <?php echo $data['update_time']; ?></text>
                </a>
            </li>
            <br/>

       <?php

    }
}else{
    $abc = $_GET['search'];
        echo "<b class='red-text'>There Is 0 (null) data in our DataBase for '$abc' !! Sorry.</b>";
}
}else{
    echo "sorry yo are fake!";
}


//the pagination part
                 // echo '<br/>'.$sql->num_rows;
                 $sql1 = $conn->query("SELECT * FROM meta_link WHERE form_describe LIKE '%$q%' OR header LIKE '%$q%' OR meta_tags LIKE '%$q%'");
                 if($sql1->num_rows>25){
                 $r = $sql1->num_rows;
                 $p = $r/25;
                 $pa = ceil($p);
                // echo $pa; // ans will be 2, 3, 4, 5
                for($b=1;$b<=$pa;$b++){
                    //echo $b;
                    ?>
                            <a class="pagination flow-text" href="//<?php echo $_SERVER['HTTP_HOST']?>/search.php?search=rrb&page=<?php echo $b; ?>"><?php echo $b; ?></a>
                    <?php
                } 
}
?>
<div class="section"></div>
</ul>
    </div>
<?php 
?>
<?php 
    include "grabuser/index.php";
include "sql_file/email.sql.php";
?>
