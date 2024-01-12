
<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="customerstyles.css">
    
</head>
<body>

<h1>Blog Details</h1>
<br><br><br>
<a href="createBlog.php?id=' . $row['blog_id'] . '"><input class="create-button" type = "submit" value="Create Blogs"></a>
    <div class="job-posts">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $blog_id=$_POST['blog_id'];
            $blog_img=$_POST['blog_img'];
            $blog_titl = $_POST['blog_titl'];
            $blog_des = $_POST['blog_des'];
            
            
        

                $sql = "UPDATE `blog` SET `blog_img`='$blog_img', `blog_titl`='$blog_titl', `blog_des`='$blog_des' WHERE `blog_id`='$blog_id'";

                if (mysqli_query($conn,$sql))
                {
                    echo"<script>alert('Record inserted suceesfully')</script>";
                    header("Location:../php/customerCare.php");
                    
                }
                else{
                    echo"<script>alert('Error')</script>";
                }
                
                mysqli_close($conn);

            }
?>
  
        
    </div>
</body>
</html>