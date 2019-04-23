<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="default.css" type="text/css"/>
    <title></title>
</head>
<body>
<?php

include_once './header.php';
include_once './config.php';

?>
<h2>News</h2>
<table border='1' width='100%'>
    <?php

    $result = mysqli_query($link, "select * from news");
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "<tr><td align='center'>" . $row[1] . "</td> <td align='center'>" . $row[2] . "</td></tr>";
    }
    ?>
</table>
</body>
</html>
