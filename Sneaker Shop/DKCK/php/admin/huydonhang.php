<?php
// Kết nối CSDL
include '../action/database.php';
$id = $_GET['id'];
$sql = "UPDATE orders set status = 2 WHERE id = $id";
$result = mysqli_query($connect, $sql);
echo '<script language="javascript">alert("Đã Hủy");window.location="../admin/danhsachdonhang.php"</script>';
?>