
<?php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $blog_id = $_GET['id'];

    $query = "SELECT * FROM `blog` WHERE `blog_id` = '$blog_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $blogData = mysqli_fetch_assoc($result);

   

?>


<!DOCTYPE>
    <html>
        <head>
        <link rel="stylesheet" href="viewstyles.css">
        </head>
        <body>
        <h2>Blog Details</h2>
                
                   <div class="view-container">
                        Blog ID:
                        <?php echo $blogData['blog_id']; ?>
                    <br>
                    <br>

                    Title:
                        <?php echo $blogData['blog_titl']; ?>
                    
                  <br>
                  <br>  
                
                        Image:
                        <img src="<?php echo $blogData['blog_img']; ?>" alt="Blog Image" width="400" height="500">

            <br>
            <br>
                       
                       Description:
                        <?php echo $blogData['blog_des']; ?>
                    </div>
                    
                    
    <a href="customerCare.php">
  <input type="button" class="back-button" value="Back">
</a>
        </body>
        </html>


        <?php
       
    } else {
        echo "Blog not found!";
    }

  
    mysqli_free_result($result);
} else {
    echo "Invalid request!";
}


mysqli_close($conn);
?>