<div class="container">
    <form action="admin.php?admin=admin/form/update/eligibility/sql" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Eligibility Name</th>
                <th>To Update Eligibility</th>
            </tr>
            <tr>
                <td>Illetrate</td>
                <td><input type="text" value="<?php echo $eligibility['illetrate'];?>" class="" class="notification"
                        name="illetrate" /></td>
            </tr>
            <tr>
                <td>iti</td>
                <td><input type="text" value="<?php echo $eligibility['iti'];?>" class="" class="notification"
                        name="iti" /></td>
            </tr>
            <tr>
                <td>10 Passed</td>
                <td><input type="text" value="<?php echo $eligibility['10_passed'];?>" class="" class="notification"
                        name="10_passed" /></td>
            </tr>
            <tr>
                <td>12 passed</td>
                <td><input type="text" value="<?php echo $eligibility['12_passed'];?>" class="" class="notification"
                        name="12_passed" /></td>
            </tr>
            <tr>
                <td>ug passed</td>
                <td><input type="text" value="<?php echo $eligibility['ug_passed'];?>" class="" class="notification"
                        name="ug_passed" /></td>
            </tr>
            <tr>
                <td>pg passed</td>
                <td><input type="text" value="<?php echo $eligibility['pg_passed'];?>" class="" class="notification"
                        name="pg_passed" /></td>
            </tr>
            <tr>
                <td>special cources</td>
                <td><input type="text" value="<?php echo $eligibility['special_cources'];?>" class="" class="notification"
                        name="special_cources" /></td>
            </tr>
            <tr>
                <td>others</td>
                <td><input type="text" value="<?php echo $eligibility['others'];?>" class="" class="notification"
                        name="others" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn" value="Update" name="Update_eligibility" /></td>
            </tr>
        </table>
    </form>
</div>