<?php
session_start();
include_once("conn.php");
$user_name=$_POST["user_name"];
$user_password=md5($_POST["user_password"]);
$user_code=$_POST["user_code"];
$user_logintime=time();
//
//echo $user_name;
if($_SESSION["cheeckcode"]==$user_code){
    $sql="select * from user where `user_name` ='$user_name'";
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);
    $us=is_array($row);
    if($us){
        if($row["user_password"]==$user_password){
            $_SESSION[user_id]=$row[user_id];
            $_SESSION[user_lock]=md5($row[user_id].$row[user_name].ALL_PS);
            $_SESSION[login_time]=mktime();
           // echo"登陆成功";
            header("Location:user/index.php");
        }else{
            echo"输入的密码不正确";
            //session_destroy();
        }
    }else{
        echo"你输入的用户名不存在";
        return false;

    }
}else{
    echo"你输入验证码不正确";
    return false;
}


?>