<style>
#profile_background_img {
    max-height: 300px;
    width: 100%;
}

#user_img {
    height: 175px;
    width: 200px;
    margin-bottom: 0px auto;
    z-index: 999999;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#profile_data_img {
    height=10px;
}

#sub_nav center div {
    height: 50px;
}

#sub_nav center div a {
    color: black;
}

#sub_nav center div:hover {
    height: 60px;
}

#tbl tr td {
    max-width: 35px;
}
</style>
<div class="container hide-on-med-and-down" id="fixed">
    <div class="row" id="sub_nav">
        <center>
            <div class="col s3 light-blue" id="2_nav_bar1"><a href="index.php?get=update/&&username=<?php echo $detail['username']; ?>" class="flow-text" id="nav_bar_text1">EDIT
                    PROFILE</a></div>
            <div class="col s3 light-green" id="2_nav_bar2"><a href="index.php?get=form_status/hots&&username=<?php echo $detail['username']; ?>" class="flow-text" id="nav_bar_text2">HOTS</a></div>
            <div class="col s3 lime" id="2_nav_bar3"><a href="index.php?get=form_status/new_apply&&username=<?php echo $detail['username']; ?>" class="flow-text" id="nav_bar_text3">APPLY NEW FORM</a>
            </div>
            <div class="col s3 orange" id="2_nav_bar4"><a href="index.php?get=form_status/detail&&username=<?php echo $detail['username']; ?>" class="flow-text" id="nav_bar_text4">APPLIED FORM</a>
            </div>
        </center>
    </div>
