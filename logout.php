<?php
include("path.php");
session_start();     //it is used for unset the information in the sesion 'logout'
        
        unset($_SESSION['id']); 
        unset($_SESSION['username']);
        unset($_SESSION['admin']);
        unset($_SESSION['message']); 
        unset( $_SESSION['type']);

        session_destroy();      //it will destroy our session

        header('location: ' . BASE_URL . '/index.php');