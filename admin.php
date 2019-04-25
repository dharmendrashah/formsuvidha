<?php
session_start();
if(isset($_GET['formid'])){
    $_SESSION['formid'] = $_GET['formid'];
}
switch($_GET['admin']){
//login
case "admin/login/":
include "admin/login.php";
break;
//cheching
case "admin/login/check":
include "admin/sql/login.php";
break;
//signup
case "admin/add":
include "admin/add_admin.php";
break;

//successpage
case "admin/add/success":
include "admin/msg/useradded.php";
break;
//admin-data
case "admin/add-user":
include "admin/sql/adduser.php";
break;

// add task
case "admin/task/add":
include "admin/task.php";
break;

//add task sql
case "admin/add/task":
include "admin/pages_include/for_admin/task.php";
break;

//after login
case "admin/home":
include "admin/home.php";
break;

// form details
case "admin/form/add":
include "admin/form/add.php";
break;

// adding general details
case "admin/form/add/general/details":
include "admin/form/pgd_sql.php";
break;

// adding important dates
case "admin/form/add/important/dates":
include "admin/form/important_dates.php";
break;

// adding dates  sql
case "admin/form/add/important/dates/":
include "admin/form/dates.sql.php";
break;

//adding price list
case "admin/form/add/price/list";
include "admin/form/price.php";
break;

//adding price sql
case "admin/formadd/price/ok":
include "admin/form/price.sql.php";
break;

//eligibility
case "admin/formadd/eligibility/":
include "admin/form/eligibility.php";
break;

//eligibility sql
case "admin/form/eligibility/sql":
include "admin/form/eligibility.sql.php";
break;

//important links
case "admin/form/links":
include "admin/form/form.links.php";
break;

//important links sql
case "admin/form/links/sql":
include "admin/form/form.links.sql.php";
break;

//see the list of all forms
case "admin/form/show/all":
include "admin/form.list.php";
break;

//update form status 1
case "admin/form/status/1":
include "admin/form/status/status.update.1.php";
break;
//update form status 2
case "admin/form/status/2":
include "admin/form/status/status.update.2.php";
break;
//update form status 3
case "admin/form/status/3":
include "admin/form/status/status.update.3.php";
break;
//update form status 4
case "admin/form/status/4":
include "admin/form/status/status.update.4.php";
break;

//update form status 5
case "admin/form/status/5":
include "admin/form/status/status.update.5.php";
break;

//geting the status
case "admin/form/status":
include "admin/form/status/status.php";
break;

//view the form
case "admin/form/view":
include "admin/form/form.view.php";
break;
//view form sql
case "admin/form/view/sql":
include "admin/form/form.view.sql.php";
break;
//delete the form
case "admin/form/delete":
include "admin/form/form.delete.php";
break;
//delete the form sql
case "admin/form/delete/sql":
include "admin/form/form.delete.sql.php";
break;

//select what do you want to update
case "admin/form/select/update":
include "admin/form/select.link.php";
break;

//update the database pdg
case "admin/form/update/pgd":
include "admin/form/update/update.pgd.php";
break;

//update the database pdg sql
case "admin/form/update/pgd/sql":
include "admin/form/update/update.pgd.sql.php";
break;                                            

//update the database important dates
case "admin/form/update/dates":
include "admin/form/update/update.dates.php";
break;

//update the database important dates sql
case "admin/form/update/dates/sql":
include "admin/form/update/update.dates.sql.php";
break;

//update the database application fee
case "admin/form/update/fee":
include "admin/form/update/update.fee.php";
break;

//update the database application fee sql
case "admin/form/update/fee/sql":
include "admin/form/update/update.fee.sql.php";
break;

//update the database eligibility
case "admin/form/update/eligibility":
include "admin/form/update/update.eligibility.php";
break;

//update the database eligibility sql
case "admin/form/update/eligibility/sql":
include "admin/form/update/update.eligibility.sql.php";
break;

//update the database links
case "admin/form/update/links":
include "admin/form/update/update.links.php";
break;
//update the database links sql
case "admin/form/update/links/sql":
include "admin/form/update/update.links.sql.php";
break;

//phpinfo
case "admin/show/phpinfo":
phpinfo();
break;

//generate link
case "admin/meta/generate/":
include "admin/form/meta.php";
break;

//see new request
case "admin/new/request":
include "admin/form/request.view.php";
break;

//see adminer
case "admin/mysql/adminer":
include "admin/adminer.php";
break;

//phpmyadmin
case "admin/sql/phpmyadmin/":
header('Location:sql_amin/');
break;


//tags
case "admin/tags":
include "admin/form/tags.php";
break;

//default
default:
header('location:admin/err.php');
}
//include "assets/liabrary/Zebra_Pagination/public/css/zebra_pagination.css"
?>
