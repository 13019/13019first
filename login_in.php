<?php
session_start();
include_once("conn.php");
/**
 * @param $user_id
 * @param $user_lock
 */
function user_login_in($user_id,$user_lock,$login_time){
       $sql = "select * from user where `user_id` = '$user_id' ";
       $query=mysql_query($sql);
       $row=mysql_fetch_array($query);
       $us=is_array($row);
    $user_lock = $us ? $user_lock == md5($row[user_id].$row[user_name].ALL_PS):false;
   if($user_lock){
       $n_time=mktime();
       if($n_time-$login_time>'360'){
           echo"登陆超时";
           session_destroy();
       }else{
           $_SESSION[login_time]=mktime();
           return $user_lock;
       }
      // return $row;
   }else{
       return $user_lock;
   }
}
user_login_in($_SESSION[user_id],$_SESSION[user_lock],$_SESSION[login_time]);

?>
