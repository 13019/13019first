<?php
/**
 * Created by PhpStorm.
 * User: willc
 * Date: 2015/11/7
 * Time: 11:33
 */

$user_id=$_SESSION[user_id];
function something_chang($user_id,$user_lock){
  $sql="select * from `user_something` where user_id='$user_id'";
    $result=mysql_query($sql);
   // $row=mysql_fetch_array($result);
  $user_lock=$_SESSION[user_lock];
  if($user_lock){
    while ($row = mysql_fetch_array($result)) {
      echo "<li>";
      echo $row[user_thing_name];
      echo "<spam>";
      echo "<a href=" . "something_chang.php?user_id=".$user_id."&something_id=".$row[something_id] .">";
      echo "修改";
      echo "</a>";
      echo "</spam>";

      echo "</li>";
    };
  }else{
    echo"权限不足";
  }
           }