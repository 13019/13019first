<?php
include("../login_in.php");
include("user.class.php");
$arr=user_login_in($_SESSION[user_id],$_SESSION[user_lock],$_SESSION[login_time]);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $arr[user_name]; ?>用户中心</title>
    <link rel="stylesheet" href="style/user.css">
</head>
<body>
<div>
    <div>修改密码</div>

    <form method="post" action="">
       <div class=""one_password">新密码<input type="password" value="" name="one_password"> </div>
       <div class="two_password">再次输入密码:<input type="password" value="" name="two_password"></div>
<input value="提交" type="submit">
    </form>
</div>
<!--分割-->
<div>
    <div>事件管理</div>
<ul>
    <?php something_chang($_SESSION[user_id],$_SESSION[user_lock]);?>
</ul>
</div>
<!--分割-->
<div>
    <div>事情管理</div>
    <form method="post" action=""></form>
</div>
</body>
</html>

