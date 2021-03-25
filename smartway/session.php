<?php

    session_start();
  
    if($_SESSION['isLoggedIn'] == false){
        echo 'Você não está logado';
        header('Location: login.php');
    }