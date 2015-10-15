<?php
include_once("../login_in.php");

function list_user_thing($user_id){
  $sql="select * from user_something where `user_id` = '$user_id'";
  $query= mysql_query($sql);

 while($row=mysql_fetch_array($query)){
   echo $row[user_thing_name];
 }
}

list_user_thing($_SESSION["user_id"]);
?>