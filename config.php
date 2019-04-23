<?php
$host = "localhost";
$user = "akapranova_lab4";
$pass = "rootroot";
$database = "akapranova_lab4";
$link = mysqli_connect($host, $user, $pass);
if (!$link)
    die("connection failed");
$db = mysqli_select_db($link, $database);
if (!$db)
    die("invalid database");