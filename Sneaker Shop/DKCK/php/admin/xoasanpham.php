<?php
// Kết nối CSDL
include '../action/database.php';
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id = $id";
$result = mysqli_query($connect, $sql);
echo '<script language="javascript">alert("Đã xóa");window.location="../admin/danhsachsanpham.php"</script>';
?>