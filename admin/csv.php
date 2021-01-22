<?php

$servername ="127.0.0.1";
$dbusername = "root";
$dbpaswword = "";
$dbname = "prk-1u";

$pdo=mysqli_connect($servername,$dbusername,$dbpaswword,$dbname);

if (!$pdo){
    die("Connection faild:".mysqli_connect_error());
}


if ($_POST['lang']=='french') {

    echo "aaa";
    
    if (isset($_POST['sub'])) {
        $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($filename,"r");
            while (($getData = fgetcsv($file,10000,",")) !== FALSE) {
                $sql = "INSERT INTO prkfr (id,number_serie,title,description,origin,view) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                $result = mysqli_query($pdo, $sql);
                if (!isset($result)) {
                    echo "CSV didnt load";
                } else {
                    echo "CSV loaded";
                }
            }
            fclose($file);   
        }
    }
}
if ($_POST['lang']=='germany') {
    if (isset($_POST['sub'])) {
        $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($filename,"r");
            while (($getData = fgetcsv($file,10000,",")) !== FALSE) {
                $sql = "INSERT INTO prkger (id,number_serie,title,description,origin,view) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                $result = mysqli_query($pdo, $sql);
                if (!isset($result)) {
                    echo "CSV didnt load";
                } else {
                    echo "CSV loaded";
                }
            }
            fclose($file);   
        }
    }
}
if ($_POST['lang']=='rusian') {
    if (isset($_POST['sub'])) {
        $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($filename,"r");
            while (($getData = fgetcsv($file,10000,",")) !== FALSE) {
                $sql = "INSERT INTO prkru (id,number_serie,title,description,origin,view) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                $result = mysqli_query($pdo, $sql);
                if (!isset($result)) {
                    echo "CSV didnt load";
                } else {
                    echo "CSV loaded";
                }
            }
            fclose($file);   
        }
    }
}
if ($_POST['lang']=='italian') {
    if (isset($_POST['sub'])) {
        $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($filename,"r");
            while (($getData = fgetcsv($file,10000,",")) !== FALSE) {
                $sql = "INSERT INTO prkit (id,number_serie,title,description,origin,view) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                $result = mysqli_query($pdo, $sql);
                if (!isset($result)) {
                    echo "CSV didnt load";
                } else {
                    echo "CSV loaded";
                }
            }
            fclose($file);   
        }
    }
}
if ($_POST['lang']=='spanish') {
    if (isset($_POST['sub'])) {
        $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($filename,"r");
            while (($getData = fgetcsv($file,10000,",")) !== FALSE) {
                $sql = "INSERT INTO prkes (id,number_serie,title,description,origin,view) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                $result = mysqli_query($pdo, $sql);
                if (!isset($result)) {
                    echo "CSV didnt load";
                } else {
                    echo "CSV loaded";
                }
            }
            fclose($file);   
        }
    }
}

if ($_POST['lang']=='english') {
    if (isset($_POST['sub'])) {
        $filename = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($filename,"r");
            while (($getData = fgetcsv($file,10000,",")) !== FALSE) {
                $sql = "INSERT INTO prken (id,number_serie,title,description,origin,view) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                $result = mysqli_query($pdo, $sql);
                if (!isset($result)) {
                    echo "CSV didnt load";
                } else {
                    echo "CSV loaded";
                }
            }
            fclose($file);   
        }
    }
}

    header("Refresh:3; url=index.php");

                
