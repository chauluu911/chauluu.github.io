<?php
if (isset($_POST['dangky']))
{
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'root', '', 'adidas') or die ('Lỗi kết nối');
    mysqli_set_charset($conn, "utf8");
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $username   = isset($_POST['username']) ? mysqli_escape_string($conn, $_POST['username']) : '';
    $password   = isset($_POST['password']) ? md5($_POST['password']) : '';
    $email      = isset($_POST['email'])    ? mysqli_escape_string($conn, $_POST['email']) : '';
    $phone      = isset($_POST['phone'])    ? mysqli_escape_string($conn, $_POST['phone']) : '';
      
    // Validate Thông Tin Username và Email có bị trùng hay không
      
    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.location="register.php";</script>';
          
        // Dừng chương trình
        die ();
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO user (username, password, email, phone, level) VALUES ('$username','$password','$email','$phone', '0')";
          
        if (mysqli_query($conn, $sql)) {
            echo '<script language="javascript">alert("Đăng ký thành công");</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="account.php";</script>';
        }
    }
}

?>