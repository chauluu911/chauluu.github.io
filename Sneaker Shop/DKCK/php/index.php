<?php 
include 'header.php';
$adidas = $connect->query("SELECT * FROM product where trademark = 'Adidas' ORDER by id");
$nikes = $connect->query("SELECT * FROM product where trademark = 'Nike' ORDER by id");
$converse = $connect->query("SELECT * FROM product where trademark = 'Converse' ORDER by id");
//add to cart
if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
    $id=intval($_GET['id']);
      
    if(isset($_SESSION['cart'][$id])){ 
          
        $_SESSION['cart'][$id]['quantity']++;
        echo '<script language="javascript">alert("Đã thêm vào giỏ hàng"); window.location.href.split("?")[0];</script>';
          
    }else{ 
          
        $sql_s="SELECT * FROM product
            WHERE id={$id}"; 
        $query_s=mysqli_query($connect, $sql_s); 
        if(mysqli_num_rows($query_s)!=0){ 
            $row_s=mysqli_fetch_array($query_s); 
              
            $_SESSION['cart'][$row_s['id']]=array( 
                "quantity" => 1,
                "name"=>$row_s['name'] ,
                "price" => $row_s['price'] 
            ); 
            echo '<script language="javascript">alert("Đã thêm vào giỏ hàng"); window.location="index.php";</script>';
        } 
    } 
      
} 
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
    <script src="./javascript/cart.js"></script>
    </head>
    <body>
    
<!-- Carousel -->
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="1500">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>	
        <li data-target="#slides" data-slide-to="3"></li>	
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="./image/bg_sale.png">
		</div>
		<div class="carousel-item">
			<img src="./image/bg_shop1.jpg">
		</div>
		<div class="carousel-item">
			<img src="./image/bg_shop2.jpg">
		</div>
        <div class="carousel-item">
			<img src="./image/bg_shop3.jpg">
		</div>
	</div>
</div>
<!-- jumbotron -->
<div class="container-fluid">
	<div class="jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p>Sale off cuối năm, hãy nhanh tay sắm cho mình một đôi giày như ý!!!!!</p>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a class="button" href="product.php">Mua Ngay!</a>
        </div>
		<!--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<a href="product.html">
				<button type="button" class="btn btn-outline-secondary" style="color: black; font-size: 30px;"><b>Mua ngay</b></button>
			</a>
		</div>-->
	</div>
</div>
<!--product-->
<!-- //show message -->
<?php 
    if(isset($message)){ 
        echo "<h2>$message</h2>"; 
    } 
?> 
<div class="container-fluid padding">
	<div class="row text-center padding">
        <div class = "col-sm-12">
            <h2>Adidas</h2>
        </div>
        <?php 
            while ($row =  $adidas->fetch_array())
            {
        ?>
		<div class="col-xs-12 col-sm-6 col-md-4 ">
                <img src="./admin/photo/<?php echo $row['image']; ?>">
                <h4><?php echo $row['name']; ?></h4>
            <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
            </div>
                <p class="cost"><span style="font-size: 20px;color:rgb(75, 74, 74);"><del>2.760.000 ₫</del></span> <?php echo number_format($row['price']) . 'VNĐ'; ?></p>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" id="buy2">
                    <a href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>">
                        <button type="button" class="btn btn-outline-secondary" style="color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                    </a>
                </div>
        </div>
        <?php } ?>
        
        <div class = "col-sm-12">
            <h2>Nike</h2>
        </div>
        <?php 
            while ($row =  $nikes->fetch_array())
            {
        ?>
		<div class="col-xs-12 col-sm-6 col-md-4 ">
                <img src="./admin/photo/<?php echo $row['image']; ?>">
                <h4><?php echo $row['name']; ?></h4>
            <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
            </div>
                <p class="cost"><span style="font-size: 20px;color:rgb(75, 74, 74);"><del>2.760.000 ₫</del></span> <?php echo number_format($row['price']) . 'VNĐ'; ?></p>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" id="buy2">
                <a href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>">
                        <button type="button" class="btn btn-outline-secondary" style="color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                    </a>
                </div>
        </div>
        <?php } ?>
        <div class = "col-sm-12">
            <h2>Converse</h2>
        </div>
        <?php 
            while ($row =  $converse->fetch_array())
            {
        ?>
		<div class="col-xs-12 col-sm-6 col-md-4 ">
                <img src="./admin/photo/<?php echo $row['image']; ?>">
                <h4><?php echo $row['name']; ?></h4>
            <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
            </div>
                <p class="cost"><span style="font-size: 20px;color:rgb(75, 74, 74);"><del>2.760.000 ₫</del></span> <?php echo number_format($row['price']) . 'VNĐ'; ?></p>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" id="buy2">
                <a href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>">
                        <button type="button" class="btn btn-outline-secondary" style="color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                    </a>
                </div>
        </div>
        <?php } ?>
    </div>			
	</div>
</div>
<!--contact and backtotop-->
<div>
    <a href="#" title="Về Đầu Trang"><img src="./image/icon/backtotop.png" width="50px" class="back-to-top"/></a>
  </div>
<div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12 Contact">
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