<?php
//here we connect our file with the admincontroller which help us to connect to the database
require_once 'controller/admincontroller.php';

// this checks if a user is logged in and if not it redirects to the login page
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
    <title>Admin Dashboard</title>
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
        <!-- main content navigation menu -->
        <div class="header">
            <div class="nav">
                <div class="user">
                    <div class="img-case">
                        <a href="adminprofile.php"><img src="../images/user.png"> <?php echo ($_SESSION['user_id']) ?></a>
                    </div>
                    <button class="log-btn"><a href="index.php?logout=1" style="color: red;" class="logout"><b>LOG OUT</b></a></button>
                </div>
            </div>
        </div>
        
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>600+</h1>
                        <h3>Active Users</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <h1>40+</h1>
                        <h3>New Users</h3>
                    </div>
    
                </div>
                <div class="card">
                    <div class="box">
                        <h1>10+</h1>
                        <h3>Active Ads</h3>
                    </div>
                
                </div>
                <div class="card">
                    <div class="box">
                        <h1>100,000+</h1>
                        <h3>Income</h3>
                    </div>
                    
                </div>
            </div>
            <div class="content-2">
                <!-- Table to display the recent bookings -->
                <div class="recent-bookings">
                    <div class="title">
                        <h2>Recent Subscriptions</h2>
                
                    </div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>EMAIL</th>
                            <th id="date">DATE JOINED</th>
                        </tr>
                        <?php
                        // fetching all subscription data from the subscriptions database 
                        $sql = "SELECT * FROM subscriptions ORDER BY lastupdated DESC LIMIT 10";
                        $result = $conn->query($sql);
                        // Output data of each row from database and putting them on the table
                        while($subscription_r = $result->fetch_assoc()) {
                            echo "<tr>";                          
                            echo "<td>" . $subscription_r["sub_id"] . "</td>";
                            echo "<td>" . $subscription_r["email"] . "</td>";
                            echo "<td id='date'>" . $subscription_r["lastupdated"] . "</td>";
                            echo "</tr>";
                        }
                        
                        ?>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>
