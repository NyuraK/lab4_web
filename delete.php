<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>Delete news</h3>
<table id="news-list" border='1' width='100%'>
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Text</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>

    <?php

    function limit_text($text, $limit)
    {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }?>

    <?php $result = mysqli_query($link, "select * from news");
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) :?>

    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo limit_text($row[2], 3); ?></td>
        <td>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
                <input type="submit" name="submit" value="Delete">
            </form>
        </td>
    </tr>

    <?php endwhile;
    $id = $_POST['id'];
    $query = "DELETE FROM news WHERE id = $id";
    mysqli_query($link, $query);
    ?>
</table>
</body>
</html>