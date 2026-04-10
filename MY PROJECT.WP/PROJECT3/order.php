<div class="container">
    <h2>Place Your Order</h2>
    <form action="process_order.php" method="POST">
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <select name="menu_item">
            <option>Grilled Fish</option>
            <option>Fresh Mango Juice</option>
            <option>Cold Soft Drink</option>
        </select>
        <textarea name="address" placeholder="Delivery Address"></textarea>
        <input type="date" name="order_date">
        <button type="submit" name="submit_order">Submit Order</button>
    </form>
</div>