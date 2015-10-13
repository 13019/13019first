<?php
session_start();
include_once("conn.php");
/**
 * @param $user_id
 * @param $user_lock
 */
function user_login_in($user_id,$user_lock){
       $sql = "select * from user where `user_id` = '$user_id' ";
       $query=mysql_query($sql);
       $row=mysql_fetch_array($query);
       $us=is_array($row);
    //$ppps = $us ? $user_lock == md5($row[user_id].$row[user_name].ALL_PS):false;
    if($us){
          $user_lock = md5($row[user_id].$row[user_name].ALL_PS);
		}else{
			$user_lock=null;
			}

    //echo $user_lock;
   if($user_lock){
       return $row;
   }else{
       echo"你无权限";
       exit();
   }

}
user_login_in($_SESSION[user_id],$_SESSION[user_lock]);
//$sql= "select * from user where `user_id` = 1";
////$query=mysql_query($sql);
//$row=mysql_fetch_array($query);
//print_r($row);
?>
html1111
