<?php
include("../conn.php");
$user_id=$_GET["user_id"];
function check_user($user_id){//�����Ƿ��ȡ��ȷ��ID
    $sql="select * from user where `user_id`='$user_id'";
$query=mysql_query($sql);
    if(!$row=mysql_fetch_array($query)){
        echo"��Ļ�ԱID������";
        exit();
    }
}
check_user($user_id);
function list_user_thing($user_id){//�û������б�
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
function new_do($user_id){//�û�������������б�
    $sql="select * from user_do where `user_id` = '$user_id'";
    $query=mysql_query($sql);
    $row=mysql_fetch_array($query);
    for($i=1;$i<=10;$i++){
        if(strlen($row["do_text"])<100){
            $do_text=$row["do_text"];
        }else{
            $do_text=substr($row["do_text"],0,100)."����";
        }
        echo"<li>";
        echo"<span>".$row["do_time"]."</span>"."<span>".$row["user_thing_name"]."</span>";
        echo"<a href=".">";
        echo "$do_text";
        echo "</a>";
        echo "</li>";
    }
}
?>