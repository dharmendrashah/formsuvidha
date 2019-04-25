<style>
#select_data select{border: 1px solid black;border-radius:15px}
#select_data select:hover{box-shadow: 10px 10px grey;}
</style>
<div class="container">
    <div class="row">
        <div col="col s12">
            <center>
            <form id="select_data" enctype="multipart/form-data" action="index.php?get=incdata/added&&username=<?php echo $row['username'];?>" method="POST">
            <h5 class="indigo-text">Add your additional data</h5>
            <div class="section"></div>
            What is your qualification?
                <select class="browser-default validate" name="qualification" required >
                    <option value="" disabled selected>What is your qualification?</option>
                    <option value="10">10th Passed</option>
                    <option value="12">12th Passed</option>
                    <option value="UG">UG complete</option>
                    <option value="PG">PG complete</option>
                </select>
                <div class="section"></div>
                What is your Community?
                <select class="browser-default" name="community" required >
                    <option value="" disabled selected>What is your Community?</option>
                    <option value="OBC">OBC</option>
                    <option value="EWS">EWS</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                    <option value="UR">UR</option>
                </select>
                <div class="section"></div>
                What is your Gender?
                <select class="browser-default" name="gender" required>
                    <option value="" disabled selected>What is your Gender?</option>
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                    <option value="THIRD GENDER">THIRD GENDER</option>
                </select>
                <div class="section"></div>
                What is your Nationality?
                <select class="browser-default" name="nation" required>
                    <option value="" disabled selected>What is your Nationality?</option>
                    <option value="INDIA">INDIA</option>
                    <option value="NEPAL">NEPAL</option>
                    <option value="BHUTAN">BHUTAN</option>
                    <option value="OTHER">OTHER</option>
                </select>
                <div class="section"></div>
                What is your Religion?
                <select class="browser-default" name="relegion" required>
                    <option value="" disabled selected>What is your Religion?</option>
                    <option value="HINDU">HINDU</option>
                    <option value="MUSLIM">MUSLIM</option>
                    <option value="SIKH">SIKH</option>
                    <option value="CHRISTIAN">CHRISTIAN</option>
                    <option value="JAIN">JAIN</option>
                    <option value="BUDDH">BUDDH</option>
                    <option value="OTHER">OTHER</option>
                </select>
                <div class="section"></div>
                Are You a person with difficulty?
                <select class="browser-default" name="pwd" required>
                <option value="" disabled selected>Are You a person with difficulty?</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
                </select>
                <div class="section"></div>
                Are You an Ex-Service-man/woman
                <select class="browser-default" name="ex_service" required>
                <option value="" disabled selected>Are You a Ex-Service-man/woman</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
                </select>
                <div class="section"></div>
                Domicile of j&K in 1980-81.
                <select class="browser-default" name="jk" required>
                <option value="" disabled selected>Domicile of j&K in 1980-81.</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
                </select>
                <div class="section"></div>
                Do you have aadhar
                <select class="browser-default" name="aadhar" required>
                <option value="" disabled selected>Do you have aadhar</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
                </select>
                <div class="section"></div>
                Do you have any facial recognization mark
                <select class="browser-default" name="mark" required>
                <option value="" disabled selected>Do you have any facial recognization mark</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
                </select>
                <div class="section"></div>
                <div class='row'>
                    <button type='submit'
                        class='col s12 btn btn-large waves-effect blue' name="submit">Add data</button>
                </div>
            </form>
            </center>
        </div>
    </div>
</div>
<?php include "application/footer.php" ?>