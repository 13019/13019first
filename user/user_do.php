<?php
/**
 * Created by PhpStorm.
 * User: willc
 * Date: 2015/11/12
 * Time: 20:51
 */
include("../login_in.php");
$user_id=$_SESSION[user_id];
$one_password=$_POST[one_password];
$two_password=$_POST[two_password];
$password=md5($one_password);
echo $password."<br>";
echo $user_id;
if(empty($user_id)){
    echo"请登陆";
}
if(empty($one_password)||empty($two_password)){
echo "请输入密码";
}
$len_password=strlen($one_password);
if($len_password<6){
    echo "密码的长度不足6位";
}
if($one_password!=$two_password){
    echo "两次输入的密码不一样，请重新输入";
}else{
    $sql="update user set user_password='$password' where user_id='$user_id'" ;
    mysql_query($sql);
    echo"修改成功";
}

