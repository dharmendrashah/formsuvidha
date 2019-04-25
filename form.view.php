<div class="container">
    <p class="flow-text center red"><b><?php echo $pgd['post_name']; ?></b></p>

    <table>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>Name Of Post</td>
            <td><?php echo $pgd['post_name']; ?></td>
        </tr>
        <tr>
            <td>Starting Date</td>
            <td><?php echo $pgd['starting_date']; ?></td>
        </tr>
        <tr>
            <td>Last Post Update</td>
            <td><?php echo $pgd['last_update']; ?></td>
        </tr>
        <tr>
            <td>Short Description</td>
            <td>
                <?php echo $pgd['short_describe']; ?>
            </td>
        </tr>
    </table>
    <div class="row hide-on-med-and-down">
        <div class="col s6">
            <p class="center"><b>Important Dates</b></p>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Notification issues</td>
                    <td><?php echo $dates['notification_date']; ?></td>
                </tr>
                <tr>
                    <td>Application Begin</td>
                    <td><?php echo $dates['application_began']; ?></td>
                </tr>
                <tr class="red">
                    <td>Last date for registration</td>
                    <td><?php echo $dates['last_date']; ?></td>
                </tr>
                <tr class="red">
                    <td>Last Date fee payment</td>
                    <td><?php echo $dates['last_date_for_fee']; ?></td>
                </tr>
                <tr>
                    <td>Online Correction till</td>
                    <td><?php echo $dates['online_correction_last_date']; ?></td>
                </tr>
                <tr>
                    <td>Admit Card available</td>
                    <td><?php echo $dates['admit_card_available']; ?></td>
                </tr>
                <tr class="red">
                    <td>Exam Date</td>
                    <td><?php echo $dates['exam_date']; ?></td>
                </tr>
                <tr>
                    <td>Answer Key Available</td>
                    <td><?php echo $dates['answer_date']; ?></td>
                </tr>
                <tr>
                    <td>Result Declare</td>
                    <td><?php echo $dates['result_declare']; ?></td>
                </tr>
            </table>
        </div>
        <div class="col s6">
            <p class="center"><b>Application Fees</b></p>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>PWD</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['pwd']; ?>/-</td>
                </tr>
                <tr>
                    <td>EWS ( non-creamy layer )</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['ews']; ?>/-</td>
                </tr>
                <tr>
                    <td>OBC</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['obc']; ?>/-</td>
                </tr>
                <tr>
                    <td>ST</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['st']; ?>/-</td>
                </tr>
                <tr>
                    <td>SC</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['sc']; ?>/-</td>
                </tr>
                <tr>
                    <td>Men</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['men']; ?>/-</td>
                </tr>
                <tr>
                    <td>Women</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['women']; ?>/-</td>
                </tr>
                <tr>
                    <td>Transgender</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['transgender']; ?>/-</td>
                </tr>
                <tr class="red">
                    <td>Payment Mode</td>
                    <td><?php echo $fee['payment_mode']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- mobile part start -->
    <div class="row hide-on-med-and-up">
        <div class="col s12">
            <p class="center"><b>Important Dates</b></p>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>Notification issues</td>
                    <td><?php echo $dates['notification_date']; ?></td>
                </tr>
                <tr>
                    <td>Application Begin</td>
                    <td><?php echo $dates['application_began']; ?></td>
                </tr>
                <tr class="red">
                    <td>Last date for registration</td>
                    <td><?php echo $dates['last_date']; ?></td>
                </tr>
                <tr class="red">
                    <td>Last Date fee payment</td>
                    <td><?php echo $dates['last_date_for_fee']; ?></td>
                </tr>
                <tr>
                    <td>Online Correction</td>
                    <td><?php echo $dates['online_correction_last_date']; ?></td>
                </tr>
                <tr>
                    <td>Admit Card available</td>
                    <td><?php echo $dates['admit_card_available']; ?></td>
                </tr>
                <tr class="red">
                    <td>Exam Date</td>
                    <td><?php echo $dates['exam_date']; ?></td>
                </tr>
                <tr>
                    <td>Answer Key Available</td>
                    <td><?php echo $dates['answer_date']; ?></td>
                </tr>
                <tr>
                    <td>Result Declare</td>
                    <td><?php echo $dates['result_declare']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row hide-on-med-and-up">
        <div class="s12">
            <p class="center"><b>Application Fees</b></p>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>PWD</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['pwd']; ?>/-</td>
                </tr>
                <tr>
                    <td>EWS ( non-creamy layer )</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['ews']; ?>/-</td>
                </tr>
                <tr>
                    <td>OBC</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['obc']; ?>/-</td>
                </tr>
                <tr>
                    <td>ST</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['st']; ?>/-</td>
                </tr>
                <tr>
                    <td>SC</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['sc']; ?>/-</td>
                </tr>
                <tr>
                    <td>Men</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['men']; ?>/-</td>
                </tr>
                <tr>
                    <td>Women</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['women']; ?>/-</td>
                </tr>
                <tr>
                    <td>Transgender</td>
                    <td><span class="fa fa-inr"></span>&nbsp;&nbsp;<?php echo $fee['transgender']; ?>/-</td>
                </tr>
                <tr class="red">
                    <td>Payment Mode</td>
                    <td><?php echo $fee['payment_mode']; ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row flow-text" style="word-wrap: break-word;">
        <p class="center red"><b>ELIGIBILITY</b></p>
        <ol>
            <li>
                <?php echo $eligibility['illetrate']; ?>
            </li>
            <li>
                <?php echo $eligibility['iti']; ?>
            </li>
            <li>
                <?php echo $eligibility['10_passed']; ?>

            </li>
            <li>
                <?php echo $eligibility['12_passed']; ?>

            </li>
            <li>
                <?php echo $eligibility['ug_passed']; ?>

            </li>
            <li>
                <?php echo $eligibility['pg_passed']; ?>

            </li>
            <li>
                <?php echo $eligibility['special_cources']; ?>

            </li>
            <li>
                <?php echo $eligibility['others']; ?>
            </li>

        </ol>
    </div>
    <div class="row center">
        <table>
            <tr>
                <th>Link-Name</th>
                <th>Link</th>
            </tr>
            <tr>
                <td>Official Site</td>
                <td><a href="<?php echo $links['official_link'];?>"><button class="btn">Go To official Site</button></a></td>
            </tr>
            <tr>
                <td>Register</td>
                <td><a href="<?php echo $links['apply_online'];?>"><button class="btn">Registration Link</button></a></td>
            </tr>
            <tr>
                <td>Login</td>
                <td><a href="<?php echo $links['login_link'];?>"><button class="btn">Login YourSelf</button></a></td>
            </tr>
            <tr>
                <td>Notification</td>
                <td><a href="<?php echo $links['notification_link'];?>"><button class="btn">TO Download Notification</button></a></td>
            </tr>
            <tr>
                <td>Syllabus</td>
                <td><a href="<?php echo $links['syllabus'];?>"><button class="btn">See the Syllabus</button></a></td>
            </tr>
            <tr>
                <td>Previous year paper</td>
                <td><a href="<?php echo $links['previous_year_paper'];?>"><button class="btn">See previous Year paper</button></a></td>
            </tr>
        </table>
    </div>
</div>