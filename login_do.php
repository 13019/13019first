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
	$sql="select user_name,user_password from user where user_name='".$user_name."'";
	$result=mysql_query($sql);	
	if($row=mysql_fetch_array($result)){
			if($row["user_password"]==$user_password){
				$_SESSION["user"]=$user_name;
				echo"登陆成功";
				}else{
					echo"输入的密码不正确";
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