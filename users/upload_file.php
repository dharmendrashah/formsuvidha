<style>
#upload_file tr td input {
    margin-left: 20%;
}

#mobile_form ul center div li p {
    font-size: 20px;
}

#mobile_form ul center div {
    border: 1px solid black;
    border-radius: 6px;
    margin-left: 5%;
    margin-right: 5%;
}

#mobile_form ul center div:hover {
    box-shadow: 5px 5px;
}
#mobile_form ul center div li {margin-bottom:30px;+}
</style>
<div class="container center hide-on-med-and-down">
    <h5 class="indigo-text">Upload needed files</h5>
    <div class="section"></div>
    <form action="index.php?get=incfle/upload_Ok&&username=<?php echo $_GET['username'] ?>" method="post" enctype="multipart/form-data">
        <center>
            <table class="center" id="upload_file">
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>10th Mark Sheet *</td>
                    <td><input  type="file" name="10m" required /></td>
                </tr>
                <tr>
                    <td>12th Mark Sheet</td>
                    <td><input type="file" name="12m" /></td>
                </tr>
                <tr>
                    <td>UG last year marksheet</td>
                    <td><input type="file" name="ugl" /></td>
                </tr>
                <tr>
                    <td>PG last year marksheet</td>
                    <td><input type="file" name="pgl" /></td>
                </tr>
                <tr>
                    <td>Cast Certificate</td>
                    <td><input type="file" name="cacer" /></td>
                </tr>
                <tr>
                    <td>Income Certificate</td>
                    <td><input type="file" name="incer" /></td>
                </tr>
                <tr>
                    <td>PWD certificate</td>
                    <td><input type="file" name="pwdcer" /></td>
                </tr>
                <tr>
                    <td>Domicile certificate</td>
                    <td><input type="file" name="domcer" /></td>
                </tr>
                <tr>
                    <td>Photo *</td>
                    <td><input type="file" name="photo" required /></td>
                </tr>
                <tr>
                    <td>Signature *</td>
                    <td><input type="file" name="sig" required /></td>
                </tr>
                <tr>
                    <td>Left Thumb Print</td>
                    <td><input type="file" name="left_thumb"/></td>
                </tr>
                <tr>
                    <td>Rigt Thumb Print</td>
                    <td><input type="file" name="right_thumb"/></td>
                </tr>
                <tr>
                    <td>Other File</td>
                    <td><input type="file" name="oth_file"/></td>
                </tr>
            </table>
            <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Upload all
                    files</button>
            </div>
        </center>
    </form>

</div>
<!-- mobile uploadfile -->
<div class="container-fluid hide-on-large-only">
    <h5 class="indigo-text center">Upload needed files</h5>
    <div class="section"></div>
    <form action="index.php?get=incfle/upload_Ok&&username=<?php echo $_GET['username'] ?>" method="post" enctype="multipart/form-data" id="mobile_form">
        <ul>
            <center>
                <div class="row">
                    <li>
                        <p>10th mark sheet *</p>
                    </li>
                    <li><input type="file" name="10m" required /></li>
                </div>
                <div class="row">
                    <li>
                        <p>12th Mark Sheet</p>
                    </li>
                    <li><input type="file" name="12m" /></li>
                </div>
                <div class="row">
                    <li>
                        <p>UG last year marksheet</p>
                    </li>
                    <li><input type="file" name="ugl" /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Cast Certificate</p>
                    </li>
                    <li><input type="file" name="cacer" /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Income Certificate</p>
                    </li>
                    <li><input type="file" name="incer" /></li>
                </div>
                <div class="row">
                    <li>
                        <p>PWD certificate</p>
                    </li>
                    <li><input type="file" name="pwdcer" /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Domicile certificate</p>
                    </li>
                    <li><input type="file" name="domcer" /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Photo *</p>
                    </li>
                    <li><input type="file" name="photo" required /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Signature *</p>
                    </li>
                    <li><input type="file" name="sig" required /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Left Thumb Print</p>
                    </li>
                    <li><input type="file" name="left_thumb" required /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Right Thumb Print</p>
                    </li>
                    <li><input type="file" name="right_thumb" required /></li>
                </div>
                <div class="row">
                    <li>
                        <p>Other file</p>
                    </li>
                    <li><input type="file" name="oth_file" required /></li>
                </div>
                <div class='row'>
                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Upload all
                        files</button>
                </div>
            </center>
        </ul>
    </form>
</div>
<?php include "application/footer.php" ?>