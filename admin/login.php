<?php

if (isset($_POST['submit'])){

    require "../admin/db.php";

    $user = $_POST['username'];
    $password = $_POST['password'];
    if (empty($user) || empty($password)){ // msg if one or both fields are empty
        header("Location: ../admin/index.php?error=emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM admin WHERE username=?;";
        $stmt = mysqli_stmt_init($pdo);

        if (!mysqli_stmt_prepare($stmt,$sql)){ //check if sql is connected
            header("Location: ../admin/index.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$user); //binding username to $stmt
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)){
               $pwdCheck = password_verify($password,$row['password']);//check pwd and ...
               if ($pwdCheck == false){ // wrong get msg
                   header("Location: ../admin/index.php?error=wrongpwd");
                   exit();
               }
               elseif ($pwdCheck == true){ // true msg procede
                   session_start(); //start session
                   $_SESSION['uid'] = $row['id']; // set session uid to id
                   $_SESSION['username'] = $row['username']; // set session username o username
                   header("Location: ../admin/index.php?login=succes");
                   exit();
               }
            }else{
                header("Location: ../admin/index.php?error=nouser");
                exit();
            }
        }
    }
}
    else{
        header("Location: ../admin/index.php?error");
        exit();
    }