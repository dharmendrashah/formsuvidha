<?php
session_start();

switch ($_GET['get']){
    case "addusr/":
    include "signup.php";
    break;
    case "addusr/getusr":
    include "sql_file/addusr.php";
    break;
    case "addusr/success_page":
    include "application/message/addusr.php";
    break;
    # user sign up form files ended
    case "addlog/":
    include "login.php";
    break;
    case "addlog/select_data":
    include "sql_file/addlog.php";
    break;
    case "incdata/keep_try":
    include "application/message/loginerr.php";
    break;
    # user sign in form files ended
    case "incdata/":
    include "sql_file/logged/incdata.php";
    include "ad.php";
    break;
    case "incdata/added":
    include "sql_file/logged/incdata.1.php";
    include "sql_file/incdata.php";
    break;
    case "incdata/addedok":
    include 'sql_file/addedok.php';
    break;
    #includin data page is now over here
    case "incfle/":
    include "sql_file/logged/incdata.1.php";
    include "uf.php";
    break;
    case "incfle/upload_Ok":
    include "sql_file/fle.php";
    break;
    #upload the files to sql
    case "alldata/":
    include "sql_file/from_user_detail.php";
    include "profile.php";
    break;
    #see the profile data
    case "update/":
    include "sql_file/logged/incdata.1.php";
    include "sql_file/from_user_detail.php";
    include "edit/user/profile.php";
    break;
  
    case "update/basic":
    include "sql_file/update_basic.php";
    break;
    case "update/personnel":
    include "sql_file/update_personnel.php";
    break;
    case "update/files":
    include "sql_file/update_file.php";
    break;
    case "update/file_data":
    include "sql_file/update_file_data.php";
    break;

    //applied_form_status
    case "form_status/detail":
    include "applied_form/form_status.php";
    break;
    //form status hots
    case "form_status/hots":
    include "form_data/hots.php";
    break;
    //new form data
    case "form_status/new_apply":
    include "form_data/new_form.php";
    break;
    
    case "formdetails/":
    include "details.php";
    break;
    
        //allinone page
    case "delete/":
    include "sql_file/delete.php";
    break;
        // delete the files
    case "delete/select":
    include "sql_file/delete_file/select_data.php";
    break;
    //userprimary
    case "delete/select/user":
    include "sql_file/delete_file/user.php";
    break;
    //usersecondery
    case "delete/select/detail":
    include "sql_file/delete_file/detail.php";
    break;
    //userteritory
    case "delete/select/files":
    include "sql_file/delete_file/files.php";
    break;

    case "ok/":
    include "confirm.php";
    break;
    case "find":
    include "search.php";
    break;
    case "print_page":
    include "print.php";
    break;

    #status
    case "status/":
    include "sql_file/status.php";
    break;
    //email subscribe
    case "email/subscribe":
    include "sql_file/email.sql.php";
    break;
    default:
    header('Location:default.php?user=all');
}
?>