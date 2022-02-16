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
            <h3>Góp ý của khách hàng</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Nội dung góp ý</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include_once('../action/database.php');
                    $query = $connect->query("SELECT * FROM feedback");
                    while($row = $query->fetch_array()){
                        echo "<tr>";
                        echo "<td>".$row['hoten']."</td>";
                        echo "<td>".$row['sdt']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['anh']."</td>";
                        echo "<td>".$row['content']."</td>";
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