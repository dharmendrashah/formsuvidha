<style>
#pics_table tr td {
    margin: 30%;
}

#pics_table tr td img {
    max-height: 100px;
    max-width: 150px;
}
</style>
<div class="container">
    <ul class="collapsible">
        <li class="active">
            <div class="collapsible-header center light-blue"><span class="fa fa-sign-in"></span>&nbsp;&nbsp;Update Your
                Basic
                Details</div>
            <div class="collapsible-body">
                <!-- update basic details section -->
                <?php// echo $detail['username']; ?>
                <center>
                    <form action="index.php?get=update/basic&&username=<?php echo $detail['username']; ?>" method="post"
                        enctype="multipart/form-data">
                        <table>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td><input type="text" value="<?php echo $detail['first_name']; ?>" name="first_name" />
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input type="text" value="<?php echo $detail['last_name']; ?>" name="last_name" />
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" value="<?php echo $detail['email']; ?>" name="email" /></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="number" value="<?php echo $detail['phone']; ?>" name="phone" /></td>
                            </tr>
                        </table>
                        <input class="btn" type="submit" name="submit_basic_detail" value="update" />
                    </form>
                </center>
            </div>
        </li>
        <li>
            <div class="collapsible-header center red"><span class="fa fa-user"></span>&nbsp;&nbsp;Update your Personnel
                Details</div>
            <div class="collapsible-body">
                <!-- update personnel detail section -->
                <?php //echo $data_detail['username']; ?>
                <center>
                    <form action="index.php?get=update/personnel&&username=<?php echo $data_detail['username']; ?>"
                        method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Qualification</td>
                                <td>
                                    <select class="browser-default" name="qualification">
                                        <option value="<?php echo $data_detail['qualification']; ?>" selected>
                                            <?php echo $data_detail['qualification']; ?></option>
                                        <option value="Below 10th standard">Under 10 standard</option>
                                        <option value="10th standard">10th class ( scondery school )</option>
                                        <option value="10+2">10+2 standard ( higher secondery )</option>
                                        <option value="UG Complete">UG complete</option>
                                        <option value="UG APPEARING">UG APPEARING</option>
                                        <option value="PG Complete">PG complete</option>
                                        <option value="PG APPEARING">PG APPEARING</option>
                                        <option value="ITI COMPLETE">ITI COMPLETE</option>


                                    </select></td>
                            </tr>
                            <tr>
                                <td>Community</td>
                                <td>
                                    <select class="browser-default" name="community">
                                        <option value="<?php echo $data_detail['community']; ?>" selected>
                                            <?php echo $data_detail['community']; ?></option>
                                        <option value="UR">UN Reserved</option>
                                        <option value="OBC">OBC</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                        <option value="Miniority">Miniority</option>


                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Physicallly Weaker Person</td>
                                <td>
                                    <select name="pwd[]" multiple required>
                                        <option value="<?php echo $data_detail['pwd']; ?>" selected>
                                            <?php echo $data_detail['pwd']; ?></option>
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

                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <select class="browser-default" name="gender">
                                        <option value="<?php echo $data_detail['gender']; ?>" selected>
                                            <?php echo $data_detail['gender']; ?></option>
                                        <option value="MALE">Male</option>
                                        <option value="FEMALE">Female</option>
                                        <option value="THIRD GENDER">Third Gender</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>
                                    <select class="browser-default" name="nation">
                                        <option value="<?php echo $data_detail['nationality']; ?>" selected>
                                            <?php echo $data_detail['nationality']; ?></option>
                                        <option value="INDIA">INDIA</option>
                                        <option value="NEPAL">NEPAL</option>
                                        <option value="BHUTAN">BHUTAN</option>
                                        <option value="OTHER">OTHER COUNTRY</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Relegion</td>
                                <td>
                                    <select class="browser-default" name="relegion">
                                        <option value="<?php echo $data_detail['religion']; ?>" selected>
                                            <?php echo $data_detail['religion']; ?></option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="SIKH">SIKH</option>
                                        <option value="Christian">Christian</option>
                                        <option value="MUSLIMS">MUSLIMS</option>
                                        <option value="JEWISH">JEWISH</option>
                                        <option value="BODDHISM">BODDH</option>
                                        <option value="JAINISM">JAIN</option>
                                        <option value="OTHER RELIGION">OTHER RELIGION</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Are You an ex_serviceman</td>
                                <td>
                                    <select class="browser-default" name="ex-service">
                                        <option value="<?php echo $data_detail['ex_serviceman']; ?>" selected>
                                            <?php echo $data_detail['ex_serviceman']; ?></option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                            </tr>
                            <tr>
                                <td>Date of joining in in Army</td>
                                <td><input type="text" class="datepicker"
                                        value="<?php echo $data_detail['date_joining']; ?>" name="doj" />
                                </td>
                            </tr>
                            <tr>
                                <td>Date of retirement in Army</td>
                                <td><input type="text" class="datepicker"
                                        value="<?php echo $data_detail['date_of_retirement']; ?>" name="dor" /></td>

                            </tr>
                            <tr>
                                <td>Serving in the field of</td>
                                <td>
                                    <select class="browser-default" name="serving_area">
                                        <option value="<?php echo $data_detail['service_field']; ?>" selected>
                                            <?php echo $data_detail['service_field']; ?></option>
                                        <option value="ARMY">ARMY</option>
                                        <option value="NAVY">NAVY</option>
                                        <option value="AIR FORCE">AIR FORCE</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Are you a domicile of J&K in 1980-81?</td>
                                <td>
                                    <select class="browser-default" name="jk_factor">
                                        <option value="<?php echo $data_detail['jk_factor']; ?>" selected>
                                            <?php echo $data_detail['jk_factor']; ?></option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td>Any Mark in your body</td>
                                <td><input type="text" value="<?php echo $data_detail['body_mark']; ?>"
                                        name="mark_body" />
                                </td>
                            </tr>
                            <tr>
                                <td>Registered Aadhar no.</td>
                                <td><input type="text" value="<?php echo $data_detail['aadhar_no']; ?>"
                                        name="aadhar_no" />
                                </td>
                            </tr>
                        </table>
                        <input class="btn" type="submit" name="submit_personnel_detail" value="update" />
                    </form>
                </center>
            </div>
        </li>
        <li>
            <div class="collapsible-header center light-green"><span
                    class="fa fa-file-image-o"></span>&nbsp;&nbsp;Update Your Files
            </div>
            <div class="collapsible-body">
                <!-- update files section -->
                <?php //echo $file['username']; ?>
                <div class="container-fluid">
                    <div class="section"></div>
                    <div class="row">
                        <center>
                            <form action="index.php?get=update/files&&username=<?php echo $file['username']; ?>"
                                method="post" enctype="multipart/form-data">

                                <div class="col s13"></div>
                                <table id="pics_table">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>10th marksheet</td>
                                        <td>
                                            <?php if($file['10_marksheet']==true){
                ?>
                                            <img id="target1" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> 10th marksheet"
                                                src="<?php echo $file['10_marksheet']; ?>"
                                                alt="10th marksheet not available" />
                                            <?php }else{
              ?>
                                            <img id="target1" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> 10th marksheet not available"
                                                src="assets/photos/by-admin/ina.jpg"
                                                alt="10th marksheet not available" />
                                            <?php   } ?>
                                        </td>
                                        <td>
                                            <input type="file"  class="" id="src1" name="10m" required/>
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src1");
                                        var target = document.getElementById("target1");
                                        showImage(src, target);
                                        </script>
                                    </tr>



                                    <tr>
                                        <td>12th Marksheet</td>
                                        <td>
                                            <?php if($file['12_marksheet']==true){
                ?>
                                            <img id="target2" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> 12th marksheet"
                                                src="<?php echo $file['12_marksheet']; ?>"
                                                alt="12th marksheet not available" />
                                            <?php }else{
              ?>
                                            <img id="target2" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> 12th marksheet not available"
                                                src="assets/photos/by-admin/ina.jpg"
                                                alt="12th marksheet not available" />
                                            <?php   } ?>
                                        </td>
                                        <td>
                                            <input type="file" class="" id="src2" name="12m" />

                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src2");
                                        var target = document.getElementById("target2");
                                        showImage(src, target);
                                        </script>
                                    </tr>


                                    <tr>

                                        <td>UG Marksheet</td>
                                        <td>
                                            <?php if($file['ug_marksheet']==true){
                ?>
                                            <img id="target3" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> UG Marksheet"
                                                src="<?php echo $file['ug_marksheet']; ?>"
                                                alt="UG marksheet not available" />
                                            <?php }else{
              ?>
                                            <img id="target3" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> ug marksheet not available"
                                                src="assets/photos/by-admin/ina.jpg" alt="pg marksheet not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class=""   id="src3" name="ugl" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src3");
                                        var target = document.getElementById("target3");
                                        showImage(src, target);
                                        </script>
                                    </tr>




                                    <tr>
                                        <td>PG Marksheet</td>
                                        <td>
                                            <?php if($file['pg_marksheet']==true){
                ?>
                                            <img id="target4" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> PG Marksheet"
                                                src="<?php echo $file['pg_marksheet']; ?>"
                                                alt="PG marksheet not available" />
                                            <?php }else{
              ?>
                                            <img id="target4" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> pg marksheet not available"
                                                src="assets/photos/by-admin/ina.jpg" alt="pg marksheet not available" />
                                            <?php   } ?>
                                        </td>
                                        <td>
                                            <input type="file" class=""  id="src4" name="pgl" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src4");
                                        var target = document.getElementById("target4");
                                        showImage(src, target);
                                        </script>
                                    </tr>




                                    <tr>
                                        <td>Caste Certificate</td>
                                        <td>
                                            <?php if($file['caste_cerificate']==true){
                ?>
                                            <img id="target5" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> Caste Certificate"
                                                src="<?php echo $file['caste_cerificate']; ?>"
                                                alt="Caste Certificate not available" />
                                            <?php }else{
              ?>
                                            <img id="target5" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> caste certificate not available"
                                                src="assets/photos/by-admin/ina.jpg"
                                                alt="caste certificate not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file"  class="src5" id="src5" name="cacer" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src5");
                                        var target = document.getElementById("target5");
                                        showImage(src, target);
                                        </script>
                                    </tr>


                                    <tr>
                                        <td>Income Certificate</td>
                                        <td>
                                            <?php if($file['income_certificate']==true){
                ?>
                                            <img id="targetx" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> Income Certificate"
                                                src="<?php echo $file['income_certificate']; ?>"
                                                alt="income Certificate not available" />
                                            <?php }else{
              ?>
                                            <img id="targetx" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> income certificate not available"
                                                src="assets/photos/by-admin/ina.jpg"
                                                alt="income certificate not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class="" id="srcx" name="incer" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var srcx = document.getElementById("srcx");
                                        var targetx = document.getElementById("targetx");
                                        showImage(srcx, targetx);
                                        </script>
                                    </tr>




                                    <tr>
                                        <td>Physically weak Person</td>
                                        <td>
                                            <?php if($file['pwd_certificate']==true){
                ?>
                                            <img id="target7" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> Pwd Certificate"
                                                src="<?php echo $file['pwd_certificate']; ?>"
                                                alt="pwd Certificate not available" />
                                            <?php }else{
              ?>
                                            <img id="target7" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> 10th marksheet not available"
                                                src="assets/photos/by-admin/ina.jpg"
                                                alt="pwd Certificate not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class=""  id="src7" name="pwdcer" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src7");
                                        var target = document.getElementById("target7");
                                        showImage(src, target);
                                        </script>
                                    </tr>




                                    <tr>
                                        <td>Domicile Certificate</td>
                                        <td>
                                            <?php if($file['domicile_certificate']==true){
                ?>
                                            <img id="target8" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> domicile Certificate"
                                                src="<?php echo $file['domicile_certificate']; ?>"
                                                alt="income Certificate not available" />
                                            <?php }else{
              ?>
                                            <img id="target8" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> domicile cerificate not available"
                                                src="assets/photos/by-admin/ina.jpg"
                                                alt="domicile cerificate not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class=""  id="src8" name="domcer" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src8");
                                        var target = document.getElementById("target8");
                                        showImage(src, target);
                                        </script>
                                    </tr>





                                    <tr>
                                        <td>Photo</td>
                                        <td>

                                            <?php if($file['photo']==true){
                ?>
                                            <img id="target9" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> Photo"
                                                src="<?php echo $file['photo']; ?>" alt="Photo not available" />
                                            <?php }else{
              ?>
                                            <img id="target9" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> photo not available"
                                                src="assets/photos/by-admin/ina.jpg" alt="photo not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class=""  id="src9" name="photo" required/>
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("src9");
                                        var target = document.getElementById("target9");
                                        showImage(src, target);
                                        </script>
                                    </tr>




                                    <tr>
                                        <td>Signature</td>
                                        <td>
                                            <?php if($file['signature']==true){
                ?>
                                            <img id="targeta" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> Signature"
                                                src="<?php echo $file['signature']; ?>" alt="Signature not available" />
                                            <?php }else{
              ?>
                                            <img id="targeta" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> signature not available"
                                                src="assets/photos/by-admin/ina.jpg" alt="signature not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class=""  id="srca" name="sig" required/>
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("srca");
                                        var target = document.getElementById("targeta");
                                        showImage(src, target);
                                        </script>
                                    </tr>






                                    <tr>
                                        <td>Left Thumb Print</td>
                                        <td>
                                            <?php if($file['left_thumb']==true){
                ?>
                                            <img id="targetb" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> left thumb"
                                                src="<?php echo $file['left_thumb']; ?>"
                                                alt="left thumb not available" />
                                            <?php }else{
              ?>
                                            <img id="targetb" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> left thumb not available"
                                                src="assets/photos/by-admin/ina.jpg" alt="left_thumb not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class=""  id="srcb" name="left_thumb" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("srcb");
                                        var target = document.getElementById("targetb");
                                        showImage(src, target);
                                        </script>
                                    </tr>







                                    <tr>
                                        <td>Right Thumb Print</td>
                                        <td>
                                            <?php if($file['right_thumb']==true){
                ?>
                                            <img id="targetc" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> Right_thumb"
                                                src="<?php echo $file['right_thumb']; ?>"
                                                alt="Right thumb not available" />
                                            <?php }else{
              ?>
                                            <img id="targetc" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> right thumb not available"
                                                src="assets/photos/by-admin/ina.jpg" alt="right thumb not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class="" id="srcc" name="right_thumb" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("srcc");
                                        var target = document.getElementById("targetc");
                                        showImage(src, target);
                                        </script>
                                    </tr>








                                    <tr>
                                        <td>Other Files</td>
                                        <td>
                                            <?php if($file['other']==true){
                ?>
                                            <img id="targetd" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> other image"
                                                src="<?php echo $file['other']; ?>" alt="Other image not available" />
                                            <?php }else{
              ?>
                                            <img id="targetd" class="responsive-img z-depth-3 materialboxed"
                                                data-caption="<?php echo $detail['first_name'].' '.$detail['last_name'];?> other not available"
                                                src="assets/photos/by-admin/ina.jpg" alt="other not available" />
                                            <?php   } ?>
                                        </td>
                                        <td> <input type="file" class="" id="srcd" name="oth_file" />
                                        </td>
                                        <script>
                                        //show updated image
                                        function showImage(src, target) {
                                            var fr = new FileReader();
                                            // when image is loaded, set the src of the image where you want to display it
                                            fr.onload = function(e) {
                                                target.src = this.result;
                                            };
                                            src.addEventListener("change", function() {
                                                // fill fr with image data    
                                                fr.readAsDataURL(src.files[0]);
                                            });
                                        }

                                        var src = document.getElementById("srcd");
                                        var target = document.getElementById("targetd");
                                        showImage(src, target);
                                        </script>
                                    </tr>

                                </table>
                                <input class="btn center" type="submit" name="submit_file_detail" value="update" />
                            </form>
                        </center>
                    </div>

                </div>
            </div>
        </li>
    </ul>

</div>