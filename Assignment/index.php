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
    <div class="box">
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
                            // Check if the ProfilePic is not empty
                            if (!empty($row['ProfilePic'])) {
                                echo '<a href="profile.php"><img src="data:image/jpeg;base64,' . base64_encode($row['ProfilePic']) . '"></a>';
                            } else {
                                // If ProfilePic is empty, use default profile picture
                                echo '<a href="profile.php"><img src="image/profile.png"></a>'; 
                            }
                        }
                    }
                    ?>
                </div>
                <div id="login"><a href="login.php">Login</a></div>
            </div>
            <script>
            // Check if the user is logged in
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

        <!-- content0 -->
        <div class="intro1">
            <p id="intro-description">Where every click becomes a pawprint of compassion, our website is a virtual haven for homeless animals, connecting hearts to homes one pixel at a time.</p>
            <img src="image/dog1.jpg" alt="picture">
        </div>

        <!-- content1  -->
        <div id="intro2">
            <h1>What is FurEver Guardians</h1>
            <p>Welcome to FurEver Guardians, where we rescue, rehabilitate, and rehome animals in need. We provide shelter, foster care, and support responsible pet ownership through education. With your help, we advocate for the well-being of all animals. Join us in making a positive impact, one rescue at a time.</p>
        </div>

        <!-- content2 -->
        <div class="services">
            <h1>Our Services</h1>
            <div class="service-wrapper">
                <div id="service-title"><a href="#">Rescue</a></div>
                <div id="service-title"><a href="#">Adopt</a></div>
                <div id="service-title"><a href="#">Education</a></div>
            </div>
            <div class="service-image">
                <a href="#"><img src="image/Rescue dog.jpg" alt="Rescure Image"></a>
                <a href="#"><img src="image/adopt dog.jpg" alt="Adopt Image"></a>
                <a href="#"><img src="image/Education.jpg" alt="Education Image"></a>
            </div>
        </div>

        <!-- content3 -->
        <div class="description">
            <h1>Brief Description</h1>
            <p>FurEverGuardians is a dedicated animal rescue organization committed to rescuing, rehabilitating, and rehoming animals in need. Our mission is to provide a safe haven for abandoned, neglected, and stray animals, ensuring they receive the love and care they deserve. We offer temporary foster care, reunite lost pets with their owners, and find loving forever homes for animals in our care. Through educational outreach and community engagement, we strive to build a compassionate community that values and advocates for the well-being of all animals. Thank you for supporting FurEverGuardians in our mission to make a positive impact in the lives of animals.</p>
        </div>

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