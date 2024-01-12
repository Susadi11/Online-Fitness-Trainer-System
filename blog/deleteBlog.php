<?php
include_once'config.php';
?>
<?php
    $blog_id=$_GET['id'];
    $query="delete from blog where blog_id='$blog_id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
       
            echo"<script>alert('Recorded deleted !!')</script>";
            header("Location:customerCare.php");
           
           }
          else{
            echo"<script>alert('Error in delete  !!')</script>";
         
    }
    mysqli_close($conn);
?>