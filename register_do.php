<?php
include_once("conn.php");
$user_name=$_POST["user_name"];
$user_password=md5($_POST["user_password"]);
$user_regtime=time();

//服务器端验证邮箱
if($user_name){
	 $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
	if(preg_match( $pattern, $email_address)){
		
		}else{
			echo"请正确输入邮箱";
			} 
	}


//验证用户名是否存在，不存在就插入数据；
if(isset($_POST["submit"])){
	$sql="select user from".$dbname."where user_name='".$_POST['user_name']."'";
	$result=mysql_query($sql);
	if(!empty($result)){
		echo"用户名已经存在";
		}
	}else{
		$sql="inset into user(user_id,user_name,user_password,$user_regtime) value('','$user_name','$user_password','$user_regtime')";
		mysql_query($sql);
		}
		
		
		
?>