<?php
$user = "l_username"|| "admin";
session_start();
if(isset($_SESSION['l_username'])|| $user= "admin"){
  
}
else{
    echo "<script>alert('dont access from URL!! Login First') </script>";
    echo "<script>location.href = 'login.php' </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
        }

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            height: 100vh;
            position: fixed;
        }

        .sidebar h2 {
            padding: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 10px;
        }

        .sidebar li {
            padding: 10px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #444;
        }

        /* Main content styles */
        .content {
            margin-left: 250px; /* Match sidebar width */
            padding: 20px;
        }

        .content h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="users.php">Users</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="logout.php">Logout</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </div>

    <div class="content">
        <h2>Welcome to the Admin Dashboard</h2>
        <p></p>
    </div>
</body>
</html>
