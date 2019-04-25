<?php include "application/header.php" ?>
<style>
</style>
<div class="container">
    <center>
        <h5 class="indigo-text">Please, Sign up</h5>
        <div class="section"></div>
        <div class="row">
            <form class="col s12" enctype="multipart/form-data" action="index.php?get=addusr/getusr" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" name="fname" type="text" class="validate" required>
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" name="lname" type="text" class="validate" required>
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="phone" name="phone" type="number" class="validate" required>
                        <label for="phone">Phone No.</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="pwd" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class='row'>
                    <button type='submit' name='btn_login'
                        class='col s12 btn btn-large waves-effect indigo'>sign-up</button>
                </div>
                                   
              
            </form>
        </div>
</div>
</center>
<script>

</script>
<?php include "application/footer.php" ?>