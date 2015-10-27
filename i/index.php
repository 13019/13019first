<?php
include_once("i.class.php");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>我的事情</title>
    <link rel="stylesheet" href="style/css.css">
</head>
<body>
<div class="header">
    <div class="logo"></div>
    <ul>
        <li><a href="">首页</a></li>
        <li><a href="">我的事情</a></li>
    </ul>
</div>
<div class="something">
    <div>我最新做的事情</div>
    <ul>
        <?php list_user_thing($user_id) ?>
    </ul>
</div>
<div class="new_do">
    <ul>
        <?php new_do($user_id) ?>
    </ul>
</div>

</body>
</html>
