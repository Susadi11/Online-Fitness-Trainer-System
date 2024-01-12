<?php
session_start();
?>

<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="customerstyles.css">
    <title>Customer care Page</title>
</head>
<body style="background-color:silver;">

<h1>Our Blog</h1>
<p>Welcome to our Perfect fitness website's blog page, your go-to destination for all things related to physical fitness, health, 
   and wellness. Whether you are a fitness enthusiast, a beginner looking to kickstart your fitness journey, or simply curious about 
   the benefits of staying fit, you have come to the right place. Our blog is designed to provide you with insightful articles, 
   practical tips, and expert advice to help you achieve your fitness goals, improve your overall well-being, and lead a healthier, more active lifestyle. 
   Get ready to be inspired, motivated, and equipped with the knowledge you need to make fitness a part of your daily routine.</P>
<br><br><br>
<a href="createBlog.php?id=' . $row['blog_id'] . '"><input class="create-button" type="submit" value="Create Blogs"></a>

<br><br><br><br>


     
        <?php
        
        $sql = "SELECT * FROM blog ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo '<div class="blog-post">';
                echo '<p><strong>Blog ID:</strong> ' . $row["blog_id"] . '</p>';
                echo '<div class="post-image"><img src="' . $row["blog_img"] . '" alt="Blog Image"></div>';
                echo '<p><strong>Tittle:</strong> ' . $row["blog_titl"] . '</p>';
                echo '<p><strong>Description:</strong> ' . $row["blog_des"] . '</p>';
                echo '<div class="post-actions">';

                echo '<a href="../PHP/viewBlog.php?id=' . $row['blog_id'] . '"><input class="view-button" type="submit" value="View"></a>';
                echo '<a href="../PHP/editBlog.php?id=' . $row['blog_id'] . '"><input class="edit-button" type="submit" value="Edit"></a>';
                echo '<a href="deleteBlog.php?id=' . $row['blog_id'] . '"><input class="delete-button" type="submit" value="Delete"></a>';

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
</body>
</html>
