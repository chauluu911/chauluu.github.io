<?php
session_start();
if (!isset($_SESSION['login_admin'])) {
    echo '<script language="javascript">alert("Vui long đăng nhập");window.location="/admin/login.php"</script>';
}
?>
 <!-- Navigation -->
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin/danhsachsanpham.php">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['login_admin']; ?><b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/admin/logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="/admin/danhsachnguoidung.php"><i class="fa fa-fw fa-user-plus"></i> Danh sách user</a>
                </li>
                <li>
                    <a href="/admin/danhsachsanpham.php"><i class="fa fa-fw fa-paper-plane-o"></i> Danh sách sản phẩm</a>
                </li>
                <li>
                    <a href="/admin/danhsachdonhang.php"><i class="fa fa-fw fa fa-question-circle"></i>Danh sách đơn hàng</a>
                </li>
                <li>
                    <a href="/admin/danhsachgopy.php"><i class="fa fa-fw fa fa-question-circle"></i>Góp ý của khách hàng</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>