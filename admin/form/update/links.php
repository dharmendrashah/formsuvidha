<div class="container">
    <form action="admin.php?admin=admin/form/update/links/sql" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Link Name</th>
                <th>To Update link</th>
            </tr>
            <tr>
                <td>official link</td>
                <td><input type="text" value="<?php echo $links['official_link'];?>" class="input-field" class="notification"
                        name="official_link" /></td>
            </tr>
            <tr>
                <td>apply online</td>
                <td><input type="text" value="<?php echo $links['apply_online'];?>" class="" class="notification"
                        name="apply_online" /></td>
            </tr>
            <tr>
                <td>login_link</td>
                <td><input type="text" value="<?php echo $links['login_link'];?>" class="" class="notification"
                        name="login_link" /></td>
            </tr>
            <tr>
                <td>notification_link</td>
                <td><input type="text" value="<?php echo $links['notification_link'];?>" class="" class="notification"
                        name="notification_link" /></td>
            </tr>
            <tr>
                <td>syllabus</td>
                <td><input type="text" value="<?php echo $links['syllabus'];?>" class="" class="notification"
                        name="syllabus" /></td>
            </tr>
            <tr>
                <td>previous_year_paper</td>
                <td><input type="text" value="<?php echo $links['previous_year_paper'];?>" class="" class="notification"
                        name="previous_year_paper" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn" value="Update" name="Update_link" /></td>
            </tr>
        </table>
    </form>
</div>
