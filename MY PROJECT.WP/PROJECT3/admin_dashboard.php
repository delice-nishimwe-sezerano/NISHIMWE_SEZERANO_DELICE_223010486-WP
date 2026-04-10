<?php
session_start();
include 'db_conn.php';
if(!isset($_SESSION['user'])) { header("Location: login.php"); } // Redirect if not logged in
?>
<div class="container">
    <h2>Customer Orders</h2>
    <a href="logout.php" style="color:red;">Logout</a>
    <table>
        <tr>
            <th>Name</th><th>Email</th><th>Phone</th><th>Item</th><th>Date</th>
        </tr>
        <?php
        $res = mysqli_query($conn, "SELECT * FROM orders");
        while($row = mysqli_fetch_assoc($res)){
            echo "<tr>
                <td>{$row['fullname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['menu_item']}</td>
                <td>{$row['order_date']}</td>
            </tr>";
        }
        ?>
    </table>
</div>