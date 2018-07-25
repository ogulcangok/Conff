<?php
/**
 * Created by PhpStorm.
 * User: SelimK
 * Date: 23.07.2018
 * Time: 16:19
 */
require 'connect.php';

if (isset($_GET['a']) && $_GET['a'] == 'recover' && $_GET['email'] != "") {
    $key = $_GET['email'];
    $member_id = urldecode(base64_decode($_GET['u']));
    $curDate = date("Y-m-d H:i:s");

    $query = $db->prepare('SELECT * FROM recovery_emails WHERE recovery_key = ? AND member_id = ? AND exp_date >= ?');
    $query->execute([
        $key, $member_id, $curDate
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['change_password'])) {
    if ($result) {
        $password = md5(trim($_POST['new_password']));

        $query = $db->prepare('UPDATE member SET member_password = ? WHERE member_id = ?');
        $query->execute([
            $password, $member_id
        ]);

        $query = $db->prepare('UPDATE recovery_emails SET key_status = 1 WHERE recovery_key = ?');
        $query->execute([$key]);
    }
}
?>


<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/conff.ico" />
    <title>Recover Password</title>
    Recover Password
</head>

<?php if ($result['key_status'] == 0): ?>
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
<?php else: ?>
<body>
Bu şifre kullanıldı
</body>
<?php endif; ?>

