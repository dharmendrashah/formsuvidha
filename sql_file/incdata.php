<?php
$qualification = $_POST['qualification'];
$community = $_POST['community'];
$gender = $_POST['gender'];
$nation = $_POST['nation'];
$relegion = $_POST['relegion']; 
$username = $_GET['username'];
$pwd = $_POST['pwd'];
$exservice = $_POST['ex_service'];
$jk = $_POST['jk'];
$aadhar = $_POST['aadhar'];
$mark = $_POST['mark'];
/*
#pwd menu section
if ($pwd==1){
    echo "you are a physically weaker person <br>";
}
#ex service man section
if($exservice==1){
echo "you are an ex serviceman<br>";
}
#eligible of j&k
if($jk==1){
    echo "you are a domicile of j&k in 1980-81<br>";
}
#is you have any aadhar 

if ($aadhar==1){
    echo "please give me your aadhar no. that you you have<br>";
}
# physical body mark


if($mark==1){
    echo "describe your identification mark<br>";
}
*/

?>
<?php
if($pwd==0 && $exservice==0 && $jk==0 && $aadhar==0 && $mark==0 ){
 header('Location:index.php?get=incdata/addedok&&username='.$_GET['username'].'&&qualification='.$qualification.'&&community='
 .$community.'&&gender='.$gender.'&&nation='.$nation.'&&relegion='.$relegion.'&&submit=ok');
} else{
?>
<?php include "sql_file/logged/incdata.1.php"; ?>
<?php include "application/logged/header.php"; ?>
<div class="container">
<form class="col s12" action="index.php?get=incdata/addedok&&username=<?php echo $_GET['username'] ?>
&&qualification=<?php echo $qualification ?>&&community=<?php echo $community ?>
&&gender=<?php echo $gender ?>&&nation=<?php echo $nation ?>&&relegion=<?php echo $relegion ?>"
 enctype="multipart/form-data" id="" method="POST">
<div class="section"></div>
<!--phusically weaker person -->
<?php
if ($pwd==1){
?>

<div class="input-field col s12">
    <select name="pwd_detail[]" multiple required>
      <option value="" disabled selected>Choose your type of physically weaker</option>
      <option value="Speak Problem">Speak Problem</option>
      <option value="Both ear hearing problem">Both ear hearing problem</option>
      <option value="Left ear hearing problem ">Left ear hearing problem </option>
      <option value="right ear hearing problem">right ear hearing problem</option>
      <option value="There is no hands">There is no hands</option>
      <option value="Paralised both hands">Paralised both hands</option>
      <option value="Only Left hand">Only Left hand</option>
      <option value="Paralised lrft hand">Paralised lrft hand</option>
      <option value="Less finger in left hand">Less finger in left hand</option>
      <option value="Only Right Hand">Only Right Hand</option>
      <option value="Paralised right hands">Paralised right hands</option>
      <option value="Less finger in right hand">Less finger in right hand</option>
      <option value="No legs">No legs</option>
      <option value="Paralised both legs">Paralised both legs</option>
      <option value="Only left leg">Only left leg</option>
      <option value="Paralised left hand">Paralised left hand</option>
      <option value="Less finger in left leg">Less finger in left leg</option>
      <option value="Only Right Leg">Only Right Leg</option>
      <option value="Paralised right hand">Paralised right hand</option>
      <option value="Less finger in right leg">Less finger in right leg</option>
      <option value="paralised full body">paralised full body</option>
      <option value="upper hip paralised">upper hip paralised</option>
      <option value="below hip paralised">below hip paralised</option>
    </select>
    <label>Select the category of your physically weaker section</label>
  </div>

<?php }
?>

<!-- ex sercviceman syllabus -->
<?php
if ($exservice==1){
?>
<div class="section"></div>
<p class="center">
Add the details of your serving in army.
</p>
<table>
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td>Date of joining</td>
<td><input type="text" class="datepicker" name="date_of_joining" required></td>
</tr>
<tr>
<td>Date of retirement</td>
<td><input type="text" class="datepicker" name="date_of_retirement" required></td>
</tr>
<tr>
<td>Are you in</td>
<td> <select name="service_field" require>
      <option value="" disabled selected>Service field</option>
      <option value="Army">Army</option>
      <option value="Navy">Navy</option>
      <option value="AirForce">AirForce</option>
    </select>
</td>
</tr>
</table>
<?php }
?>
<!-- j&k eligible -->
<?php
if ($jk==1){
?>
<div class="section"></div>

<div class="input-field col s12">
    <select name="j&kproof" required>
      <option value="" disabled selected>Do you have any certificate that proofs that you are domicile of j&k in 1980-81</option>
      <option value="No">No</option>
      <option value="Yes">Yes</option>
    </select>
    <label>Do you have any certificate that proofs that you are domicile of j&k in 1980-81</label>
  </div>
<?php }
?>
<!-- AAdhar card start -->


<?php
if ($aadhar==1){
?>

<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="aadhar" type="number" class="validate" maxlength="12" name="aadhar_no" required>
          <label for="aadhar">Aadhar No.</label>
        </div>
      </div>
    </div>
  </div>
   

<?php }
?>

<!-- body mark -->
<?php
if ($mark==1){
?>
<div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="mark" type="text" class="validate" name="identification_mark_detail" required>
          <label for="mark">Identification Mark</label>
        </div>
      </div>
    </div>
  </div>
<?php }
?>
<div class="section"></div>
<div class='row'>
<button type='submit' class='col s12 btn btn-large waves-effect blue' name="submit">Add data</button>
</div>
</form>
</div>

<?php include "application/footer.php"; ?>

<?php } ?>