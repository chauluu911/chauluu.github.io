<?php
ob_start(); 
ob_clean();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sneaker Shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/account.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./javascript/account.js"></script>
    <script src="./javascript/cart.js"></script>
</head>
<body>
<?php

include 'header.php';
require_once 'action/register.php';
    if(isset($_POST['dangky'])){
        exit();
    }
require_once 'action/login.php';
    if(isset($_POST['dangnhap'])){
        exit();
    }
?>
    <!-- Navigation -->
<!--account-->
<div class="account-page">
    <div class="container">
        <div class="row">
    

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()" class="login-reg" >Đăng nhập</span>
                        <span onclick="register()" class="login-reg">Đăng ký</span>
                        <hr id="Indicator">
                    </div>

                    <form id="LoginForm" method="POST" action="account.php">
                        <input type="text" id="username" name="username" placeholder="Username" class="description" required>
                        <input type="password" id="password" name="password" placeholder="Password" class="description" required>
                        <button type="submit" name="dangnhap" class="btn">Đăng nhập</button>
                        <a href="" class="Forgot-password">Quên mật khẩu</a>
   
                    </form>

                    <form id="RegForm" method="post" action="account.php">
                        <input type="text" name="username" placeholder="Username" class="description" required>
                        <input type="password" name="password" placeholder="Password" class="description" required>
                        <input type="email" name="email" placeholder="Email" class="description" required>
                        <input type="text" name="phone" placeholder="Phone" class="description" required>
                        <button type="submit" name="dangky" class="btn">Đăng ký</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div>
  <a href="#" title="Về Đầu Trang"><img src="./images/Icon/backtotop.png" width="50px" class="back-to-top"/></a>
</div>
<!--contact and backtotop-->
<div>
    <a href="#" title="Về Đầu Trang"><img src="./image/icon/backtotop.png" width="50px" class="back-to-top"/></a>
  </div>
<div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact us</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>	
</body>
</html>
