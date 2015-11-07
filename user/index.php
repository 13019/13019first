<?php
include_once("../login_in.php");
user_login_in($_SESSION[user_id],$_SESSION[user_lock],$_SESSION[login_time]);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>用户中心</title>
    <link rel="stylesheet" href="style/user.css">
</head>
<body>
<div>
    <div>修改用户信息</div>
    <form method="post" action=""></form>
</div>
<!--分割-->
<div>
    <div>事件管理</div>
    <form method="post" action=""></form>
</div>
<!--分割-->
<div>
    <div>事情管理</div>
    <form method="post" action=""></form>
</div>
</body>
</html>

