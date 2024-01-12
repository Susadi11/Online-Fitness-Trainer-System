<?php
session_start();
include 'config.php';


        $blog_id = $_GET['id'];

        $sql = "SELECT * FROM `blog` WHERE `blog_id` = '$blog_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        $blog_img = $row['blog_img'];
        $blog_titl = $row['blog_titl'];
        $blog_des = $row['blog_des'];
        

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="editstyles.css">
    <script src="script.js"></script>
    <title>Edit Blog Page</title>
    
</head>

<body style="background-color:silver;">

                
                <form action="updateDetails.php" method="POST">
                <h2>Edit Blogs Details</h2>
                <br><br>
        <div class="container">

                Blog ID:
            <input type="text" id="blog_id" name="blog_id" value="<?php echo $blog_id; ?>" readonly><br>
            <br><br>
          
           <label for="blog_img">Image:</label>
            <img src="<?php echo $blog_img; ?>" alt="Blog Image">
            <input type="file" id="blog_img" name="blog_img">
            <br><br>
           Title:
            <input type="text" id="blog_titl" name="blog_titl" value="<?php echo $blog_titl; ?>"><br><br>
            Description:
            
            <input type="text" id="blog_des" name="blog_des" value="<?php echo $blog_des; ?>"><br><br><br><br>
          
            <input type="submit" value="update" >
                </form>
        </div>
</body>
</html>