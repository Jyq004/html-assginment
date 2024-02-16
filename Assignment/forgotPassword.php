<?php
include 'dbcon.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0d6539403e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/forgotpassword.css">
    <title>Document</title>
</head>
<body>
    <div class ='wrapper'>
        <a href="login.php"><i class="fa-solid fa-arrow-left"></i></a>
        <form action="" method='post'>
        <div class='input-wrapper'>
            <h3>Security Question</h3>
            <div class="input">
                <input type="email" name="email" required placeholder="Email"> 
            </div>
            <div class="input">
                <input type="text" name="ff" required placeholder="Your favourite food">
            </div> 
            <div class="input">
                <input type="text" name="fd" required placeholder="Your favourite drink"> 
                </div>
            <div class="input">
                <input type="text" name="ft" required placeholder="Your favourite Teacher"> 
            </div>
        </div>
        <div class="forgot">
            <input type=submit value='Forgot' name='btnsubmit' required>
        </div>
        </form>
        <?php
        if(isset($_POST['btnsubmit'])){
            $ff=$_POST['ff'];
            $fd=$_POST['fd'];
            $ft=$_POST['ft'];
            $email=$_POST['email'];
            $query = "SELECT * FROM member WHERE Email = '$email' AND Sec_ques1 = '$ff' AND Sec_ques2 = '$fd' AND Sec_ques3 = '$ft'";
            $result=mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                if($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='result-message'>Your password is: " . $row['Password'] . "</div>";
                }
            } else {
                echo "<div class='result-message error-message'>Record not found.</div>";
            }
        }
        ?> 
    </div>
</body>
</html>