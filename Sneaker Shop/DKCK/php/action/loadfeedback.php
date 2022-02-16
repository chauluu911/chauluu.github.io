<?php
if (isset($_POST['guigopy']))
{
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'root', '', 'adidas') or die ('Lỗi kết nối');
    mysqli_set_charset($conn, "utf8");
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $hoten   = isset($_POST['hoten']) ? mysqli_escape_string($conn, $_POST['hoten']) : '';
    $sdt   = isset($_POST['sdt']) ? mysqli_escape_string($conn, $_POST['sdt']) : '';
    $email      = isset($_POST['email'])    ? mysqli_escape_string($conn, $_POST['email']) : '';
    $anh      = isset($_POST['anh'])    ? mysqli_escape_string($conn, $_POST['anh']) : '';
    $content      = isset($_POST['content'])    ? mysqli_escape_string($conn, $_POST['content']) : '';
      
   $sql = "INSERT INTO feedback (hoten, sdt, email, anh, content) VALUES ('$hoten   ','$sdt','$email','$anh', '$content')";
          
    if (mysqli_query($conn, $sql)) {
            echo '<script language="javascript">alert("gửi góp ý thành công, cảm ơn bạn đã ghé thăm cửa hàng của chúng tôi");</script>';
     }
    else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="feedback.php";</script>';
    }
}

?>