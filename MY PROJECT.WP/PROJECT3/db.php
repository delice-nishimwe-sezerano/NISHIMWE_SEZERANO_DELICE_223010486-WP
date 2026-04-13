<?php
// db.php - Database Connection File

$host     = 'localhost';
$dbname   = 'restaurant_db';     // ← Changed from hotel_db (more appropriate for food ordering)
$username = 'root';
$password = '';                  // Change this if you set a password in XAMPP / MySQL

// Enable strict error reporting (highly recommended)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $username, $password, $dbname);
    
    // Set character set to utf8mb4 (supports emojis, special characters, etc.)
    $conn->set_charset('utf8mb4');

} catch (mysqli_sql_exception $e) {
    // In production, log the error instead of showing it to users
    error_log("Database connection failed: " . $e->getMessage());
    die("Sorry, we are experiencing technical difficulties. Please try again later.");
}

// Optional: Create the database automatically if it doesn't exist (useful during development)
if ($conn->connect_errno === 1049) { // 1049 = Unknown database
    $conn = new mysqli($host, $username, $password);
    $conn->query("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $conn->select_db($dbname);
    $conn->set_charset('utf8mb4');
    echo "<div style='color:green; padding:10px; background:#d4edda; border:1px solid green; margin:10px;'>
            Database <strong>$dbname</strong> was created automatically.
          </div>";
}
?>