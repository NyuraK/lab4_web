<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h3>Add news</h3>
<form method="post">
    Title: <input type="text" name="title"><br>
    Text: <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <input type="submit">
</form>
<?php
$title = $_POST["title"];
$body = $_POST["text"];
if ($title != '' && $body != '') {
    $sql = "INSERT INTO news (title, body) VALUES ('$title', '$body')";
}
if (mysqli_query($link, $sql)) {
    echo "Records inserted successfully.";
}
?>
</body>
</html>