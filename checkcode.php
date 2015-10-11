<?php
//验证码
session_start();
//随机4个字符，不含0和o；
$char="abcdefghigklmnpqrstuvwxyz123456789";
$char_len=strlen($char)-1;
for($i=0;$i<4;$i++){
	$code.=$char[rand(0,$char_len)];
	
	}
//创建图片
$im=@imagecreatetruecolor(60,25)or die("Cannot Initialize new GD image stream");//创建图片
$bg_color=imagecolorallocate($im,rand(0,10),rand(0,10),rand(0,10));//背景颜色
$text_color=imagecolorallocate($im,rand(150,255),rand(150,255),rand(150,255));//文字颜色

for($i=0;$i<rand(10,30);$i++){//添加干扰线条
	
   $text_color2=imagecolorallocate($im,rand(100,200),rand(100,200),rand(100,200));
   imageline($im,rand(0,30),rand(0,10),rand(35,60),rand(15,25),$text_color2);
}
for($i=0;$i<rand(100,300);$i++){//添加干扰像素
	 $text_color3=imagecolorallocate($im,rand(100,200),rand(100,200),rand(100,200));
	 imagesetpixel($im,rand(0,60),rand(0,25),$text_color3);
	}
imagestring($im,6,0,0,$code,$text_color);//将文字写在图片上
$_SESSION["cheeckcode"]=$code;//写入session
header("Content-type: image/png");
imagepng($im);
imagedestroy();//释放内存
?>