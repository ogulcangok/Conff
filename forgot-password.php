<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 23.07.2018
 * Time: 16:17
 */

require 'connect.php';
require 'class.phpmailer.php';
require 'mail-configuration.php';

if(!empty($_POST["forgot-password"])){
    $condition = "";
    if(!empty($_POST["user-login-name"]))
        $condition = " member_name = '" . $_POST['user-login-name'] . "'";
    if(!empty($_POST["user-email"])) {
        if(!empty($condition)) {
            $condition = " AND ";
        }
        $condition = " member_email = '" . $_POST['user-email'] . "'";
    }

    if(!empty($condition)) {
        $condition = " WHERE " . $condition;
    }

    $sql = "SELECT * FROM member" . $condition;
    $query = $db->prepare($sql);
    $query->execute();
    $member = $query->fetch(PDO::FETCH_ASSOC);
    print_r($member);



    if(!empty($member)) {
        $emailBody = "<div>" . $member["member_name"] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "recover-password.php?member_email=" . $member["member_email"] . "'>" . PROJECT_HOME . "recover-password.php?email=" . $member["member_email"] . "</a><br><br></p>Regards,<br> Admin.</div>";
        sendMail($_POST['user-email'], $member['member_name'], "Şifre Kurtarma", $emailBody);

    } else {
        echo "No user found";
    }
}




?>

<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
    <h1>Forgot Password?</h1>
    <?php if(!empty($success_message)) { ?>
        <div class="success_message"><?php echo $success_message; ?></div>
    <?php } ?>

    <div id="validation-message">
        <?php if(!empty($error_message)) { ?>
            <?php echo $error_message; ?>
        <?php } ?>
    </div>

    <div class="field-group">
        <div><label for="username">Username</label></div>
        <div><input type="text" name="user-login-name" id="user-login-name" class="input-field"> Or</div>
    </div>

    <div class="field-group">
        <div><label for="email">Email</label></div>
        <div><input type="text" name="user-email" id="user-email" class="input-field"></div>
    </div>

    <div class="field-group">
        <div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
    </div>
</form>
