<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table width="100%" border="1">
    <?php
    include_once './config.php';
    $result= mysqli_query($link,"select * from news");
    while($row= mysqli_fetch_array($result,MYSQLI_NUM))
    {
        echo "<tr><td align='center'>".$row[2]."</td></tr>";
    }
    ?>
</table>
</body>
</html>