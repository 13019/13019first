<?php
session_start();
include("conn.php");
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
           exit();
       }else{
           $_SESSION[login_time]=mktime();
           return $row;
       }
   }else{
       header("Location:../login.html");
      // echo "你无权限操作";
       exit();
      // return $user_lock;
   }

}


?>
