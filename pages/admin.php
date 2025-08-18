<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: Login.html?error=Unauthorized access");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - SpareHub</title>
    <link rel="stylesheet" href="../styles/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="brand">SpareHub</div>

    </div>
    <div class="admin-main">
        <div class="admin-content">
            <h2>Welcome, Admin!</h2>
            <p>Manage your SpareHub inventory below.</p>
            <h3>Spare Parts Inventory</h3>
            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>Part Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Brake Pad Set</td>
                        <td>₹800</td>
                        <td>50</td>
                        <td>
                            <button class="action-btn edit-btn">Edit</button>
                            <button class="action-btn delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Clutchplate</td>
                        <td>₹2000</td>
                        <td>100</td>
                        <td>
                            <button class="action-btn edit-btn">Edit</button>
                            <button class="action-btn delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Air Filter</td>
                        <td>₹500</td>
                        <td>75</td>
                        <td>
                            <button class="action-btn edit-btn">Edit</button>
                            <button class="action-btn delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="logout.php" class="logout-btn">Logout</a>
            <button class="action-btn" onclick="location.href='admin2.php'">View Analytics</button>
        </div>
    </div>
</body>
</html>