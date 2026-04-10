<?php
include 'db_conn.php';
if(isset($_POST['submit_order'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $menu = $_POST['menu_item'];
    $addr = $_POST['address'];
    $date = $_POST['order_date'];

    $sql = "INSERT INTO orders (fullname, email, phone, menu_item, address, order_date) 
            VALUES ('$name', '$email', '$phone', '$menu', '$addr', '$date')";
    
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Order Placed!'); window.location='index.php';</script>";
    }
}
?>