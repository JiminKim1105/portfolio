<?session_start();?>
 
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
	
	butt{
		margin-left : 20%;
	}
	
	.product-list{
    width: 735px;
    margin-left: auto;
    margin-right: auto;
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
	 <div class="product-list">
	 <a href="order.php" class="product">
                <img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fshopping-phinf.pstatic.net%2Fmain_8115271%2F81152712935.jpg&type=f372_372" alt = "절대경로"width="300">
				
				<button>  주문하기 </button>
	</div>
	</body>
 </html>