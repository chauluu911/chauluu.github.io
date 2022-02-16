<?php
if (isset($_POST['order']))
{
    // Kết nối CSDL
    include 'database.php';
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $name   = isset($_POST['name']) ? mysqli_escape_string($connect, $_POST['name']) : '';
    $phone      = isset($_POST['phone'])    ? mysqli_escape_string($connect, $_POST['phone']) : '';
    $address      = isset($_POST['address'])    ? mysqli_escape_string($connect, $_POST['address']) : '';
    $payment      = isset($_POST['payment'])    ? mysqli_escape_string($connect, $_POST['payment']) : '';
    $note      = isset($_POST['note'])    ? mysqli_escape_string($connect, $_POST['note']) : '';
    //get cart
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM product WHERE id IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
          
        $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 

        $carts=mysqli_query($connect, $sql); 
    }
    if (isset($carts)) {
        $totalprice = 0;
        while ($row =  mysqli_fetch_array($carts))
        {
            $subtotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price'] ?? 0; 
            $totalprice+=$subtotal; 
        } 
        $sql = "INSERT INTO orders (total_price, payment, note, name, phone, address) VALUES ('$totalprice', '$payment', '$note', '$name', '$phone', '$address')";
        // Thực thi câu truy vấn
        $result = mysqli_query($connect, $sql);

        $last_id = mysqli_insert_id($connect);
        if(isset($_SESSION['cart'])){ 
          
            $sql="SELECT * FROM product WHERE id IN ("; 
              
            foreach($_SESSION['cart'] as $id => $value) { 
                $sql.=$id.","; 
            } 
              
            $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 
    
            $carts=mysqli_query($connect, $sql); 
        }
        while ($row2 =  mysqli_fetch_array($carts))
        {
           
            $price = $row2['price'];
            $product_name = $row2['name'];
            $quantity = $_SESSION['cart'][$row2['id']]['quantity'];
            //save order detail
            $sql2 = "INSERT INTO order_detail (price, quantity, product_name, id_order) VALUES ('$price', '$quantity', '$product_name', '$last_id')";
            // Thực thi câu truy vấn
            $result = mysqli_query($connect, $sql2);
        } 
        unset($_SESSION['cart']);
        echo '<script language="javascript">alert("Đặt hàng thành công!");window.location="index.php";</script>';
    }
}

?>