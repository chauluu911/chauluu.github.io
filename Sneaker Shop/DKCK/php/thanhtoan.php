
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
<?php  include 'header.php'; ?>
<?php
include_once('./action/database.php');
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM product WHERE id IN ("; 
            
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
            
        $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 

        $carts=mysqli_query($connect, $sql); 
    }
    require_once './action/order.php';
    if(isset($_POST['themsanpham'])){
        exit();
    }
 ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <p>Đơn hàng của bạn</p>
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">số lượng</th>
                    <th scope="col">Giá</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    if (isset($carts)) {
                        $totalprice = 0;
                        while ($row =  mysqli_fetch_array($carts))
                        {
                            $subtotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price'] ?? 0; 
                            $totalprice+=$subtotal; 
                    ?>
                    <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><input type="number" min="0" name="item[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" /></td>
                    <td><?php echo number_format($row['price']) ?></td>
                    </tr>
                    <?php } } else { echo "Giỏ hàng trống";}?>
                </tbody>
                </table>
            <div class="cart-total">
                <strong class="cart-total-title">Tổng Cộng:</strong>
                <span class="cart-total-price"><?php if (isset($totalprice)) {echo number_format($totalprice);} else {echo 0;} ?> VNĐ</span>
            </div>
        </div>
    </div>
	<div class="jumbotron title-feedback">
		<div class="col-md-6">
			<p>Nhập thông tin thanh toán.</p>
		</div>
            <form action='thanhtoan.php' method="post">
                <input type="text" placeholder="Họ Tên của bạn" name="name" class="form-control" required>
                <input type="text" placeholder="Số Điện Thoại" name="phone" class="form-control" id="txtPhone" name="txtPhone" maxlength="10" required>
                <input type="text" placeholder="địa chỉ" class="form-control" name="address"  maxlength="30"required>
                <label for="">Hình thức thanh toán</label>
                <input type="radio" name="payment" checked value="COD"> COD
                <input type="radio" name="payment" value="Chuyển khoản"> Chuyển khoản
                <textarea name="note" id="" cols="20" rows="5" class="form-control"></textarea>
                <input type="submit" name="order" value="Đặt hàng" class="btn btn-primary">
            </form>
            <div class="buy-product">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p>Nếu bạn đã hài lòng khi trải nghiệm dịch vụ và sản phẩm của chúng tôi và muốn mua thêm sản phẩm khác thì hãy click vào đây -></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 button-buy-product" >
                <a class="button" href="/index.php">Click Here!!!</a>
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