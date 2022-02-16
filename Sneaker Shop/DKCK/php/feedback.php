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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./javascript/feedback.js"></script>
	<script src="./javascript/cart.js"></script>
</head>
<body>
<?php  include 'header.php'; 
require_once 'action/loadfeedback.php';
    if(isset($_POST['guigopy'])){
        exit();
    }
    ?>
<div class="container-fluid">
	<div class="jumbotron title-feedback">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p>Chào bạn, cảm ơn bạn vì đã ghé thăm và mua hàng ở SneakerShop. Hãy cho chúng tôi biết trải nghiệm của bạn như thế nào. Những góp ý của bạn sẽ giúp chung tôi cải thiện tốt hơn về dịch vụ của mình, cảm ơn bạn.</p>
		</div>
            <form method="POST" action="feedback.php">
                <input type="text" name="hoten" placeholder="Họ Tên của bạn" class="content-feedback" required>
                <input type="text" name="sdt" placeholder="Số Điện Thoại" class="content-feedback" id="txtPhone" name="txtPhone" maxlength="10" required>
                <input type="email" name="email" placeholder="Email" class="content-feedback"  maxlength="30"required>
                <input type="file" name="anh" class="file" multiple>
                <textarea type="text" name="content" placeholder="Feedback của bạn khi sử dụng dịch vụ (tối đa 100 ký tự)" class="feedback"  maxlength="100" required></textarea>
                <button type="submit" name="guigopy" class="btn">Gửi góp ý</button>
            </form>
            <div class="buy-product">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p>Nếu bạn đã hài lòng khi trải nghiệm dịch vụ và sản phẩm của chúng tôi và muốn mua thêm sản phẩm khác thì hãy click vào đây -></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 button-buy-product" >
                <a class="button" href="product.html">Click Here!!!</a>
            </div>
        </div>
	</div>
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