<?php
include_once("conn.php");
$user_name=$_POST["user_name"];
<<<<<<< HEAD
$user_password=md5($_POST["user_password"]);
$user_repassword=md5($_POST["user_repassword"]);
$user_regtime=time();
 //echo"$user_name";
 //echo"$user_password";
//服务器端验证邮箱
if($user_name){
	 $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
	if(preg_match($pattern, $user_name)){
		
		}else{
			echo"请正确输入邮箱";
			} 
	}
//验证两次密码
if($user_password<>$user_repassword){
	echo"两次密码不一样，请从新输入";
	}

//验证用户名是否存在，不存在就插入数据；
if(isset($_POST["submit"])){
	$sql="select user_name from user where user_name='".$_POST['user_name']."'";
	$result=mysql_query($sql);
	if(!empty($result)){
		echo"用户名已经存在";
		}
	else{
		$sql="insert into user (user_name,user_password,user_regtime) values ('$user_name','$user_password','$user_regtime')";
		mysql_query($sql);
		echo"charu";
		}
}
		
		
=======
$user_password=$_POST["user_password"];




>>>>>>> parent of a003847... Revert "Revert "10.8中午""
?>