<?php
//here we connect our file with the admincontroller which help us to connect to the database
require_once 'controller/admincontroller.php';

// // this checks if a user is logged in and if not it redirects to the login page
// if (!isset($_SESSION['user_id'])) {
//     header('location: ../login.php');
//     exit();
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Management</title>
    <link rel="stylesheet" href="css/admins.css">
</head>
<body>
    <!-- sidebar navigation menu -->
    <div class="sidebar">
        <h2><b>ADMIN DASHBOARD</b></h2>
        <ul>
            <li><a href="index.php">DASHBOARD</a></li>
            <li><a href="destinations.php">DESTINATIONS MANAGEMENT</a></li>
            <li><a href="products.php">PRODUCTS MANAGEMENT</a></li>
            <li><a href="blogs.php">BLOGS MANAGEMENT</a></li>
            <li><a href="faqs.php">FAQS MANAGEMENT</a></li>
            <li><a href="gallery.php">GALLERY MANAGEMENT</a></li>
            <li><a href="messages.php">MESSAGES MANAGEMENT</a></li>
            <li><a href="subscriptions.php">SUBSCRIPTIONS ALLOCATION</a></li>
            <li><a href="adverts.php">ADVERTS MANAGEMENT</a></li>
            <li><a href="reports.php">REPORTS</a></li>
            
        </ul>
    </div>
    <div class="main-content">
        <!-- main content area top navigation bar -->
        <div class="header">
            <div class="nav">
                <div class="user">
                    <button class="btn"><a href="newuser.php" class="btn"><b>ADD USER</b></a></button>
                    <div class="img-case">
                        <a href="adminprofile.php"><img src="../images/user.png"></a>
                    </div>
                    <button class="log-btn"><a href="index.php?logout=1" style="color: red;" class="logout"><b>LOG OUT</b></a></button>
                </div>
            </div>
        </div>
        <div class="b-content">
            <div class="bsform">
                <h1>Gallery Management</h1>
                <?php
                if (isset($_SESSION['success_p'])) {
                ?>
                <div class="alert-success">
                    <b><?php
                        echo $_SESSION['success_p'];
                    ?></b>
                </div>
                <?php
                    unset($_SESSION['success_p']);
                    } else {
                    if (isset($_SESSION['error_p'])) {
                ?>
                <div class="alert-error">
                    <b><?php
                        echo $_SESSION['error_p'];
                    ?></b>
                </div>
                <?php
                    unset($_SESSION['error_p']);
                    }
                    }
                ?>
               
            </div>

            <div class="customer-list">
                <h2>Manage Gallery</h2>
                <!-- displaying all Gallery from the database -->
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>TITLE</th>
                            <th>LIKES</th>
                            <th>COMMENTS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                        
                        // fetching blogs data from the database and displaying it
                        $sql = "SELECT * FROM gallery ORDER BY lastupdated DESC";
                        $result = $conn->query($sql);
                        while ($post_r = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $post_r["post_id"] . "</td>";
                            echo "<td>" . $post_r["image"] . "</td>";
                            echo "<td>" . $post_r["image_title"] . "</td>";
                            echo "<td>" . $post_r["likes"] . "</td>";
                            echo "<td>" . $post_r["comments"] . "</td>";
                            echo "<td class='action action-column'>";
                            echo "<button><a href='delete/deletepost.php?post_id=" . $post_r["post_id"] . "' 
                            onclick='return confirm(\"Are you sure you want to delete this post?\");'>Delete</a></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                
                        ?>

                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</body>
</html>
