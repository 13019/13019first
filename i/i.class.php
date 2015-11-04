<?php
include("../conn.php");
$user_id=$_GET["user_id"];
function check_user($user_id){//检验是否获取正确的ID
    $sql="select * from user where `user_id`='$user_id'";
    $query=mysql_query($sql);
    if(!$row=mysql_fetch_array($query)){
        echo"你的会员ID不存在";
        exit();
    }
}
check_user($user_id);
function list_user_thing($user_id){//用户事情列表
    $sql="select * from user_something where `user_id` = '$user_id'";
    $query= mysql_query($sql);
    while($row=mysql_fetch_array($query)){
        echo "<li>";
        echo "<a href="."index.php?user_id=".$row["user_id"]."&something_id=".$row["something_id"].">";
        echo "$row[user_thing_name]";
        echo "</a>";
        echo "</li>";
    }
}
function new_do($user_id){//用户最近做的事情列表
    $sql="select * from user_something where `user_id` ='$user_id'";
    $query=mysql_query($sql);
   // $row=mysql_fetch_array($query);
   // $result=count($row);
   // print_r($row);
    /*for($i=1;$i<=$result;$i++){
        if(strlen($row["do_text"])<100){
            $do_text=$row["do_text"];
        }else{
            $do_text=substr($row["do_text"],0,100)."……";
        }
        echo"<li>";
        echo"<span>"."[".$row[do_time]."]"."</span>"."<span>"."[".$row["user_thing_name"]."]"."</span>";
        echo"<a href=".">";
        echo "$do_text";
        echo "</a>";
        echo "</li>";
    }
    */
    while( $row=mysql_fetch_array($query)){
        echo"<li>";
        echo"<span>"."[".$row[do_time]."]"."</span>"."<span>"."[".$row["user_thing_name"]."]"."</span>";
        echo"<a href=".">";
        echo "$row[user_description]";
        echo "</a>";
        echo "</li>";
    }
}
?>