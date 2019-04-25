<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/liabrary/node_modules/materialize-css/dist/css/materialize.min.css" type="text/css"
        rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/liabrary/fontawesome/css/font-awesome.css">
</head>
<style>
body {visibility:visible;}
.print {visibility:visible;}
#print_page{margin-left:50%;margin-bottom:20px;}
</style>
<body>
    <!-- prdintable material -->
    <div class="container-fluid" type="text/css" media="print">
        <div class="container" id="applicants_copy">
            <h4 class="center">FormSuvidha <br>
                <h6 class="center">Applicants Copy</h6><br>
                <h6 class="center">
                    At <?php 
        date_default_timezone_set("asia/kolkata");
        echo date("d/m/y h:i:sa") ?>
                </h6>
            </h4>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Applicant's Name</td>
                    <td>Dharmendra Shah</td>
                </tr>
                <tr>
                    <td>Apply For</td>
                    <td>UGC NET</td>
                </tr>
                <tr>
                    <td>Application No.</td>
                    <td>9786-7875-7875</td>
                </tr>
                <tr>
                    <td>Charges</td>
                    <td>INR 100/-</td>
                </tr>
                <tr>
                    <td>Mode</td>
                    <td>Online/Offline</td>
                </tr>
                <tr>
                    <td>Form will Apply By</td>
                    <td>Dharmendra Shah</td>
                </tr>
                <tr>
                    <td>Customer Care No.</td>
                    <td>+917597365803</td>
                </tr>
                <tr>
                    <td>Dharmendra Shah Registered ID</td>
                    <td>9763467854637</td>
                </tr>
            </table>
            <p><strong>We can directly connect with you for the further information via calling and other mediums<br>For
                    the another enquery Please contact our Customer care no. At +917597365803</strong></p>
        </div>
        <hr>




        <!-- printable material -->
        <div class="container" id="applicants_copy">
            <h4 class="center">FormSuvidha <br>
                <h6 class="center">Retailer Copy</h6><br>
                <h6 class="center">
                    At <?php 
        date_default_timezone_set("asia/kolkata");
        echo date("d/m/y h:i:sa") ?>
                </h6>
            </h4>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Applicant's Name</td>
                    <td>Dharmendra Shah</td>
                </tr>
                <tr>
                    <td>Apply For</td>
                    <td>UGC NET</td>
                </tr>
                <tr>
                    <td>Application No.</td>
                    <td>9786-7875-7875</td>
                </tr>
                <tr>
                    <td>Charges</td>
                    <td>INR 100/-</td>
                </tr>
                <tr>
                    <td>Mode</td>
                    <td>Online/Offline</td>
                </tr>
                <tr>
                    <td>Form will Apply By</td>
                    <td>Dharmendra Shah</td>
                </tr>
                <tr>
                    <td>Customer Care No.</td>
                    <td>+917597365803</td>
                </tr>
                <tr>
                    <td>Dharmendra Shah Registered ID</td>
                    <td>9763467854637</td>
                </tr>
            </table>
            <p><strong>We can directly connect with you for the further information via calling and other mediums<br>For
                    the another enquery Please contact our Customer care no. At +917597365803</strong></p>
        </div>
    </div>
    <input type="button" class="btn" id="print_page" value="print" onclick="window.print();return false;" />
    </div>
</body>

</html>