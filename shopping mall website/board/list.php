<?
session_start();
?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  <style>
    *{
      background-color: white;
 
    }
    
    header {
      width: 100%;
      height: 100px;
    }
	
	table     { width:1000px; text-align:center; margin-right : 20%; margin-left : 20%}
	th        { background-color:purple; color:white; }
	
	

    nav {
      width: 100%;
      height: 23px;
      margin-right: 20%;
      background-color: white;
      color: black;
    }
    nav a{
      background-color:white;
      color: black;
      text-decoration: none;
    }
	
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
	
	.product-list{
		width: 735px;
		margin-left: auto;
		margin-right: auto;
	}
	.products h2{
		font-size: 24px;
		color:black;
		margin-top:60px;
		margin-bottom: 60px;
		text-align: center;
	}

	.product{
		display: block;
		width: 225px;
		text-align: center;
		text-decoration:none;
		color: black;
		float:left;
		margin-left: 10px;
		margin-right: 10px;
		margin-bottom: 30px;
	}

	.product-name{
		margin-top: 20px;
		margin-bottom: 4px;
	}


  </style>
  </head>
  <body>
    <header align=center>
      <h1>
        <a href="list.php">mall</a>
      </h1>
    </header>

    <nav align=center>
		<a href="introduce.php">쇼핑몰 소개 &nbsp; | &nbsp;</a>
		<a href="product.php">상품 &nbsp; | &nbsp;</a>
		<a href="notice.php">공지사항 &nbsp; | &nbsp;</a>
		<a href="review.php">후기</a>
	
    </nav>
	<br><br><br><br>
	
	<div align = right>
	<?php
     if (empty($_SESSION["userId"])) {
 ?>        
         <form action="login.php" method="post">
             아이디:   <input type="text"     name="id"><br>
             비밀번호: <input type="password" name="pw"><br><br>
             <input type="submit" value="로그인">
             <input type="button" value="회원 가입" 
                    onclick="window.open('member_join_form.php', 'popup', 'width=500, height=200')">
         </form>
 <?php
     } else {
 ?>
         <form action="logout.php" method="post">
             <?=$_SESSION["userName"]?>님 로그인 
             <input type="submit" value="로그아웃">
             <input type="button" value="회원정보 수정" 
                    onclick="window.open('member_update_form.php', 'popup', 'width=500, height=200')">
			<a href="list.php"><input type="button" value="홈으로">
 <?php        
     }
 ?>
	</div>

	</body>
</html>
	<table>
	<div class="hero-header"></div>

	<h2 align = center>상품</h2>

        <div class="product-list">
            <a href="order.php" class="product">
                <img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fshopping-phinf.pstatic.net%2Fmain_8115271%2F81152712935.jpg&type=f372_372" alt = "절대경로"width="225">
                <div class="product-name">
                    clothes
                </div>
                <div class="product-price">
                    49,000
                </div>
            </a>

            
            <a href="order.php" class="product">
                <img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fshopping-phinf.pstatic.net%2Fmain_8115271%2F81152712935.jpg&type=f372_372" alt = "절대경로" height="225px">
                <div class="product-name">
                    clothes
                </div>
                <div class="product-price">
                    49,000
                </div>
            </a>
			
			<div class="product-list">
            <a href="order.php" class="product">
                <img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fshopping-phinf.pstatic.net%2Fmain_8115271%2F81152712935.jpg&type=f372_372" alt = "절대경로"width="225">
                <div class="product-name">
                    clothes
                </div>
                <div class="product-price">
                    49,000
                </div>
            </a>

            <a href="order.php" class="product">
                <img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fshopping-phinf.pstatic.net%2Fmain_8115271%2F81152712935.jpg&type=f372_372" alt = "절대경로" height="225px">
                <div class="product-name">
                    clothes
                </div>
                <div class="product-price">
                    49,000
                </div>
            </a>

		    <a href="order.php" class="product">
                <img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fshopping-phinf.pstatic.net%2Fmain_8115271%2F81152712935.jpg&type=f372_372" alt = "절대경로"width="225" height="225px">
                <div class="product-name">
                    clothes
                </div>
                <div class="product-price">
                    49,000
                </div>
            </a>
			
			<a href="order.php" class="product">
                <img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fshopping-phinf.pstatic.net%2Fmain_8115271%2F81152712935.jpg&type=f372_372" alt = "절대경로"width="225" height="225px">
                <div class="product-name">
                    clothes
                </div>
                <div class="product-price">
                    49,000
                </div>
            </a>

	
	<h2 align = center>후기</h2>
     <tr>
         <th class="num"    >번호    </th>
         <th class="title"  >제목    </th>
         <th class="writer" >작성자  </th>
         <th class="regtime">작성일시</th>
         <th>                조회수  </th>
     </tr>
	 
 <?php
     require("db_connect.php");
     $query = $db->query("select * from board order by num desc");
     while ($row = $query->fetch()) {
 ?>            
     <tr>
         <td><?=$row["num"]?></td>
         <td class="left"><a href="view.php?num=<?=$row["num"]?>"><?=$row["title"]?></a></td>
         <td><?=$row["writer"]?></td>
         <td><?=$row["regtime"]?></td>
         <td><?=$row["hits"]?></td>
     </tr>
 <?php            
     }
 ?>
	</table>

	<br>
	<butt>
	<input type="button" value="글쓰기" onclick="location.href='write.php'">
	</butt>
 
	<table>
	<h2 align = center>공지사항</h2>

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

 <br><br><br><br>
 
 </body>
 </html>
