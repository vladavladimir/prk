<?php

$servername ="127.0.0.1";
$dbusername = "root";
$dbpaswword = "";
$dbname = "prk-admin";

$pdo=mysqli_connect($servername,$dbusername,$dbpaswword,$dbname);

if (!$pdo){
    die("Connection faild:".mysqli_connect_error());
}