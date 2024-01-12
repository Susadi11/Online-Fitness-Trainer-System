
    <?php
session_start();
?>

<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Perfect Fitness</title>

  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="customerstyles.css">
  
</head>
<body style="background-color:silver;">

<body>
    <div class="nav">

      <div class="nav-logo">
        <img  src="../Images/Logo.png" alt="Perfect Fitness logo" style="width:145px;height:145px;">
      </div>
      <div class="nav-items">
       
      <button class="Home-Button" id="HomeButton" ><a href="../Online Fitness Trainer site/">Home</a></button>
        <button class="FC-Button" id="FC-Button" >Free courses</button>
        <button class="Programs-Button" id="Programs-Button" >Programs</button>
        <button class="About-Button" id="About-Button" >About</button>
        <button class="CU-Button" id="CU-Button" ><a href="../Online Fitness Trainer site/contact.html">Contact Us</a></button>
        <button class="FAQ-Button" id="FAQ-Button" >FAQ</button>
        <button class="BR-Button" id="BR-Button" ><a href="../Online Fitness Trainer site/PHP/Userblog.php">Blog/Resources</a></button>
        <button class="APP-Button" id="APP-Button" >Appointments</button>
        <button class="Login-Button" id="Login-Button" >LOGIN</button>


    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>

<h1>Our Blog</h1>
<p>Welcome to our Perfect fitness website's blog page, your go-to destination for all things related to physical fitness, health, 
   and wellness. Whether you are a fitness enthusiast, a beginner looking to kickstart your fitness journey, or simply curious about 
   the benefits of staying fit, you have come to the right place. Our blog is designed to provide you with insightful articles, 
   practical tips, and expert advice to help you achieve your fitness goals, improve your overall well-being, and lead a healthier, more active lifestyle. 
   Get ready to be inspired, motivated, and equipped with the knowledge you need to make fitness a part of your daily routine.</P>
<br><br><br>

  

    <div class="blog-container">
        
        <?php
        
        $sql = "SELECT * FROM blog ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo '<div class="blog-post">';
                echo '<p style="color:red;">' . $row["blog_titl"] . '</p>';
                echo '<div class="post-image"><img src="' . $row["blog_img"] . '" alt="Blog Image"></div>';
                echo '<p>' . $row["blog_des"] . '</p>';
                echo '<div class="post-actions">';

             

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No blogs available.</p>";
        }
        include_once 'config.php';

?>
   </div>
 
        
    </div>
</body>
</html>