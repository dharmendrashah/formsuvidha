<div class="container">
    <form action="admin.php?admin=admin/form/update/dates/sql" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Date Name</th>
                <th>To Update dates</th>
            </tr>
            <tr>
                <td>Notification Date</td>
                <td><input type="text" value="<?php echo $dates['notification_date'];?>" class="datepicker"
                        class="notification" name="notification" /></td>
            </tr>
            <tr>
                <td>Application Began</td>
                <td><input type="text" value="<?php echo $dates['application_began'];?>" class="datepicker"
                        class="notification" name="began" /></td>
            </tr>
            <tr>
                <td>Last Date OF form</td>
                <td><input type="text" value="<?php echo $dates['last_date'];?>" class="datepicker"
                        class="notification" name="lastdate" /></td>
            </tr>
                        <tr>
                <td>Last Date fee</td>
                <td><input type="text" value="<?php echo $dates['last_date_for_fee'];?>" class="datepicker"
                        class="notification" name="lastfee" /></td>
            </tr>
            <tr>
                <td>online Correction Last Date</td>
                <td><input type="text" value="<?php echo $dates['online_correction_last_date'];?>" class="datepicker"
                        class="notification" name="admitcard" /></td>
            </tr>
            <tr>
                <td>Admit Card Available</td>
                <td><input type="text" value="<?php echo $dates['admit_card_available'];?>" class="datepicker"
                        class="notification" name="examdate" /></td>
            </tr>
            <tr>
                <td>Exam Date</td>
                <td><input type="text" value="<?php echo $dates['exam_date'];?>" class="datepicker"
                        class="notification" name="answerkey" /></td>
            </tr>
            <tr>
                <td>Answer Date</td>
                <td><input type="text" value="<?php echo $dates['answer_date'];?>" class="datepicker"
                        class="notification" name="answer_date" /></td>
            </tr>
            <tr>
                <td>Result Declare</td>
                <td><input type="text" value="<?php echo $dates['result_declare'];?>" class="datepicker"
                        class="notification" name="result" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn" value="Update" name="Update_date" /></td>
            </tr>
        </table>
    </form>
</div>