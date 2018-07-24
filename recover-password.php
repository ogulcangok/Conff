<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 23.07.2018
 * Time: 16:19
 */
require 'connect.php';

$query = $db->prepare('SELECT * FROM member WHERE member_email = ?');
$query->execute([
        $_GET['member_email']
]);
$member = $query->fetch(PDO::FETCH_ASSOC);

session_start();
$_SESSION["userId"] = $member['member_id'];

if (isset($_POST['change_password'])) {
    if (md5($_POST["new_password"]) != $member["member_password"]) {
        $encrypted_password = md5($_POST['new_password']);
        print_r($encrypted_password);
        $query = $db->prepare('UPDATE member SET member_password = "' . $encrypted_password . '" WHERE member_id = ' . $_SESSION['userId']);
        $update = $query->execute();
        if ($update) {
            $message = "Password Changed";
        } else {
            $message = $query->errorInfo();
        }
    } else
        $message = "New password can't be the same with the old one";
}
?>




<html>
<head>
    <title>Recover Password</title>
    Recover Password
</head>
<body>
<form method="post">
    <input name="new_password" type="password" placeholder="New Password">
    <br>
    <input name="confirm_new_password" type="password" placeholder="Confirm New Password">
    <br>
    <input type="hidden" name="change_password">
    <button type="submit">Değiştir</button>


</form>
</body>
</html>

