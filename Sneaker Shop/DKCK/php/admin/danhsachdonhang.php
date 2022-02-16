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

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
            <h3>Danh sách đơn hàng</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Khách hàng</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Tiền hàng</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once('../action/database.php');
                    $query = $connect->query("SELECT * FROM orders ORDER by id desc");
                    while($row = $query->fetch_array()){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['phone']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".number_format($row['total_price'])." vnđ</td>";
                        if ($row['status'] == 0) {
                            echo "<td> Chưa duyệt </td>";
                        } else if ($row['status'] == 1) {
                            echo "<td> <span class='text-primary'> đã duyệt </span></td>";
                        } else {
                            echo "<td> <span class='text-danger'> Hủy </span></td>";
                        }
                        echo "<td><a href='chitietdonhang.php?id=" . $row['id'] . "'> Chi tiết </a>" . " | <a href='huydonhang.php?id=" . $row['id'] . "'> Hủy </a> | <a href='duyetdonhang.php?id=" . $row['id'] . "'> Xác nhận </a>" . "</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>