</div>
<div class="container">

    <div class="row user-profile mt-1">
        <center>
            <div class="section"></div>
            <!-- profile photo start -->
            <?php if ($file['photo']==true){
            ?>

            <img class="responsive-img center" id="user_img" alt="image not available"
                src="<?php echo $file['photo']; ?>" />
            <?php } ?>

            <!-- end of profile photo -->
            <table id="tbl">
                <tr>
                    <th>Detail Name</th>
                    <th>Detail info</th>
                </tr>
                <!-- name start -->
                <?php if($detail['first_name']==true){
    ?>

                <tr>
                    <td>Name</td>
                    <td><?php echo $detail['first_name'].' '.$detail['last_name']; ?></td>
                </tr>
                <?php } ?>
                <!-- name end -->
                <!-- email start -->
                <?php if ($detail['email']==true){
    ?>
                <tr>
                    <td>Email</td>
                    <td><?php echo $detail['email']; ?></td>
                </tr>
                <?php } ?>
                <!-- email end -->
                <!-- gender start -->
                <?php if($data_detail['gender'])
{
    ?>
                <tr>
                    <td>Gender</td>
                    <td><?php echo $data_detail['gender']; ?></td>
                </tr>
                <?php } ?>
                <!-- gender end -->
                <!-- qualification start -->
                <?php if ($data_detail['qualification']==true){
    ?>
                <tr>
                    <td>Qualification</td>
                    <td><?php echo $data_detail['qualification']; ?> </td>
                </tr>
                <?php } ?>
                <!-- qualification end -->
                <!-- pwd start -->
                <?php if ($data_detail['pwd']){
            ?>
                <tr>
                    <td>They Are With DisAbilities</td>
                    <td class="" id="width-max"><?php echo $data_detail['pwd']; ?></td>
                </tr>
                <!-- pwd end -->
                <?php } ?>
                <!-- nationality start-->
                <?php if($data_detail['nationality']==true){
            ?>

                <tr>
                    <td>Natinality</td>
                    <td><?php echo $data_detail['nationality']; ?></td>
                </tr>
                <!-- nationality end -->
                <?php } ?>
                <!-- relegion start -->
                <?php if ($data_detail['religion']==true){
            ?>
                <tr>
                    <td>Religion</td>
                    <td><?php echo $data_detail['religion']; ?></td>
                </tr>
                <?php } ?>
                <!-- ex_serviceman start -->
                <?php if($data_detail['ex_serviceman']){
            ?>

                <tr>
                    <td>Are you a ex-servicemen/women</td>
                    <td><?php echo $data_detail['ex_serviceman']; ?></td>
                </tr>
                <?php } ?>
                <!-- ex_serviceman -->
                <!-- domicile of j&k -->
                <?php if ($data_detail['jk_factor']==true){
    ?>
                <tr>
                    <td>Domicile Of J&K during 01-01-1980-81</td>
                    <td><?php echo $data_detail['jk_factor']; ?></td>
                </tr>
                <?php } ?>
                <!-- j&k factor -->
                <?php if ($data_detail['body_mark']==true){
            ?>
                <tr>
                    <td>Body Physical mark</td>
                    <td><?php echo $data_detail['body_mark']; ?></td>
                </tr>
                <?php } ?>
                <!-- j&k end -->
                <!-- aadhar card start -->
                <?php if ($data_detail['aadhar_no']==true){
            ?>

                <tr>
                    <td>Aadhar Card No.</td>
                    <td><?php echo $data_detail['aadhar_no']; ?></td>
                </tr>
                <!-- aadhar no. end -->
                <?php } ?>
                <!-- 10 marksheet -->
                <?php if ($file['10_marksheet']==true){
            ?>

                <tr>
                    <td>10th Mark sheet</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['10_marksheet']; ?>"><img
                                class="responsive-img" src="<?php echo $file['10_marksheet']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="10th mark sheet Not available" /></a></td>
                </tr>
                <?php } ?>
                <!-- 10 marksheet end -->
                <!-- 12 th marksheet start -->
                <?php if ($file['12_marksheet']==true){
            ?>

                <tr>
                    <td>12th Mark sheet</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['12_marksheet']; ?>"><img
                                class="responsive-img" src="<?php echo $file['12_marksheet']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="12th mark sheet Not available" /></a></td>
                </tr>
                <?php } ?>
                <!-- 12 marksheet end -->
                <?php if($file['ug_marksheet']==true){
    ?>
                <tr>
                    <td>UG last year Mark sheet</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['ug_marksheet']; ?>"><img
                                class="responsive-img" src="<?php echo $file['ug_marksheet']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="ug mark sheet Not available" /></a></td>
                </tr>
                <?php } ?>
                <!-- pg marksheet -->
                <?php if($file['pg_marksheet']==true){
    ?>
                <tr>
                    <td>PG last year Mark sheet</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['pg_marksheet']; ?>"><img
                                class="responsive-img" src="<?php echo $file['pg_marksheet']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="pg mark sheet Not available" /></a></td>
                </tr>
                <?php } ?>
                <!-- pg marksheet end -->
                <!-- caste certificate start -->
                <?php if($file['caste_cerificate']==true){
    ?>
                <tr>
                    <td>Cast Certificate</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['caste_cerificate']; ?>"><img
                                class="responsive-img" src="<?php echo $file['caste_cerificate']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img" alt="caste Not available" /></a>
                    </td>
                </tr>
                <?php } ?>
                <!-- caste certificate end -->
                <!-- income certificate -->
                <?php if ($file['income_certificate']==true){
            ?>

                <tr>
                    <td>Income Cerificate</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['income_certificate']; ?>"><img
                                class="responsive-img" src="<?php echo $file['income_certificate']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="Income certificate Not available" /></a></td>
                </tr>
                <?php } ?>
                <!-- pwd certificate -->
                <?php if($file['pwd_certificate']==true){
            ?>
                <tr>
                    <td>Pwd certificate</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['pwd_certificate']; ?>"><img
                                class="responsive-img" src="<?php echo $file['pwd_certificate']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="PWD certificate is not available" /></a></td>
                </tr>
                <?php } ?>
                <!-- domicile certificate -->
                <?php if($file['domicile_certificate']==true){
            ?>
                <tr>
                    <td>Domicile Certificate</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['domicile_certificate']; ?>"><img
                                class="responsive-img" src="<?php echo $file['domicile_certificate']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="Domicile Certificate Not available" /></a></td>
                </tr>
                <?php } ?>
                <!-- passport size -->
                <?php if($file['photo']==true){
            ?>

                <tr>
                    <td>Passport Size Photo</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['photo']; ?>"><img class="responsive-img"
                                src="<?php echo $file['photo']; ?>" style="height: 50px;width: 50px;"
                                id="profile_data_img" alt="Passport Size Photo Not available" /></a></td>
                </tr>
                <?php } ?>
                <?php if($file['signature']==true){
            ?>

                <tr>
                    <td>Signature Image</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['signature']; ?>"><img class="responsive-img"
                                src="<?php echo $file['signature']; ?>" style="height: 50px;width: 50px;"
                                id="profile_data_img" alt="Signature Is Not available" /></a></td>
                </tr>
                <?php } ?>
                <?php if($file['left_thumb']==true){
            ?>

                <tr>
                    <td>Left Thumb Image</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['left_thumb']; ?>"><img class="responsive-img"
                                src="<?php echo $file['left_thumb']; ?>" style="height: 50px;width: 50px;"
                                id="profile_data_img" alt="Left thumb image Is Not available" /></a></td>
                </tr>
                <?php } ?>
                <?php if($file['right_thumb']==true){
            ?>

                <tr>
                    <td>Right Thumb Image</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['right_thumb']; ?>"><img
                                class="responsive-img" src="<?php echo $file['right_thumb']; ?>"
                                style="height: 50px;width: 50px;" id="profile_data_img"
                                alt="Right thumb Is Not available" /></a></td>
                </tr>
                <?php } ?>
                <?php if($file['other']==true){
            ?>
                <tr>
                    <td>Other</td>
                    <td><a data-fancybox="gallery" href="<?php echo $file['other']; ?>"><img class="responsive-img"
                                src="<?php echo $file['other']; ?>" style="height: 50px;width: 50px;"
                                id="profile_data_img" alt="Other Image files is Not available" /></a></td>
                </tr>
                <?php } ?>
            </table>
        </center>
        <!--
        <div class="container-fluid right hide-on-med-and-down">
            <button class="btn red" href="index.php?get=delete/&&username=<?php echo $file['username']; ?>" id="delete_user_data"> DELETE MY DATA </button>
        </div>-->
    </div>
</div>
</div>
<?php include "application/footer.php"; ?>