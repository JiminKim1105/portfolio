<?php
     $num = $_REQUEST["num"];
     
     require("db_connect.php");
     $db->exec("delete from board where num=$num");
     
     header("Location:list.php");
     exit();
 ?>
