<?php 
    session_start(); 
    include_once('./action/database.php');
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM product WHERE id IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
          
        $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 

        $carts=mysqli_query($connect, $sql); 
    }

    if(isset($_POST['submit'])){ 
          
        foreach($_POST['item'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
            }else{ 
                $_SESSION['cart'][$key]['quantity']=$val; 
            } 
        } 
        echo '<script language="javascript">alert("Đã cập nhật"); window.location="index.php";</script>';
          
    } 
?> 
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
                    <?php if (isset($_SESSION['login_user'])) {  ?>
                        <?php echo $_SESSION['login_user'] ?>
                        <a class="nav-link logout" href="/logout.php">Đăng xuất</a>
                    <?php } else {?>
					<a class="nav-link" href="account.php">Đăng nhập / Đăng ký</a>
                    <?php } ?>
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
                <form method="post" action="index.php?page=cart"> 
                <div class="modal-body">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Đóng</button>
                    <button type="submit" name="submit" class="btn btn-danger">Update</button>
                    <a href="/thanhtoan.php" class="btn btn-primary">Thanh Toán</a>
                </div>
                </form> 
	</div>
</nav>