<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="./css/style.css" rel="stylesheet">
    <script src="./js/app.js"></script>
    <title>Admin</title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
   <?php include('sidebar.php') ?>
   <?php
        
        include_once('../action/database.php');
        $id = $_GET['id'];
        // $order_details = $connect->query("SELECT * FROM order_detail WHERE id_order='$id'")->fetch_array();
        $order = $connect->query("SELECT * FROM orders WHERE id='$id'")->fetch_array();
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <h2>Chi tiết đơn hàng</h2>
                <div class="col-md-4">
                    <h3>Thông tin khách hàng:</h3>
                    <p>Khách hàng: <?php echo $order['name']; ?></p>
                    <p>Số điện thoại: <?php echo $order['phone']; ?></p>
                    <p>Địa chỉ: <?php echo $order['address']; ?></p>
                    <p>Hình thức thành toán: <?php echo $order['payment']; ?></p>
                    <p>Tổng tiền: <?php echo number_format($order['total_price']) . " vnđ"; ?></p>
                    <p>Ghi chú: <?php echo $order['note']; ?></p>
                </div>
                <div class="col-md-8">
                    <h3>Danh sách sản phẩm:</h3>
                    <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">sản phẩm</th>
                    <th scope="col">số lượng</th>
                    <th scope="col">Đơn giá</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once('../action/database.php');
                    $query = $connect->query("SELECT * FROM order_detail  WHERE id_order='$id'");
                    while($row = $query->fetch_array()){
                        echo "<tr>";
                        echo "<td>".$row['product_name']."</td>";
                        echo "<td>".$row['quantity']."</td>";
                        echo "<td>".number_format($row['price'])." vnđ</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
                </table>
                </div>
                <!-- /.row -->
            </div>
            <a href="/admin/danhsachdonhang.php" class="btn btn-primary">Quay lại</a>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>