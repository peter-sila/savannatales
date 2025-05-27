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
    <title>Blogs Management</title>
    <link rel="stylesheet" href="css/blog.css">
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
        <!-- main area content top navigation bar -->
        <div class="header">
            <div class="nav">
                <div class="user">
                    <button class="btn" onclick="toggleAddBlog(true)"><b>ADD BLOG</b></button>
                    <div class="img-case">
                        <a href="adminprofile.php"><img src="../images/user.png"></a>
                    </div>
                    <button class="log-btn"><a href="index.php?logout=1" style="color: red;" class="logout"><b>LOG OUT</b></a></button>
                </div>
            </div>
        </div>

        <div class="b-content">
            <h1>Blogs Management</h1>
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
            <div class="blog-list active">
                <!-- displaying the available schedules from the database -->
                <h2>Manage Blogs</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>SUBTITLE</th>
                            <th>DESCRIPTION</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        

                        // fetching blogs data from the database and displaying it
                        $sql = "SELECT * FROM blogs ORDER BY lastupdated DESC";
                        $result = $conn->query($sql);
                        // Output data of each row from database
                        while($blog_r = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $blog_r["blog_id"] . "</td>";
                            echo "<td>" . $blog_r["blogtitle"] . "</td>";
                            echo "<td>" . $blog_r["blogsubtitle"] . "</td>";
                            echo "<td>" . $blog_r["blogdescription"] . " - " . $blog_r["destination"] . "</td>";
                            echo "<td class='action-column'>";
                            echo "<button><a href='edit/editblog.php?blog_id=" . $blog_r["blog_id"] . "'><b>Edit</b></a></button>";
                            echo "<button><a href='delete/deleteblog.php?blog_id=" . $blog_r["blog_id"] . "' 
                            onclick='return confirm(\"Are you sure you want to delete this scheudle?\");'><b>Delete</b></a></button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table> 
            </div>
            <div id="blogPopup" class="blogform popup-form">
                <!-- form to add a new blog by the admin -->
                <div class="popup-content">
                    <span class="close-btn" onclick="toggleAddBlog(false)">&times;</span>
                    <h2>Create Schedule</h2>
                    <form action="schedules.php" method="POST">
                        <div class="input">
                            <label for="sdate"><b>Date:</b></label>
                            <input type="date" id="sdate" name="sdate" >
                            <?php if (isset($errors['sdate'])): ?>
                                <div class="alert alert-danger">
                                    <li><?php echo $errors['sdate']; ?></li>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="input">
                            <label for="bus"><b>Bus:</b></label>
                            <select id="bus" name="bus">
                                <option value="">Select Bus</option>
                                <?php
                                // fetching bus to display on bus assigning
                                $sql = "SELECT bus_id, busnumber, capacity FROM buses WHERE status = 'active'";
                                $result = $conn->query($sql);
                                while($bus_r = $result->fetch_assoc()) {
                                    echo "<option value='" . $bus_r["busnumber"] . "'>" . $bus_r["capacity"] . " " . $bus_r["busnumber"] . "</option>";
                                }
                                ?>
                            </select>
                            <?php if (isset($errors['bus'])): ?>
                                <div class="alert alert-danger">
                                    <li><?php echo $errors['bus']; ?></li>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="input">
                            <label for="origin"><b>Origin:</b></label>
                            <select id="origin" name="origin">
                                <option value="">Select Origin</option>
                                <?php
                                // fetching schedules to display on schedule assigning
                                $sql = "SELECT city, county FROM locations";
                                $result = $conn->query($sql);
                                while($loc_r = $result->fetch_assoc()) {
                                    echo "<option value='" . $loc_r["city"] . "'>" . $loc_r["city"] ." ". $loc_r["county"] . "</option>";
                                }
                                ?>
                            </select>
                            <?php if (isset($errors['origin'])): ?>
                                <div class="alert alert-danger">
                                    <li><?php echo $errors['origin']; ?></li>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="input">
                            <label for="destination"><b>Destination:</b></label>
                            <select id="destination" name="destination">
                                <option value="">Select destination</option>
                                <?php
                                // fetching schedules to display on schedule assigning
                                $sql = "SELECT city, county FROM locations";
                                $result = $conn->query($sql);
                                while($loc_r = $result->fetch_assoc()) {
                                    echo "<option value='" . $loc_r["city"] . "'>"  . $loc_r["city"] ." ". $loc_r["county"] . "</option>";
                                }
                                ?>
                            </select>
                            <?php if (isset($errors['destination'])): ?>
                                <div class="alert alert-danger">
                                    <li><?php echo $errors['destination']; ?></li>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="input">
                            <label for="departuretime"><b>Departure Time:</b></label>
                            <input type="time" id="departuretime" name="departuretime">
                            <?php if (isset($errors['departuretime'])): ?>
                                <div class="alert alert-danger">
                                    <li><?php echo $errors['departuretime']; ?></li>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="input">
                            <label for="fare"><b>Fare:</b></label>
                            <input type="number" id="fare" name="fare">
                            <?php if (isset($errors['fare'])): ?>
                                <div class="alert alert-danger">
                                    <li><?php echo $errors['fare']; ?></li>
                                </div>
                            <?php endif; ?> 
                        </div>
                        
                        <br><br>
                        <div class="bbtn">
                            <button type="submit" name="addschedule">Add Schedule</button>
                            <button class="cancel" type="button" onclick="toggleAddBlog(false)">Cancel</button>
                    
                        </div>
                        
                    </form>

                </div>
            </div>
        
        </div>
    </div>
    <script src="js/blog.js"></script>
</body>
</html>
