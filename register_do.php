<?php
session_start();
include_once("conn.php");
$user_name=$_POST["user_name"];
$user_password=md5($_POST["user_password"]);
$user_repassword=md5($_POST["user_repassword"]);
$user_code=$_POST["user_code"];
$user_regtime=time();
//验证验证码
if($_SESSION["cheeckcode"]!=$user_code){
	echo"验证码错误，请重新输入";
	return false;
	}
if(empty($usr_name)){
	echo"请输入用户名";
	return false;
		}
if(empty($user_password)){
	echo"请输入密码";
	return false;
		}
 //echo"$user_name";
 //echo"$user_password";
//服务器端验证邮箱
if($user_name){
	 $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
	if(preg_match($pattern, $user_name)){
		
		}else{
			echo"请正确输入邮箱";
			return false;
			} 
	}
//验证密码长度
$len_user_password=strlen($user_password);
if($len_user_password<6){
	echo"密码长度不能小于6";
	return false;
	}
//验证两次密码
if($user_password<>$user_repassword){
	echo"两次密码不一样，请从新输入";
	return false;
	}
//验证用户名是否存在，不存在就插入数据；
if(isset($_POST["submit"])){
	$sql="select user_name from user where user_name='".$_POST['user_name']."'";
	$result=mysql_query($sql);
	if(!empty($result)){
		echo"用户名已经存在";
		return false;
		}
	else{
		$sql="insert into user (user_name,user_password,user_regtime) values ('$user_name','$user_password','$user_regtime')";
		mysql_query($sql);
		echo"注册成功";
		}
}
		
		

?>