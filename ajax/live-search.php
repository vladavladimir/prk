<?php

 $pdo = new PDO("mysql:host=localhost;dbname=prk-1u", 'root', '');
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
           $pdo->exec("set names utf8");
    

// $search = $_POST["name"];


if (isset($_POST["name"]) && $_POST["name"]!='') {

$table = "prk".$_POST['lang'];
$sql_search = 'title LIKE "%'.$_POST["name"].'%" OR number_serie LIKE "%'.$_POST["name"].'%"';


$query = '
   SELECT *
   FROM
       '.$table.'
       WHERE
       '.$sql_search.' LIMIT 5
';


$data = $pdo->prepare($query);
$data->execute();
$result = $data->fetchAll();

// var_dump($result);

foreach ($result as $row) {
	echo "<li onclick='useThis($(this)); return false;'>" . $row["title"] ." , <span class='serieNum'>". $row["number_serie"] . "</span></li>";
}

// $players = mysqli_query($pdo, "SELECT title,number_serie FROM prken WHERE title LIKE '%{$search}%' OR number_serie LIKE '%{$search}%' LIMIT 5 ORDER BY id ASC");
// while($player = mysqli_fetch_array($players)) {
//     echo "<div>" . $players["title"] ." , ". $players["number_serie"] . "</div>";
// }

}   else {
  
}


