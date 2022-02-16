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
    <script src="./javascript/product.js"></script>
    <script src="./javascript/cart.js"></script>
</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
		<a class="navbar-branch" href="index.php">
			<img src="./image/logo.jpg" height="110" width="140px">
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" href="index.php">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="product.php">Sản phẩm</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="account.php">Đăng nhập / Đăng ký</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="feedback.php">Góp ý</a>
				</li>
        <li class="nav-item thumbnail" >
          <img class="nav-link" src="image/icon/giohang.jpg" width="65px" id="cart" onclick="openModal()">
      </li>
</ul>
</div>
<!-- The Modal -->
<!--<button id="cart" onclick="openModal()">
  <i class="fa fa-shopping-basket" aria-hidden="true"></i>
  Giỏ Hàng
</button>-->
<div id="myModal" class="modal">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Giỏ Hàng</h5>
          <span class="close" onclick="closeModal()">&times;</span>
      </div>
      <div class="modal-body">
          <div class="cart-row">
              <span class="cart-item cart-header cart-column product-total">Sản Phẩm</span>
              <span class="cart-price cart-header cart-column price-total ">Giá</span>
              <span class="cart-quantity cart-header cart-column total">Số Lượng</span>
          </div>
              <div class="cart-total">
                  <strong class="cart-total-title">Tổng Cộng:</strong>
                  <span class="cart-total-price">0VNĐ</span>
              </div>
          </div>
      </div>

      <div class="modal-footer">
          <button type="button" class="btn btn-secondary close-footer" onclick="closeModal()">Đóng</button>
          <button type="button" class="btn btn-primary order" onclick="order()">Thanh Toán</button>
      </div>
	</div>
</nav>
<!--product-->
<div id="filter-tool">

    <!-- Filter theo thương hiệu -->
    <h3 id="filter-element" class="filter-animation"><b> Thương hiệu </b></h3>
    <div class="padding-filter list-product">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a class="button-product-adidas" href="product.php">ADIDAS</a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a class="button-product-nike" href="Nike.php">NIKE</a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a class="button-product" href="converse.php ">CONVERSE</a>
      </div>
        <!--<div class="product-adidas"><a href="product.html"></a><button class="btn"> Adidas</button></div>
        <div class="product-adidas"><a href="Nike.html"></a><button class="btn"> Nike</button></div>
        <div class="product-adidas"><a href="#"></a><button class="btn"> Converse</button></div>
    </div>-->
  </div>
    <!-- Filter theo giá tiền -->
    <h3 id="filter-element"><b> Giá </b></h3>
    <div class="padding-filter">
        <button class="btn" value="all" onclick="changeProductList('all')"> Show all</button>
        <button class="btn" value="1stRange" onclick="changeProductList('1stRange')"> 1.000.000đ - 2.000.000đ</button>
        <button class="btn" value="2ndRange" onclick="changeProductList('2ndRange')"> 2.000.000đ - 5.000.000đ</button>
        <button class="btn" value="3rdRange" onclick="changeProductList('3rdRange')"> 5.000.000đ - 10.000.000đ</button>
        <button class="btn" value="4thRange" onclick="changeProductList('4thRange')"> > 10.000.000đ</button>
    </div>
</div>
<!-- Danh sách sản phẩm từ 1,000,000đ - 2,000,000đ -->
<div class="product-main">
    <h1 style="font-weight: bold; color:rgb(82, 81, 81); " class="title-product">NIKE</h1>
<div id="1stRange">
    <ul type="none">
        <!-- Sản phẩm 7 -->
        <li>
          <div id="adidas-product-card">
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <img id="product-img" src="image/nike/airjordan6.jpg">
                </a>
              </div>
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <div id="product-detail-main">
                    <span id="product-name"> Jordan 6 </span>
                    <div id="product-price" value=1680000> 1 500 000đ </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 product2" id="buy">
                        <a href="#">
                            <button type="button" class="btn btn-outline-secondary" style=" padding: 1px;font-size: 13px;width: 145px;;color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                        </a>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        </li>

        <!-- Sản phẩm 8 -->
        <li>
          <div id="adidas-product-card">
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <img id="product-img" src="image/nike/airmax270.jpg">
                </a>
              </div>
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <div id="product-detail-main">
                    <span id="product-name"> Nike Air Max 270 </span>
                    <div id="product-price" value=1680000> 1 950 000đ </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 product2" id="buy">
                        <a href="#">
                            <button type="button" class="btn btn-outline-secondary" style="padding: 1px;font-size: 13px;width: 145px;;color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                        </a>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        </li>
    </ul>
</div>

<!-- Danh sách sản phẩm từ 2,000,000đ - 5,000,000đ -->
<div id="2ndRange">
  <ul type="none">
      <!-- Sản phẩm 4 -->
      <li>
          <div id="adidas-product-card">
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <img id="product-img" src="image/nike/airmaxdia.jpg">
                </a>
              </div>
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <div id="product-detail-main">
                    <span id="product-name"> Air Max Dia </span>
                    <div id="product-price" value=3400000> 3 400 000đ </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 product2" id="buy">
                        <a href="#">
                            <button type="button" class="btn btn-outline-secondary" style="padding: 1px;font-size: 13px;width: 145px;;color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                        </a>
                    </div>
                  </div>
                </a>
              </div>
        </div>
      </li>

      <!-- Sản phẩm 5 -->
      <li>
          <div id="adidas-product-card">
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <img id="product-img" src="image/nike/airmaxinfinity.jpg">
                </a>
              </div>
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <div id="product-detail-main">
                    <span id="product-name"> Air Max Infinity </span>
                    <div id="product-price" value=4200000> 4 200 000đ </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 product2" id="buy">
                        <a href="#">
                            <button type="button" class="btn btn-outline-secondary" style="padding: 1px;font-size: 13px;width: 145px;;color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                        </a>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        </li>
    </ul>
</div>

<!-- Danh sách sản phẩm từ 5,000,000đ - 10,000,000đ -->
<div id="3rdRange">
    <ul type="none">
        <!-- Sản phẩm 1 -->
        <li>
          <div id="adidas-product-card">
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <img id="product-img" src="image/nike/airmaxzephyr.jpg">
                </a>
              </div>
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <div id="product-detail-main">
                    <span id="product-name"> Air Max Zephyr </span>
                    <div id="product-price" value=5000000> 5 000 000đ </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 product2" id="buy">
                        <a href="#">
                            <button type="button" class="btn btn-outline-secondary" style="padding: 1px;font-size: 13px;width: 145px;;color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                        </a>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        </li>

        <!-- Sản phẩm 2 -->
        
          <div id="adidas-product-card">
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <img id="product-img" src="image/nike/jordandelta.jpg">
                </a>
              </div>
              <div>
                <a id="asset-link" href="#" target="_blank">
                  <div id="product-detail-main">
                    <span id="product-name"> Jordan Delta </span>
                    <div id="product-price" value=6000000> 6 500 000đ </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2 product2" id="buy">
                        <a href="#">
                            <button type="button" class="btn btn-outline-secondary" style="padding: 1px;font-size: 13px;width: 145px;;color: black; font-weight: bold;">Thêm vào giỏ hàng</button>
                        </a>
                    </div>
                  </div>
                </a>
              </div>
            </div>
       
    </div>
</div>  
<!--contact and backtotop-->
<div>
    <a href="#" title="Về Đầu Trang"><img src="./image/icon/backtotop.png" width="50px" class="back-to-top"/></a>
</div>
<div class="footer">
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
</div>	
</body>
</html>
