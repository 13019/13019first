<?php
include_once("../login_in.php");
user_login_in($_SESSION[user_id],$_SESSION[user_lock],$_SESSION[login_time]);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>�û�����</title>
    <link rel="stylesheet" href="style/user.css">
</head>
<body>
<div>
    <div>�޸��û���Ϣ</div>
    <form method="post" action=""></form>
</div>
<!--�ָ�-->
<div>
    <div>�¼�����</div>
    <form method="post" action=""></form>
</div>
<!--�ָ�-->
<div>
    <div>�������</div>
    <form method="post" action=""></form>
</div>
</body>
</html>

