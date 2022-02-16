<?php
if (isset($_POST['suasanpham']))
{
    // Kết nối CSDL
    include 'database.php';
    $id = $_POST['id'];
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $trademark   = isset($_POST['trademark']) ? mysqli_escape_string($connect, $_POST['trademark']) : '';
    $name      = isset($_POST['name'])    ? mysqli_escape_string($connect, $_POST['name']) : '';
    $price      = isset($_POST['price'])    ? mysqli_escape_string($connect, $_POST['price']) : '';
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$expensions)=== false){
        echo '<script language="javascript">alert("Ảnh ko đúng định dạng!");window.location="suasanpham.php";</script>';
    } else {
        $image = $_FILES['image']['name'];
        $target = "photo/".basename($image);
        $sql = "UPDATE product set trademark = '$trademark', name = '$name', price = '$price', image = '$image'  WHERE id ='$id'";
        // Thực thi câu truy vấn
        $result = mysqli_query($connect, $sql);
        
        var_dump($result);
        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        $target_path = $destination_path . $target;
        if (@move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            echo '<script language="javascript">alert("Đã sửa thành công!");window.location="danhsachsanpham.php";</script>';
            
        } else {
            echo '<script language="javascript">alert("Đã sửa thất bại!");</script>';
        }
    }
}

?>