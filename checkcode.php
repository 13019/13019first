<?php
//验证码
session_start();
//随机4个字符，不含0和o；
$char="abcdefghigklmnpqrstuvwxyz123456789";
$char_len=strlen($char)-1;
for($i=0;$i<4;$i++){
	$code.=$char[rand(0,$char_len)];
	
	}
echo $code;
?>