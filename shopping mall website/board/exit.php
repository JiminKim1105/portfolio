<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    session_start();
	$id = $_SESSION["userId"];
    require("db_connect.php");
    $query = $db->exec("delete from member where id = '$id';");
	

?>
	
	<script>
		alert('탈퇴가 완료되었습니다.');
		window.close();
		
    </script>
</body>
</html>
