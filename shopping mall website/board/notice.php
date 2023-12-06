<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <style>
	header {
      width: 100%;
      height: 100px;
    }
	table     { width:1000px; text-align:center; margin-right : 20%; margin-left : 20%}
	th        { background-color:purple; color:white; }
	  .num      { width: 80px; }
        .title    { width:230px; }
        .writer   { width:100px; }
        .regtime  { width:180px; }
                
		a         {	text-decoration:none; }	
        a:link    { color:blue; }
        a:visited { color:gray; }
        a:hover   { color:red;  }
		
	.left     { text-align:left; }
	butt{
		margin-left : 20%;
	}
	
    </style>
  </head>
  <body>
   <header align=center>
      <h1>
        <a href="list.php">mall</a>
      </h1>
    </header>
  <table>
		<h1 align = center>공지사항</h1>

 
     <tr>
         <th class="num"    >번호    </th>
         <th class="title"  >제목    </th>
         <th class="writer" >작성자  </th>
         <th class="regtime">작성일시</th>
         <th>                조회수  </th>
     </tr>
 <?php
     require("db_connect.php");
     $query = $db->query("select * from notice order by num desc");
     while ($row = $query->fetch()) {
 ?>            
     <tr>
         <td><?=$row["num"]?></td>
         <td class="left"><a href="vieww.php?num=<?=$row["num"]?>"><?=$row["title"]?></a></td>
         <td><?=$row["writer"]?></td>
         <td><?=$row["regtime"]?></td>
         <td><?=$row["hits"]?></td>
     </tr>
 <?php            
     }
 ?>
 </table>
 <br>
 
 </body>
 </html>