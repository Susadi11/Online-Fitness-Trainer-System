<?php
session_start();
include_once 'config.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog_img = $_POST['blog_img'];
    $blog_titl = $_POST['blog_titl'];
    $blog_des = $_POST['blog_des'];
    
    
    

    $sql = "INSERT INTO blog (blog_id,blog_img,blog_titl,blog_des)
            VALUES ('','$blog_img','$blog_titl', '$blog_des')";

    if ($conn->query($sql) === TRUE) {
        echo "Blog created successfully.";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<!DOCTYPE>
<html>
    <head>
    <link rel="stylesheet" href="customerstyles.css">
    <title>Blog create Page</title>
    <h1>Create A Blog</h1>
</head>
    <body style="background-color:silver;">
        <br><br><br><br><br>
        <div class="cform">

<form method="POST" action="createBlog.php">
        <label for="image">Image:</label>
        <input type="file" id="blog_img" name="blog_img" required>
        <br><br><br>
        <label for="title">Title:</label>
        <input type="text" id="blog_titl" name="blog_titl" required>
        <br><br><br>
        <label for="description">Description:</label>
        <textarea id="blog_des" name="blog_des" rows="8" cols="50" required></textarea>
        <br><br><br>
       
        <br>
        <input type="submit" value="Create">
    </form>
</div>

</body>
</html>