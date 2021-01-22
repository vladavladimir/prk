<?php

$pdo = new PDO("mysql:host=localhost;dbname=prk-1u", 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$pdo->exec("set names utf8");




if($_POST['lang']=='en') {
	$stmt = $pdo->prepare("SELECT * FROM `prken` WHERE `title` LIKE ? OR `number_serie` LIKE ?");
	$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
	$results = $stmt->fetchAll();
	if (isset($_POST['ajax'])) { echo json_encode($results); }
} 

if($_POST['lang']=='fr') {
	$stmt = $pdo->prepare("SELECT * FROM `prkfr` WHERE `title` LIKE ? OR `number_serie` LIKE ?");
	$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
	$results = $stmt->fetchAll();
	if (isset($_POST['ajax'])) { echo json_encode($results); }
} 

if($_POST['lang']=='ru') {
	$stmt = $pdo->prepare("SELECT * FROM `prkru` WHERE `title` LIKE ? OR `number_serie` LIKE ?");
	$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
	$results = $stmt->fetchAll();
	if (isset($_POST['ajax'])) { echo json_encode($results); }
} 

if($_POST['lang']=='es') {
	$stmt = $pdo->prepare("SELECT * FROM `prkes` WHERE `title` LIKE ? OR `number_serie` LIKE ?");
	$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
	$results = $stmt->fetchAll();
	if (isset($_POST['ajax'])) { echo json_encode($results); }
} 

if($_POST['lang']=='it') {
	$stmt = $pdo->prepare("SELECT * FROM `prkit` WHERE `title` LIKE ? OR `number_serie` LIKE ?");
	$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
	$results = $stmt->fetchAll();
	if (isset($_POST['ajax'])) { echo json_encode($results); }
} 	

if($_POST['lang']=='ger') {
	$stmt = $pdo->prepare("SELECT * FROM `prkger` WHERE `title` LIKE ? OR `number_serie` LIKE ?");
	$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
	$results = $stmt->fetchAll();
	if (isset($_POST['ajax'])) { echo json_encode($results); }
} 