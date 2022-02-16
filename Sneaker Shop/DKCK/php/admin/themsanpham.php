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
        require_once '../action/themsanpham.php';
        if(isset($_POST['themsanpham'])){
            exit();
        }
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
            <div class="col-md-7">
                <h3>Thêm sản phẩm</h3>
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="themsanpham.php">
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Loại sản phẩm</label>
                    <div class="col-sm-10">
                        <select name="trademark" id="">
                            <option value="Adidas">Adidas</option>
                            <option value="Nike">Nike</option>
                            <option value="Converse">Converse</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Tên sản phẩm</label>
                    <div class="col-sm-10">          
                        <input type="text" class="form-control" id="pwd" name="name">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Giá sản phẩm</label>
                    <div class="col-sm-10">          
                        <input type="number" class="form-control" id="pwd" name="price">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Hình ảnh</label>
                    <div class="col-sm-10">          
                        <input type="file" class="form-control" id="pwd" name="image">
                    </div>
                    </div>
                    <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="themsanpham" class="btn btn-default">Submit</button>
                    </div>
                    </div>
                </form>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>