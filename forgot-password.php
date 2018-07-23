<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 23.07.2018
 * Time: 16:17
 */


use PHPMailer\PHPMailer\PHPMailer;

if(!empty($_POST["forgot-password"])){
    $conn = mysqli_connect("localhost", "root", "", "blog_samples");

    $condition = "";
    if(!empty($_POST["user-login-name"]))
        $condition = " member_name = '" . $_POST["user-login-name"] . "'";
    if(!empty($_POST["user-email"])) {
        if(!empty($condition)) {
            $condition = " and ";
        }
        $condition = " member_email = '" . $_POST["user-email"] . "'";
    }

    if(!empty($condition)) {
        $condition = " where " . $condition;
    }

    $sql = "Select * from members " . $condition;
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($result);

    if(!empty($user)) {
        if(!class_exists('PHPMailer')) {
            require('PHPMailer.php');
            require('SMTP.php');
        }

        require_once('mail_configuration.php');

        $mail = new PHPMailer();


        $emailBody = "<div>" . $user['member_name'] . ",<br><br><p>Click this link to recover your password<br><a href='" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $user["member_name"] . "'>" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . $user["member_name"] . "</a><br><br></p>Regards,<br> Admin.</div>";

        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port     = PORT;
        $mail->Username = MAIL_USERNAME;
        $mail->Password = MAIL_PASSWORD;
        $mail->Host     = MAIL_HOST;
        $mail->Mailer   = MAILER;

        $mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
        $mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
        $mail->ReturnPath=SERDER_EMAIL;
        $mail->AddAddress($user["member_email"]);
        $mail->Subject = "Forgot Password Recovery";
        $mail->MsgHTML($emailBody);
        $mail->IsHTML(true);

        if(!$mail->Send()) {
            $error_message = 'Problem in Sending Password Recovery Email';
        } else {
            $success_message = 'Please check your email to reset password!';
        }
    } else {
        $error_message = 'No User Found';
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
