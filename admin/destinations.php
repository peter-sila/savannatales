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
    <title>Destinations Management</title>
    <link rel="stylesheet" href="css/destination.css">
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
    <!-- main content container -->
    <div class="main-content">
        <!-- main content top navigation bar -->
        <div class="header">
            <div class="nav">
                <div class="user">
                    <button class="btn" onclick="toggleAddDestination(true)"><b>ADD DESTINATION</b></button>
                    <div class="img-case">
                        <a href="adminprofile.php"><img src="../images/user.png"> <?php echo ($_SESSION['user_id']) ?></a>
                    </div>
                    <button class="log-btn"><a href="index.php?logout=1" style="color: red;" class="logout"><b>LOG OUT</b></a></button>
                </div>
            </div>
        </div>
        <div class="b-content">
            <h1 id="destinationlist">Destinations Management</h1>
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
            <div class="destination-list active">
                <!-- List on a table  -->
                 <h2>Destinations List</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>IMAGES</th>
                        <th>PRICE</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    // fetching destinations data from the destinations table in the database and displaying it
                    $sql = "SELECT * FROM destinations";
                    $result = $conn->query($sql);
                    // Output data of each row from database and displaying on table
                    while($destinations_r = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $destinations_r["id"] . "</td>";
                        echo "<td>" . $destinations_r["name"] . "</td>";
                        echo "<td>" . $destinations_r["description"] . "</td>";
                        // Decode the JSON-encoded image names
                        $imageNames = json_decode($destinations_r["images"], true);
                        
                        echo "<td>";
                            if (!empty($imageNames)) {
                                foreach ($imageNames as $image) {
                                    echo "<img src='../assets/destinations/" . htmlspecialchars($image) . "' alt='Destination Image' width='100' height='80' style='margin-right: 5px;'>";
                                }
                            } else {
                                echo "No image available";
                            }
                        echo "</td>";
                        echo "<td>" . $destinations_r["price"] . "</td>";
                        echo "<td class='action-column'>";
                        echo "<button class='edit'><a href='edit/editdestination.php?id=" . $destinations_r["id"] . "'><b>Edit</b></a></button>";
                        echo "<button class='delete' name='deletedestination'><a href='delete/deletedestination.php?id=" . $destinations_r["id"] . "' 
                        onclick='return confirm(\"Are you sure you want to delete this destination?\");'><b>Delete</b></a></button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>

                </table>
                
            </div>
            <div id="destinationPopup" class="destinationform popup-form">
                <!-- Form to add a new destination -->
                <div class="popup-content">
                    <span class="close-btn" onclick="toggleAddDestination(false)">&times;</span>
                    <h2 id="destinationform">Add Destination</h2>
                    <form action="controller/add_destination.php"  method="POST">
                        <label for="name"><b>Name:</b></label>
                        <input type="text" id="name" name="name" >
                        <?php if (isset($errors['name'])): ?>
                            <div class="alert alert-danger">
                                <li><?php echo $errors['name']; ?></li>
                            </div>
                        <?php endif; ?><br>
                        <label for="description"><b>Description:</b></label>
                        <input type="text" id="description" name="description" >
                        <?php if (isset($errors['description'])): ?>
                            <div class="alert alert-danger">
                                <li><?php echo $errors['description']; ?></li>
                            </div>
                        <?php endif; ?><br>
                        <label for="images"><b>Images:</b></label>
                        <input type="file" name="images" id="images" multiple>
                        <?php if (isset($errors['images'])): ?>
                            <div class="alert alert-danger">
                                <li><?php echo $errors['images']; ?></li>
                            </div>
                        <?php endif; ?><br><br>
                        <label for="price"><b>Price (USD):</b></label>
                        <input type="number" name="price" id="price">
                        <?php if (isset($errors['price'])): ?>
                            <div class="alert alert-danger">
                                <li><?php echo $errors['price']; ?></li>
                            </div>
                        <?php endif; ?><br><br>
                        <div class="bbtn">
                            <button type="submit" name="adddestination"><b>Add Destination</b></button>
                            <button class="cancel" type="button" onclick="toggleAddDestination(false)"><b>Cancel</b></button>
                    
                        </div>
                        
                    </form>
                
                </div>
                
            </div>
        </div>
    </div>
    <script src="js/destination.js"></script>
</body>
</html>
