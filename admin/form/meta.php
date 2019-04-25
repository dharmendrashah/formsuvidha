<?php
if(isset($_SESSION['formid'])){
include "application/logged/header.3.php";
$ax = $_GET['formid']
?>
<div class="container">
    <div class="section"></div>
        <form action="admin.php?admin=admin/tags&&formid=<?php echo $ax; ?>" method="POST" enctype="multipart/form-data">
    <input class="custom-class" type="text" name="tags">
  <br/>
      <input class="btn center" type="submit" name="submit">

      </form>

</div>
<div class="section"></div>
<?php
include "application/footer.php";
}else{
    header('location:admin/err.php');
}

?>
