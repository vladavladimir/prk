<?php

 $pdo = new PDO("mysql:host=localhost;dbname=prk-1u", 'root', '');
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
 $pdo->exec("set names utf8");

if($_POST['lang']=='en'){
  $data = $pdo->prepare('SELECT * FROM prken WHERE id = :id  LIMIT 1');
  $data->execute(array('id' => $_REQUEST['id']));
  $result = $data->fetchAll();

  if ( count($result) > 0 ) {
  		$view = $result[0]['view'];
     		$view = $view + 1;
     try {
         $data2 = $pdo->prepare('UPDATE prken SET
             view = :view    
             WHERE id = :id
         ');
         $data2->execute(
             array(
                 'view' => $view,
                 'id' => $_REQUEST['id'],
             )
         );
     } catch(PDOException $e) { $errors[] = $e->getMessage();}
     if(empty($errors)) {
     	echo $view;
     }
  } else {
    echo 'Error 1';
  }
}

if($_POST['lang']=='fr'){
  $data = $pdo->prepare('SELECT * FROM prkfr WHERE id = :id  LIMIT 1');
  $data->execute(array('id' => $_REQUEST['id']));
  $result = $data->fetchAll();

  if ( count($result) > 0 ) {
      $view = $result[0]['view'];
        $view = $view + 1;
     try {
         $data2 = $pdo->prepare('UPDATE prkfr SET
             view = :view    
             WHERE id = :id
         ');
         $data2->execute(
             array(
                 'view' => $view,
                 'id' => $_REQUEST['id'],
             )
         );
     } catch(PDOException $e) { $errors[] = $e->getMessage();}
     if(empty($errors)) {
      echo $view;
     }
  } else {
    echo 'Error 1';
  }
}

if($_POST['lang']=='it'){
  $data = $pdo->prepare('SELECT * FROM prkit WHERE id = :id  LIMIT 1');
  $data->execute(array('id' => $_REQUEST['id']));
  $result = $data->fetchAll();

  if ( count($result) > 0 ) {
      $view = $result[0]['view'];
        $view = $view + 1;
     try {
         $data2 = $pdo->prepare('UPDATE prkit SET
             view = :view    
             WHERE id = :id
         ');
         $data2->execute(
             array(
                 'view' => $view,
                 'id' => $_REQUEST['id'],
             )
         );
     } catch(PDOException $e) { $errors[] = $e->getMessage();}
     if(empty($errors)) {
      echo $view;
     }
  } else {
    echo 'Error 1';
  }
}

if($_POST['lang']=='ru'){
  $data = $pdo->prepare('SELECT * FROM prkru WHERE id = :id  LIMIT 1');
  $data->execute(array('id' => $_REQUEST['id']));
  $result = $data->fetchAll();

  if ( count($result) > 0 ) {
      $view = $result[0]['view'];
        $view = $view + 1;
     try {
         $data2 = $pdo->prepare('UPDATE prkru SET
             view = :view    
             WHERE id = :id
         ');
         $data2->execute(
             array(
                 'view' => $view,
                 'id' => $_REQUEST['id'],
             )
         );
     } catch(PDOException $e) { $errors[] = $e->getMessage();}
     if(empty($errors)) {
      echo $view;
     }
  } else {
    echo 'Error 1';
  }
}

if($_POST['lang']=='es'){
  $data = $pdo->prepare('SELECT * FROM prkes WHERE id = :id  LIMIT 1');
  $data->execute(array('id' => $_REQUEST['id']));
  $result = $data->fetchAll();

  if ( count($result) > 0 ) {
      $view = $result[0]['view'];
        $view = $view + 1;
     try {
         $data2 = $pdo->prepare('UPDATE prkes SET
             view = :view    
             WHERE id = :id
         ');
         $data2->execute(
             array(
                 'view' => $view,
                 'id' => $_REQUEST['id'],
             )
         );
     } catch(PDOException $e) { $errors[] = $e->getMessage();}
     if(empty($errors)) {
      echo $view;
     }
  } else {
    echo 'Error 1';
  }
}

if($_POST['lang']=='ger'){
  $data = $pdo->prepare('SELECT * FROM prkger WHERE id = :id  LIMIT 1');
  $data->execute(array('id' => $_REQUEST['id']));
  $result = $data->fetchAll();

  if ( count($result) > 0 ) {
      $view = $result[0]['view'];
        $view = $view + 1;
     try {
         $data2 = $pdo->prepare('UPDATE prkger SET
             view = :view    
             WHERE id = :id
         ');
         $data2->execute(
             array(
                 'view' => $view,
                 'id' => $_REQUEST['id'],
             )
         );
     } catch(PDOException $e) { $errors[] = $e->getMessage();}
     if(empty($errors)) {
      echo $view;
     }
  } else {
    echo 'Error 1';
  }
}

