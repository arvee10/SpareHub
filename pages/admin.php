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
        <div class="links">
            <ul>
                <li><a href="./Homepage.html">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="logout.php" class="sign">Sign Out</a></li>
            </ul>
        </div>
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
                        <td>$45.99</td>
                        <td>50</td>
                        <td>
                            <button class="action-btn edit-btn">Edit</button>
                            <button class="action-btn delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Oil Filter</td>
                        <td>$12.50</td>
                        <td>100</td>
                        <td>
                            <button class="action-btn edit-btn">Edit</button>
                            <button class="action-btn delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Air Filter</td>
                        <td>$18.75</td>
                        <td>75</td>
                        <td>
                            <button class="action-btn edit-btn">Edit</button>
                            <button class="action-btn delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="action-btn add-btn">Add New Part</button>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</body>
</html>