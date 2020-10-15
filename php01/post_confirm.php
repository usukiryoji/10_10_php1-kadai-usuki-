<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];

function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。

?>
<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前： <?= h($name) ?>
    EMAIL： <?= h($mail) ?>
    パスワード： <?= h($password) ?>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
