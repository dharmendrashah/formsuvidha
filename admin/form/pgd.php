<?php include "application/logged/header.3.php";?>

<div class="container">
    <div class="section"></div>
<form action="admin.php?admin=admin/form/add/general/details" method="post" enctype="multipart/form-data">
    <ul>
        <li><input type="text" class="input-field" id="" name="post_name" placeholder="Post Name"/></li>
        <li><input type="text" class="input-field datepicker" id="" name="start_date" placeholder="Starting dateadmin"/></li>
        <li><input type="text" class="input-field" id="" name="describe" placeholder="Short Description"/></li>
        <li><input type="submit" class="btn" value="Submit General Details" name="submit"/></li>
    </ul>
    </form>
    <div class="section"></div>
</div>

<?php include "application/footer.php" ?>