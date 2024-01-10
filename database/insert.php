<?php

    function insertUser($username,$email,$password){
        include("connect.php");
        $sqlState =$pdo->prepare("INSERT INTO user (username, email, password) VALUES (?,?,?)");
        $sqlState->execute([$username,$email,$password]);
        header("location: view/log_in.php");
    }
    function checkUser($email,$password){
        include("connect.php");
        $sqlState = $pdo->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $sqlState->execute([$email,$password]);
        if($sqlState->rowCount() >= 1){
            session_start();
            $_SESSION['user'] = $sqlState->fetch();
            header("Location: ../view/home.php");
        }
        
    }
