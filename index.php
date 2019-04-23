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

    function limit_text($text, $limit)
    {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }

    $result = mysqli_query($link, "select * from news");
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        echo "<tr><td align='center'>" . $row[1] . "</td> <td align='center'>" . limit_text($row[2], 10) . "<a href='readmore.php?s=$row[1]'>Read More..</a></td></tr>";
    }
    ?>
</table>
</body>
</html>
