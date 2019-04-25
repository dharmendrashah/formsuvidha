<style>
#images img {height: 150px;width: 200px;}#images p {width: 200px;}#butt li a button {width: 300px;margin-bottom: 20px;height: 55px;}#donethings {height: 400px;}#taskinpt {margin-top: 85%}#taskadd {}
</style>
<div class="container-fluid orange">
    <div class="section"></div>
    <div class="row">
        <div class="col s12"></div>
        <div class="col s4" id="images">
            <img src="<?php echo $admin['photo'];?>" class="responsive-img" id="" /><br>
            <img src="<?php echo $admin['signat'];?>" class="responsive-img" id="" /><br>
            <p class="white-text btn">Name: <?php echo $admin['first_name'].' '.$admin['lastname'];?></p>
        </div>
        <div class="col s4">
            <ul id="butt">
                <li><a href="admin.php?admin=admin/add"><button class="btn blue-grey" id="">Add Admin</button></a></li>
                <li><a href="index.php?get=addusr/"><button class="btn blue-grey" id="">Add User</button></a></li>
                <li><a href="admin.php?admin=admin/form/add"><button class="btn blue-grey" id="">Add Form
                            Detail</button></a></li>
                <li><a href=""><button class="btn blue-grey" id="">Add Edit User</button></a></li>
                <li><a href=""><button class="btn blue-grey" id="">Add Edit Admin</button></a></li>
                <li><a href="admin.php?admin=admin/form/show/all"><button class="btn blue-grey" id="">Show
                            Form</button></a></li>
            </ul>
        </div>
        <div class="col s4 center" id="donethings">
            <div class="section"></div>
            <a href="admin.php?admin=admin/task/add" class="">
                <button class="btn-large center" id="task">See My latest Task</button>
            </a><br><br />
            <a href="admin.php?admin=admin/show/phpinfo" class="">
                <button class="btn-large center" id="task">SeePhpInfo()</button>
            </a>
            <br><br />
            <a href="admin.php?admin=admin/new/request&&page=1" class="">
                <button class="btn-large center" id="task">See new Request</button>
            </a>
            <br><br />
            <a href="admin.php?admin=admin/sql/phpmyadmin/" class="">
                <button class="btn-large center" id="task">phpmyadmin();</button>
            </a>
        </div>
    </div>
    <div class="section"></div>
</div>