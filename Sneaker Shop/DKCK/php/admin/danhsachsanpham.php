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
            <h3>Danh sách sản phẩm <a href="/admin/themsanpham.php" class="btn btn-primary">Thêm mới</a></h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once('../action/database.php');
                    $query = $connect->query("SELECT * FROM product ORDER by id");
                    while($row = $query->fetch_array()){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td> <img width='30' src=./photo/".$row['image']." />"."</td>";
                        echo "<td>".number_format($row['price'])." vnđ</td>";
                        echo "<td>".$row['trademark']."</td>";
                        echo "<td><a href='suasanpham.php?id=" . $row['id'] . "'> Sửa </a>" . " | <a href='xoasanpham.php?id=" . $row['id'] . "'> Xóa </a>" . "</td>";
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