<div class="container">
    <div class="row">
        <form class="" id="" action="admin.php?admin=admin/form/update/pgd/sql" method="Post"
            enctype="multipart/form-data">
            <table>
                <tr>
                    <th>Edit Type</th>
                    <th>Edit Link</th>
                </tr>
                <tr>
                    <td>Form Name</td>
                    <td><input type="text" class="input-field" name="pgd" value="<?php echo $pgd['post_name']; ?>"/></td>
                </tr>
                <tr>
                    <td>Starting Date</td>
                    <td><input type="text" class="input-field datepicker" name="starting_date" value="<?php echo $pgd['starting_date']; ?>"/></td>
                </tr>
                <tr>
                    <td>Short Description</td>
                    <td><input type="text" class="input-field" name="short_describe" value="<?php echo $pgd['short_describe']; ?>"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn" value="Update" name="Update_pgd" /></td>
                </tr>
            </table>

        </form>
    </div>
</div>