<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 24.07.2018
 * Time: 13:45
 */

define("PW_SALT" ,'(+3%_');
define("PROJECT_HOME","test.conff.co/");

define("PORT", 465); // port number
define("MAIL_USERNAME", "test@test.conff.co"); // smtp usernmae
define("MAIL_PASSWORD", "Test.1903"); // smtp password
define("MAIL_HOST", "ikarus.domainhizmetleri.com"); // smtp host
define("MAILER", "smtp");

define("SENDER_NAME", "Admin");
define("SERDER_EMAIL", "admin@admin.com");


function sendMail($to_mail, $to_name, $subject, $body) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAIL_HOST;
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = MAIL_USERNAME;
    $mail->Password = MAIL_PASSWORD;
    $mail->SetFrom($mail->Username, 'Conff');
    $mail->AddAddress($to_mail, $to_name);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $subject;

    $mail->MsgHTML($body);
    if($mail->Send()) {
        echo "e-posta başarı ile gönderildi";
    } else {
        // bir sorun var, sorunu ekrana bastıralım
        echo $mail->ErrorInfo;
    }
}