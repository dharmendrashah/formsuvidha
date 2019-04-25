<?php include "application/admin/header.php"; ?>
<style>
</style>
<div class="container" id="">
    <form action="admin.php?admin=admin/add-user" id="" method="POST" class="" enctype="multipart/form-data" />
    <div class="row">
        <div class="section"></div>
        <div class="col s12"></div>
        <div class="col s6 " id="respo_img">
            <img src="assets/photos/by-admin/ina.jpg" class="responsive-img left" style="height:150px" id="src_image">
            <input type="file" id="image_pic" name="pic" name="photo" accept="image/*" required>
            <label for="image_pic">Profile Pic</label>
        </div>
        <div class="col s6 " id="respo_img">
            <img src="assets/photos/by-admin/ina.jpg" style="height:150px" class="responsive-img right" id="src_sig">
            <input type="file" name="sig" id="image_sig_tar" accept="image/*" required>
            <label for="image_sig">Signature Pic</label>

        </div>
        <div class="section"></div>
        <div class="input-field col s12">
            <select name="role" required>
                <option value="" disabled selected>Choose your option</option>
                <option value="Administrator">Administrator</option>
                <option value="Controller">Controller</option>
                <option value="Mailer">Mailer</option>
                <option value="Mailer">Varifier</option>
                <option value="Editor">Editor</option>
            </select>
            <label>Select Role</label>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input placeholder="" id="first_name" type="text" class="validate" autocomplete="off" name="first_name" required>
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate" autocomplete="off" name="last_name" required>
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" autocomplete="off" name="email" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email1" type="tel" class="validate" autocomplete="off" name="tel" required>
                <label for="email1">Phone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" autocomplete="off" name="password" required>
                <label for="password">Password</label>
            </div>
        </div>
        <button class="btn center" name="submit_admin" type="submin">Submit</button>
    </div>
    </form>
</div>

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

                                        var src = document.getElementById("image_pic");
                                        var target = document.getElementById("src_image");
                                        showImage(src, target);
                                        </script>

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

                                        var src = document.getElementById("image_sig_tar");
                                        var target = document.getElementById("src_sig");
                                        showImage(src, target);
                                        </script>
<?php include "application/admin/footer.php"; ?>