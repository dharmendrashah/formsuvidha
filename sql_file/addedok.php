<?php include "sql_file/sqlconnect.php"; ?>
<?php
if(isset($_GET['submit']))
{
                                        //the getting data via link
                                        $username = $_GET['username'];
                                        $qualification = $_GET['qualification'];
                                        $community = $_GET['community'];
                                        $gender = $_GET['gender'];
                                        $nation = $_GET['nation'];
                                        $relegion = $_GET['relegion'];
       //insert into database code
                                        //  $sql = "INSERT INTO 'user_detail' (username, qualification, community, pwd, gender, nationality, relegion,ex_serviceman, date_joining, date_of_retirement, service_field, jk_factor, body_mark, aadhar_no)VALUES ('$username','$qualification','$community', '$pwd_det','$gender', '$nation', '$relegion', 'NO', '$doj' , '$dor', '$service_field', '$jkproof',  '$imd', '$aadhar')";


    $sql = "INSERT INTO `user_detail` (`username`, `qualification`, `community`, `pwd`, `gender`, `nationality`, `religion`, `ex_serviceman`, `date_joining`, `date_of_retirement`, `service_field`, `jk_factor`, `body_mark`, `aadhar_no`) VALUES ('$username', '$qualification', '$community', 'NOT AVAILABLE', '$gender', '$nation', '$relegion', 'NOT AVAILABLE', 'NOT AVAILABLE', 'NOT AVAILABLE', 'NOT AVAILABLE', 'NOT AVAILABLE', 'NOT AVAILABLE', 'NOT AVAILABLE')";


if ($conn->query($sql) === TRUE) {
    header('Location:index.php?get=incfle/&&Data_added_successfull&&username='.$username);
}else{
    echo "Error: ". $sql . "<br>" . $conn->error;
}

    
}else{
if(isset($_POST["submit"])) 
	{ 
                                
                                    //the getting data via link
                                    $username = $_GET['username'];
                                    $qualification = $_GET['qualification'];
                                    $community = $_GET['community'];
                                    $gender = $_GET['gender'];
                                    $nation = $_GET['nation'];
                                    $relegion = $_GET['relegion'];


                                // Check if any option is selected 
                                if(isset($_POST["pwd_detail"])) 
                                { 
                                    // Retrieving each selected option 
                                foreach ($_POST['pwd_detail'] as $pwd) 
                            $pwd_d[] = "$pwd, ";
                                } 
                                
                            else{
                                echo "Select an option first !!<br>"; 
                            }

                            
                                if(isset($_POST['date_of_joining'])){
                                //   echo '<br>'.$_POST['date_of_joining'].'<br>';
                                    $doj = $_POST['date_of_joining'];
                                }else{
                                    echo "select the date of joining first !!<br>"; 
                                }




                                if(isset($_POST['date_of_retirement'])){
                                //   echo $_POST['date_of_retirement'].'<br>';
                                    $dor = $_POST['date_of_retirement'];
                                }else{
                                    echo "select the date of retirement first!!<br>"; 
                                }



                                if(isset($_POST['service_field'])){
                                //  echo $_POST['service_field'].'<br>';
                                    $service_field = $_POST['service_field'];
                                }else{
                                    echo "select the are that you have been served<br>"; 
                                }



                                if(isset($_POST['j&kproof'])){
                                //  echo $_POST['j&kproof'].'<br>';
                                    $jkproof = $_POST['j&kproof'];
                                }else{
                                    echo "select the jk proof yes or no"; 
                                }



                                if(isset($_POST['aadhar_no'])){
                                    //echo $_POST['aadhar_no'].'<br>';
                                    $aadhar = $_POST['aadhar_no'];
                                }else{
                                    echo "you don't have any aadhar card<br>"; 
                                }



                                if(isset($_POST['identification_mark_detail'])){
                                // echo $_POST['identification_mark_detail'].'<br>';
                                    $imd = $_POST['identification_mark_detail'];
                                }else{
                                    echo "you don't have any identification<br>"; 
                                }

                                            
                                        $pwd_det = $pwd_d[0].''.$pwd_d[1].''.$pwd_d[2].''.$pwd_d[3].''.$pwd_d[4].''.$pwd_d[5].''.$pwd_d[6].''.$pwd_d[7].''.$pwd_d[8].''.$pwd_d[9].''.$pwd_d[10].''.$pwd_d[11].''.$pwd_d[12].''.$pwd_d[13].''.$pwd_d[14].''.$pwd_d[15].''.$pwd_d[16].''.$pwd_d[17].''.$pwd_d[18].''.$pwd_d[19].''.$pwd_d[20].''.$pwd_d[21].''.$pwd_d[22].''.$pwd_d[23].''.$pwd_d[24];

                                            //insert into database code
                                        //  $sql = "INSERT INTO 'user_detail' (username, qualification, community, pwd, gender, nationality, relegion,ex_serviceman, date_joining, date_of_retirement, service_field, jk_factor, body_mark, aadhar_no)VALUES ('$username','$qualification','$community', '$pwd_det','$gender', '$nation', '$relegion', 'NO', '$doj' , '$dor', '$service_field', '$jkproof',  '$imd', '$aadhar')";

                                            $sql = "INSERT INTO `user_detail` (`username`, `qualification`, `community`, `pwd`, `gender`, `nationality`, `religion`, `ex_serviceman`, `date_joining`, `date_of_retirement`, `service_field`, `jk_factor`, `body_mark`, `aadhar_no`) VALUES ('$username', '$qualification', '$community', '$pwd_det', '$gender', '$nation', '$relegion', '', '$doj', '$dor', '$service_field', '$jkproof', '$imd', '$aadhar')";
                                            

                                        if ($conn->query($sql) === TRUE) {
                                            header('Location:index.php?get=incfle/&&Data_added_successfull&&username='.$username);
                                        }else{
                                            echo "Error: ". $sql . "<br>" . $conn->error;
                                        }
                                    }else{
                    echo "something happen wrong";
                    }
                    echo "your data is not update something wrong please try again later";
                }