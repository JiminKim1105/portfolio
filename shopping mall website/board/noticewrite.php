<?php
    $title   = "";
    $writer  = "";
    $content = "";
    $action  = "insert.php";

    $num = $_REQUEST["num"] ?? 0;
    
    if ($num > 0) {
        require("db_connect.php");
        $query = $db->query("select * from notice where num=$num");

        if ($row = $query->fetch()) {    
            $writer  = $row["writer" ];
            $title   = $row["title"  ];
            $content = $row["content"];
            
            $action  = "update.php?num=$num";
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        table { width:680px; text-align:center; }
        th    { width:100px; background-color:purple; }
        input[type=text], textarea { width:100%; }
    </style>
</head>
<body>

<form method="post" action="<?=$action?>">
    <table>
        <tr>
            <th>제목</th>
            <td><input type="text" name="title" maxlength="80" value="<?=$title?>"></td>
        </tr>
        <tr>
            <th>작성자</th>
            <td><input type="text" name="writer" maxlength="20" value="<?=$writer?>"></td>
        </tr>
        <tr>
            <th>내용</th>
            <td><textarea name="content" rows="10"><?=$content?></textarea></td>
        </tr>
    </table>

    <br>
    <input type="submit" value="저장">
    <input type="button" value="취소" onclick="history.back()">
</form>

</body>
</html>

