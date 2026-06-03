<?php
// 1. Database details
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "demo_db";

// 2. Create connection (object-oriented way)
$conn = new mysqli($server_name, $username, $password, $db_name);

// 3. Check connection
if ($conn->connect_error) {
    die("🚫 Connection Failed: " . $conn->connect_error);
} else {
    echo "<p style='text-align:center; margin-top:10%'>
            <b>✅ Connection with Database -> " . $db_name . " is established successfully!</b>
          </p>";
}
?>
