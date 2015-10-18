<?php
include_once("../login_in.php");

function list_user_thing($user_id){
  $sql="select * from user_something where `user_id` = '$user_id'";
  $query= mysql_query($sql);
 while($row=mysql_fetch_array($query)){
?>
<div class="user_thing">
    <div class="user_thing_list">
        <a href="index.php?user_id=<?php echo  $row[user_id];?>?user_thing=<?php echo  $row[something_id];?>">
            <?php echo $row[user_thing_name];?>
        </a>
    </div>
</div>
<?php

 }
}
list_user_thing($_SESSION["user_id"]);
?>
