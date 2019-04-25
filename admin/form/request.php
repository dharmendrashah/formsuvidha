<div class="section"></div>
<div class="container">
<div class="section"></div>
    <table>
    <tr>
    <th>Uk_Id (id)</th>
    <th>Time</th>
    <th>Address</th>
    <th>OS</th> 
    <th>Browser</th>
    <th>Query</th>
    <th>IP</th>
    </tr>
    <?php
    include "sql_file/sqlconnect.php";

        $page = $_GET['page'];
        $pu = ($_GET['page']*20)-20;

    $sql = "SELECT * FROM user_track LIMIT $pu,20";
    $track = $conn->query($sql);
    if($track->num_rows>0){
        //echo 'Total Results: '.$track->num_rows;
            
        while($rows = $track->fetch_array()){
      // $looping++;
            ?>
                <tr>
                    <td><?php echo $rows['uk_id']; ?></td>
                    <td><?php echo $rows['time']; ?></td>
                    <td><?php echo $rows['address']; ?></td>
                    <td><?php echo $rows['os']; ?></td>
                    <td><?php echo $rows['browser']; ?></td>
                    <td><?php echo $rows['query']; ?></td>
                    <td><?php echo $rows['ip']; ?></td>
                </tr>
            <?php
        }
    }
?>
    </table>
    <div class="row">
    <style>
        #style{max-width: 10px;}
    </style>
    <form class="" action="" method="post" enctype="multipart/form-data">
    <div class="section"></div>
    Page :<?php echo '  '.$_GET['page']; ?>
                    <div class="row">
                    
    <?php
    $sql1 = "SELECT * FROM user_track";
    $track1 = $conn->query($sql1);
    $cou = $track1->num_rows;
  //  echo $cou;
  $a = $cou/20;
  $a = ceil($a);
        for($b=1;$b<=$a;$b++){
            ?>
            <a href="admin.php?admin=admin/new/request&&page=<?php echo $b; ?>" style="text-decoration:none;"><?php echo $b; ?></a>
            <?php
        }
?>      
        </div>

    </form>
</div>
</div>
<div class="section"></div>

