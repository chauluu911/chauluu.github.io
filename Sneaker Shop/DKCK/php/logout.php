<?php 
session_start(); 
    var_dump($_SESSION['login_user']);
    if(isset($_SESSION['login_user'])){ 
          
       unset($_SESSION['login_user']);
        echo '<script language="javascript"> window.location="index.php";</script>';
          
    } 
?> 