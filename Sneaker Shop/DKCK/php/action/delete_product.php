<?php
// Kết nối CSDL
include 'database.php';
$sql = "DELETE FROM product WHERE id = ?";
if (!$result = $connect->prepare($sql)) {
    die('Query failed: (' . $connect->errno . ') ' . $connect->error);
}
$result->close();
$connect->close();
echo '<script language="javascript">alert("Đã xóa");window.location="../admin/danhsachsanpham.php"</script>';
?>