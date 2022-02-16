<?php 
session_start(); 
    var_dump($_SESSION['login_admin']);
    if(isset($_SESSION['login_admin'])){ 
          
       unset($_SESSION['login_admin']);
        echo '<script language="javascript"> window.location="/admin/login.php";</script>';
          
    } 
?> 