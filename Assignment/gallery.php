<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0d6539403e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>FurEver Guardians</title>
</head>
<body>
    <div id="banner">
        <div id="logo">
            <a href="index.php"><img src="image/logo.png" alt="FurEver Guardians"></a>
        </div>
        <div id="logo-name"><h1>FurEver Guardians</h1></div>
        <div id='search-box'>
            <div id='row-search'>
                <input type="text" id='input-box' placeholder='Search'>
                <button id='magnify' onclick='search()'><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <script src='searchlist.js'></script> 
        </div>
        <div id="profile">
            <div id="icon">                
                <?php
                session_start();
                include 'dbcon.php';
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    $userID = $_SESSION['userID'];
                    $query = "SELECT ProfilePic FROM member WHERE MemberID = '$userID'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        if (!empty($row['ProfilePic'])) {
                            echo '<a href="profile.php"><img src="data:image/jpeg;base64,' . base64_encode($row['ProfilePic']) . '" alt="user-icon"></a>';
                        } else {
                            echo '<a href="profile.php"><img src="image/profile.png" alt="user-icon"></a>';
                        }
                    }
                }
                ?>
            </div>
            <div id="login"><a href="login.php">Login</a></div>
        </div>
        <script>
        <?php
        include 'dbcon.php';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            echo 'document.getElementById("icon").style.display = "block";';
            echo 'document.getElementById("login").style.display = "none";';
        } else {
            echo 'document.getElementById("icon").style.display = "none";';
            echo 'document.getElementById("login").style.display = "block";';
        }
        ?>
        </script>
    </div>
    <div id="nav">
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="#">Pet SAAP</a>
                <ul>
                    <li><a href="#">Surrender</a></li>
                    <li><a href="#">Adoption</a></li>
                    <li><a href="#">Report</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Event</a>
            </li>
            <li>
                <a href="#">Donation</a>
            </li>
            <li>
                <a href="#">Volunteer</a>
            </li>
            <li>
                <a href="#">More</a>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="newsletter.html" target="_blank">News Letter</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="faq.html" target="_blank">FAQ</a></li>
                </ul>
            </li>
        </ul>
    </div>


<?php
include 'dbcon.php'; 

$query = "SELECT * FROM gallery";
$result = mysqli_query($conn, $query);
$images = [];

while ($row = mysqli_fetch_assoc($result)) {
    $images[] = $row['Image'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0d6539403e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
    <h2>Gallery</h2>
    <div class="container">
        <div class="buttons">
            <button id="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
            <button id='upload'><a href="Glry-admin.php"><p>UPLOAD</p></a></button>
            <button id="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        </script>
        <div class="image-container">
            <?php foreach ($images as $imageData): ?>
                <img src="data:image/jpeg;base64,<?php echo base64_encode($imageData); ?>" alt="Uploaded Image">
            <?php endforeach; ?>
        </div>
        <script>
        <?php
        if (isset($_SESSION['loggedin']) && isset($_SESSION['userRole'])) {
            $userRole = $_SESSION['userRole'];
            if ($userRole === 'Admin') {
                echo 'document.getElementById("upload").style.display = "block";';
            } else {
                echo 'document.getElementById("upload").style.display = "none";';
            }
        } else {
            echo 'document.getElementById("upload").style.display = "none";';
        }
        ?>
        </script>
    </div>
    <script src="gallery.js"></script>
</body>
</html>

<?php
mysqli_close($conn); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0d6539403e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
            <!-- contact us -->
            <div class="contact-us">
            <h3>Contact Us</h3>
            <div class="wrapper-LR">
                <div id="contact-us-left">
                    <ul>
                        <li>
                            <p>Address: 123, Jalan Merdeka,</p>
                            <div id="address">
                                <p>Taman Seri Melaka,</p>
                                <p>75000 Melaka,</p>
                                <p>Malaysia</p>
                            </div>
                        </li>
                    </ul>
                </div>    
                <div id="contact-us-center">
                    <ul>
                        <li>
                            <p>Email: FurEver@gmail.com</p>
                        </li>
                        <li>
                            <p>Phone: +0199374624</p>
                        </li>
                    </ul>    
                </div>         
                <div id="social-media-right">
                    <p>Follow us On</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
        <!-- contact us -->
    </div>  
</body>
</html>