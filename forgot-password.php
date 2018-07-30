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

    if(!empty($member)) {
        $expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+3, date("Y"));
        $expDate = date("Y-m-d H:i:s",$expFormat);
        $key = md5($member['member_name'] . '_' . $member['member_email'] . rand(0,10000) . $expDate . PW_SALT);

        $query = $db->prepare('INSERT INTO recovery_emails SET member_id = ?, recovery_key = ?, exp_date = ?, key_status = 0');
        $insertRecoveryKey = $query->execute([
            $member['member_id'], $key, $expDate
        ]);

        if ($insertRecoveryKey) {
            $passwordLink = "<a href=\"http://localhost:63342/Conff/recover-password.php?a=recover&email=" . $key . "&u=" . urlencode(base64_encode($member['member_id'])) . "\">http://test.conff.co/recover-password.php?a=recover&email=" . $key . "&u=" . urlencode(base64_encode($member['member_id'])) . "</a>";

            $message = "Dear " . $member['member_name'] . "<br>";
            $message .= "Please visit the following link to reset your password:<br>";
            $message .= $passwordLink . "<br>";
            $message .= "Please be sure to copy the entire link into your browser. The link will expire after 3 days for security reasons.<br><br>";
            $message .= "If you did not request this forgotten password email, no action is needed, your password will not be reset as long as the link above is not visited. However, you may want to log into your account and change your security password and answer, as someone may have guessed it.<br><br>";
            $message .= "Thanks,<br>";
            $message .= "-- <br> Our site team";
            sendMail($_POST['user-email'], $member['member_name'], "Şifre Kurtarma", $message);
        }
    } else {
        echo "No user found";
    }
}
?>

<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/conff.ico" />
    <title>Forgot Password</title>
</head>
<body>
<form method="post">
    <h1>Forgot Password?</h1>
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
</body>

</html>
