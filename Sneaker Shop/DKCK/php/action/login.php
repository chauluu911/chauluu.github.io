<?php
if (isset($_POST['dangnhap']))
{
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'root', '', 'adidas') or die ('Lỗi kết nối');
    mysqli_set_charset($conn, "utf8");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $username   = isset($_POST['username']) ? mysqli_escape_string($conn, $_POST['username']) : '';
        $password   = isset($_POST['password']) ? md5($_POST['password']) : '';
        $sql = "SELECT id FROM user WHERE username = '$username' and password = '$password '";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row
            
        if($count == 1) {
            $_SESSION['login_user'] = $username;
            header("location: index.php");
        } else {
            echo '<script language="javascript">alert("Tk hoặc mk sai");</script>';
            header("location: account.php");
        }
    }
}

?>