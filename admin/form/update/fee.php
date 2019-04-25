<div class="container">
    <form action="admin.php?admin=admin/form/update/fee/sql" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Fee Name</th>
                <th>To Update fee</th>
            </tr>
            <tr>
                <td>Pwd Fees</td>
                <td><input type="number" value="<?php echo $fee['pwd'];?>" class="" class="notification"
                        name="pwd" /></td>
            </tr>
            <tr>
                <td>Ews Fees</td>
                <td><input type="number" value="<?php echo $fee['ews'];?>" class="" class="notification"
                        name="ews" /></td>
            </tr>
            <tr>
                <td>OBC fees</td>
                <td><input type="number" value="<?php echo $fee['obc'];?>" class="" class="notification"
                        name="obc" /></td>
            </tr>
            <tr>
                <td>St fees</td>
                <td><input type="number" value="<?php echo $fee['st'];?>" class="" class="notification"
                        name="st" /></td>
            </tr>
            <tr>
                <td>SC</td>
                <td><input type="number" value="<?php echo $fee['sc'];?>" class="" class="notification"
                        name="sc" /></td>
            </tr>
            <tr>
                <td>Men</td>
                <td><input type="number" value="<?php echo $fee['men'];?>" class="" class="notification"
                        name="men" /></td>
            </tr>
            <tr>
                <td>Womn</td>
                <td><input type="number" value="<?php echo $fee['women'];?>" class="" class="notification"
                        name="Women" /></td>
            </tr>
            <tr>
                <td>transgender Fees</td>
                <td><input type="number" value="<?php echo $fee['transgender'];?>" class="" class="notification"
                        name="transgender" /></td>
            </tr>
            <tr>
                <td>Payment Mode</td>
                <td>
                    <select name="Payment" required>
                        <option value="" disabled selected><?php echo $fee['payment_mode'];?></option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>

                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn" value="Update" name="Update_fee" /></td>
            </tr>
        </table>
    </form>
</div>